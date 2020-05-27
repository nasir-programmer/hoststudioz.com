<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
              
        try{ 
            $files = Storage::disk('ftp')->files('/');
        } catch (Exception $e) {
            echo "Sorry Server Downtime Try after some time";
            exit;
            $f['Error']= "Sorry Server Downtime Try after some time";
            return view('home',$f);
        }
       
       
        // echo "<pre>";
        // print_r($files);
        // exit;
        $f = [];
        foreach($files as $file){
           $f['data'][] =   route('download-data',$file);
            // echo "<a href='".route('download-data',$file)."' >".route('download-data',$file)."</a><br>";
        }
        return view('home',$f);
    }

    public function pay(){
        
    }

   public function download($fileName) 
   {
    return Storage::disk('ftp')->download($fileName);
   }
}
