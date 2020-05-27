<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use App\Time4vps;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Party;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
Use Redirect;
use Session;
use Illuminate\Support\Facades\Response;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(int $request = null)
    {
        // echo "<pre>";
        $detail = new Time4vps();
        $details= $detail->productsDetail($request);
        // print_r(($detail));
        // exit;
        return view('Checkout', compact('details'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // $validatedData = $request->validated();
        
        // echo "<pre>";
        // echo Auth::user();
        // print_r($request->post());
        // // $detail = new Time4vps();
        // // $details= $detail->itemPrice($request->post('productID'),594);
        // // print_r(($details));
        // exit;
        DB::beginTransaction();

        try{

       
        $orderID = DB::table('orders')->insertGetId(
            ['user_id' =>  Auth::id(), 'status_id' => 0, 'request' => json_encode($request->post())]
        );

        $customer = new Party([
            'name'          =>  Auth::user()->name,
            'email' => Auth::user()->email,
            'address'       => 'The Green Street 12',
            // 'code'          => '#22663214',
            'custom_fields' => [
                'order number' => '> '.$orderID.' <',
            ],
        ]);
        $items = 
            (new InvoiceItem())->title($request->post('productName').' - '.$request->post('productCycleTitle'))
            ->pricePerUnit($request->post('productPrice'))
            ->quantity(1)
            ->discount(0)
        ;
        $invoice = Invoice::make()
        ->buyer($customer)
        ->addItem($items)
        ->filename('HostStudioz -' . $customer->name.'-'.$orderID)
        ->notes($request->post('description'))
        ->logo(public_path('vendor/invoices/sample-logo.png'));

        $invoiceID = DB::table('invoices')->insertGetId(
            ['user_id' =>  Auth::id(), 'status_id' => 0, 'order_id' => $orderID, 'file' => $invoice->url()]
        );

    } catch(ValidationException $e)
    {
        // Rollback and then redirect
        // back to form with errors
        DB::rollback();
        return Redirect::to('/form')
            ->withErrors( $e->getErrors() )
            ->withInput();
    } catch(\Exception $e)
    {
        DB::rollback();
        throw $e;
    }
    DB::commit();
        $invoice->save();
        
        session(['paymentID' => '$paymentID->id']);
        session(['invoiceID' => $invoiceID]);
        session(['orderID' => $orderID]);
         $emailDetails = [
            'to' => Auth::user()->email,
            'Attachment' => storage_path("app/".basename($invoice->url())),
            'Subnect' => 'Invoice Genrated Successfully',
         ];
        dispatch(new \App\Jobs\SendEmailJob($emailDetails))->onQueue('emails');
        
        return Redirect::to('/invoice');
        // return $invoice->stream();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(int $invoice=0)
    {
       
        $detail = \App\Invoice::findorfail(session::get('invoiceID'));
        
        $location = storage_path("app/".basename($detail->file));
        
        $emailDetails = [
            'to' => Auth::user()->email,
            'Attachment' => $location,
            'Subject' => 'Invoice Genrated Successfully',
         ];
       
        return Response::make(file_get_contents($location), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.basename($detail->file).'"'
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
