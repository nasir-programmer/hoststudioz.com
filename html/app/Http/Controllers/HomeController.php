<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function subscribe(){
        // echo auth()->user()->id;
        // exit;
        // $user = \App\User::find(auth()->user()->id);
        // $user->subscription('monthly')->create('test');
    }

    public function gen(){
        $tables = \Illuminate\Support\Facades\DB::select('SHOW TABLES from hoststudiozcom');
        foreach($tables as $table) {
            $tableName = $table->Tables_in_hoststudiozcom;
            echo "php artisan krlove:generate:model ".ucfirst($tableName)." --table-name=".$tableName."<br>";
            // echo "php artisan krlove:generate:model ".ucfirst($tableName)." --output-path=".__DIR__."/../../Models/Gcbucket/ --namespace=App\\\Models\\\Gcbucket --connection=gcbucket --table-name=".$tableName."<br>";
    
     
        }
    }
}
