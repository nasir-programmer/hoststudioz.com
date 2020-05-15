<?php
    //php artisan make:model Services --migration
    /**
     * php artisan migrate
     * php artisan make:controller ServicesController --resource
     * 
     * routes/web.php 
     * Route::resource('services', 'ServicesController');
     * Route::apiResource('services', 'ServicesController');
     */
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    use \App\Services;
    use App\Http\Requests\ServicesRequest;


    class ServicesController extends Controller
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
             $model = new Services();
            $model=$model->paginate(2);
            return view('services.index', compact('model'));
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('services.create');
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */

        public function store(ServicesRequest $request)
        {
            $validatedData = $request->validated();

            $model = new Services;
            //$data = $request->only($model->getFillable());
            $data = $request->all();
            $model->fill($data)->save();
            return redirect('/services')->with('success', 'Services saved!');
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
            $model = Services::find($id);
            return view('services.edit', compact('model'));    
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(ServicesRequest $request,int $id)
        {
            $request->validated();
            $model = Services::find($id);
            //$data = $request->only($model->getFillable());
             $data = $request->all();
             $model->fill($data)->save();
            return redirect('/services')->with('success', 'Services updated!');
        }

    }
    