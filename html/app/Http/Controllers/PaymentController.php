<?php

namespace App\Http\Controllers;

use App\payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    public function pay(PaymentRequest $request)
    {   
        
    }

    public function paymentRequest(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'mobile_number' =>'required|numeric|digits:10|unique:events,mobile_number',
          ]);

        $data['data'] = [
            'ORDER_ID' => 123,
            'CUST_ID' => 12,
            'MOBILE_NO' => "9716942962",
            'EMAIL' => "hoststudioz@gmail.com",
            'TXN_AMOUNT' => 4
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
        //
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
