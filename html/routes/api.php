<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('services', 'ServicesController');

Route::get('vps',function(){
    $client = new \GuzzleHttp\Client();
        $response = $client->get('https://billing.time4vps.com/api/category/available/vps', [
        'auth' => ['ph9716942965@gmail.com', 'TH8TJ5MW1yVl'],
        ]);
      return  $response = $response->getBody();
});

Route::get('ssl',function(){
    $client = new \GuzzleHttp\Client();
        $response = $client->get('https://billing.time4vps.com/api/certificate', [
        'auth' => ['ph9716942965@gmail.com', 'TH8TJ5MW1yVl'],
        ]);
      return  $response = $response->getBody();
});

Route::get('category',function(){
    $client = new \GuzzleHttp\Client();
        $response = $client->get('https://billing.time4vps.com/api/category/', [
        'auth' => ['ph9716942965@gmail.com', 'TH8TJ5MW1yVl'],
        ]);
      return  $response = $response->getBody();
});

Route::get('category/{id}',function($id){
    $client = new \GuzzleHttp\Client();
        $request = $client->get('https://billing.time4vps.com/api/category/'.$id.'/product', [
        'auth' => ['ph9716942965@gmail.com', 'TH8TJ5MW1yVl'],
        ]);
      return  $response = $request->getBody();
});

Route::get('category/{catid}/{productid}',function(int $catid, int $productid){
    $client = new \GuzzleHttp\Client();
        $request = $client->get('https://billing.time4vps.com/api/order/'.$productid, [
        'auth' => ['ph9716942965@gmail.com', 'TH8TJ5MW1yVl'],
        ]);
      return  $response = $request->getBody();
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
