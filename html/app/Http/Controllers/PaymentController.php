<?php

namespace App\Http\Controllers;
use App\payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderConfirm;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(int $request = null)
    {
        $service = \App\Product::findorfail($request);
       
    //    echo "<pre>" ;
    //    print_r($service->property);
    //    echo "</pre>" ;
    //    exit;
       return view('pay', compact('service'));
    }

    public function pay(PaymentRequest $request)
    {   
        
    }

    public function loginpay(Request $request)
    {
        if($request->post()){
            $validatedData = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required'],
                'totalAmount' => ['required'],
                'serviceName' => ['required'],
                'serviceDescription' => ['required'],
            ]);
           
            $serviceOrderID = \App\Services::create([
                'user_id' => Auth::user()->id,
                'name' => $request['name'],
                'discription' => $request['serviceDescription'],
                'start' => Date("Y-m-d H:i:s", strtotime($request['start'])),
                'expiry' => Date("Y-m-d H:i:s", strtotime($request['expiry'])),//$request['expiry'],
                'active' => 0,
            ]);
           
            $paymentRequest['data'] = [
                'ORDER_ID' => $serviceOrderID->id,
                'CUST_ID' =>  Auth::user()->id,
                'MOBILE_NO' => "9716942965",
                'EMAIL' =>  Auth::user()->email,
                'TXN_AMOUNT' => $request['totalAmount'],
                'CALLBACK_URL' => Route('paymentreturn')
            ];
            
            $paymentID = \App\Payments::create([
                'user_id' => Auth::user()->id,
                'service_id' => $serviceOrderID->id,
                'request' => json_encode($paymentRequest['data']),
                'response' => '',
                
            ]);
           
            session(['paymentID' => $paymentID->id]);
            session(['serviceOrderID' => $serviceOrderID->id]);
           
            return view('payment.paymentRequest', $paymentRequest); 
           
        }
            return view('pay');
        
    }

    public function registerPay(Request $request)
    {
        if($request->post()){
          
            $validatedData = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'mobile' => ['required', 'numeric', 'max:9999999999', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'totalAmount' => ['required'],
                'serviceName' => ['required'],
                'serviceDescription' => ['required'],
            ]);
            
            $user = \App\User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'mobile' => $request['mobile'],
                'password' => Hash::make($request['password']),
            ]);
           
            if( Auth::attempt([ 'email' =>  $request['email'], 'password' => Hash::make($request['password']) ]) || Auth::login($user, true)){
                
                // Register and login
            } else {
                echo "please login first then make payment";
                // exit;
            }


            
            $serviceOrderID = \App\Services::create([
                'user_id' => $user->id,
                'name' => $request['name'],
                'discription' => $request['serviceDescription'],
                'start' => Date("Y-m-d H:i:s", strtotime($request['start'])),
                'expiry' => Date("Y-m-d H:i:s", strtotime($request['expiry'])),//$request['expiry'],
                'active' => 0,
            ]);
           
            $paymentRequest['data'] = [
                'ORDER_ID' => $serviceOrderID->id,
                'CUST_ID' =>  $user->id,
                'MOBILE_NO' => $user->mobile,
                'EMAIL' =>  $user->email,
                'TXN_AMOUNT' => $request['totalAmount'],
                'CALLBACK_URL' => Route('paymentreturn')
            ];
            
            $paymentID = \App\Payments::create([
                'user_id' => $user->id,
                'service_id' => $serviceOrderID->id,
                'request' => json_encode($paymentRequest['data']),
                'response' => '',
                
            ]);
           
            session(['paymentID' => $paymentID->id]);
            session(['serviceOrderID' => $serviceOrderID->id]);
           
            return view('payment.paymentRequest', $paymentRequest); 
           
        }
            return view('pay');
        

    }

    public function paymentRequest(Request $request)
    {
        if($request->post('plane')){
            echo "<pre>";
            print_r($request->post('plane'));
            exit;
        } else {
            echo "please select plane";
            exit;
        }
       
        $data['data'] = [
            'ORDER_ID' => 123,
            'CUST_ID' => 12,
            'MOBILE_NO' => "9716942962",
            'EMAIL' => "hoststudioz@gmail.com",
            'TXN_AMOUNT' => 1
        ];
        return view('payment.paymentRequest', $data);
    }

    public function paymentDone(Request $request)
    {
        echo "<pre>";
        print_r($request->post());
        echo $request->post('RESPMSG');
       
        // session(['paymentID' => $paymentID->id]);
        // session(['serviceOrderID' => $serviceOrderID->id]);
       
      
        $service = \App\Services::findorfail(session::get('serviceOrderID'));
        $payment =  \App\Payments::findorfail( session::get('paymentID') );
        
        $payment->response = json_encode($request->post());
        $payment->save();
        $service->active=1;
        $service->save();
        echo "<br>".$payment->user->email;
        // Ship order...
        print_r($service);
        print_r($payment);
        echo "</pre>";
    dispatch(new \App\Jobs\SendEmailJob($payment));
  
    dd('done');
       
        exit;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(payment $payment)
    {
        //
    }
}
