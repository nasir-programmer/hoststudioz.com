<?php

namespace App\Http\Controllers;
use App\payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
       echo "<pre>" ;
       print_r($service->property);
       echo "</pre>" ;
       exit;
       return view('pay');
    }

    public function pay(PaymentRequest $request)
    {   
        
    }

    public function registerPay(Request $request)
    {   
        if($request->post()){
            echo "<pre>";
            print_r($request->post());
            exit;
            $validatedData = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);
            
            $user = \App\User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);
        } else {
            return view('pay');
        }
       
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        
        print_r($user->id);
        exit;
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
