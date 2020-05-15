<?php
    //php artisan make:model Payments --migration
    /**
     * php artisan migrate
     * php artisan make:controller PaymentsController --resource
     * 
     * routes/web.php 
     * Route::resource('payments', 'PaymentsController');
     * Route::apiResource('payments', 'PaymentsController');
     */
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    use \App\Payments;
    use App\Http\Requests\PaymentsRequest;


    class PaymentsController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */

        public function __construct()
        {
            $this->middleware('auth');
        }

        public function index(Request $request)
        {
            $model = new Payments();
            $model=$model->paginate(2);
            return view('payments.index', compact('model'));
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('pay');
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */

        public function store(PaymentsRequest $request)
        {
            $validatedData = $request->validated();
            $model = new Payments;
            //$data = $request->only($model->getFillable());
            $data = $request->all();
            $model->fill($data)->save();
            return redirect('/payments')->with('success', 'Payments saved!');
        }



        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show(int $id)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit(int $id)
        {
            $model = Payments::find($id);
            return view('payments.edit', compact('model'));    
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(PaymentsRequest $request,int $id)
        {
            $request->validated();
            $model = Payments::find($id);
            //$data = $request->only($model->getFillable());
            $data = $request->all();
            $model->fill($data)->save();
            return redirect('/payments')->with('success', 'Payments updated!');
        }
      
    }
    