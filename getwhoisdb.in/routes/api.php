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
function ul_to_array ($ul) {
    // return str_replace()
    $convert = [
        // '<ul>' => "[",
        // '</ul>' => "]",
        // '<li>' => '{"',
        // '</li>' => '"},',
        // ',]' => ']',
        // '<strong>' => '',
        // '</strong>' => '',
        // ':' => '": "'
    ];
    foreach($convert as $k=>$v){
        $ul = str_replace($k,$v,$ul);
    }
    return $ul;
    if (is_string($ul)) {
      // encode ampersand appropiately to avoid parsing warnings
      $ul=preg_replace('/&(?!#?[a-z0-9]+;)/', '&amp;', $ul);
      if (!$ul = simplexml_load_string($ul)) {
        trigger_error("Syntax error in UL/LI structure");
        return FALSE;
      }
      return ul_to_array($ul);
    } else if (is_object($ul)) {
      $output = array();
      foreach ($ul->li as $li) {
        $output[] = (isset($li->ul)) ? ul_to_array($li->ul) : (string) $li;
      }
      return $output;
    } else return FALSE;
  }

Route::get('vps',function(){
    $client = new \GuzzleHttp\Client();
        $response = $client->get('https://billing.time4vps.com/api/category/available/vps', [
        'auth' => [env('T4VPS_USER'), env('T4VPS_KEY')],
        ]);
      return  $response = $response->getBody();
});

Route::get('ssl',function(){
    $client = new \GuzzleHttp\Client();
        $response = $client->get('https://billing.time4vps.com/api/certificate', [
        'auth' => [env('T4VPS_USER'), env('T4VPS_KEY')],
        ]);
      return  $response = $response->getBody();
});

Route::get('category',function(){
    $client = new \GuzzleHttp\Client();
        $response = $client->get('https://billing.time4vps.com/api/category/', [
        'auth' => [env('T4VPS_USER'), env('T4VPS_KEY')],
        ]);
      return  $response = $response->getBody();
});

Route::get('category/{id}',function($id){
    $client = new \GuzzleHttp\Client();
        $request = $client->get('https://billing.time4vps.com/api/category/'.$id.'/product', [
        'auth' => [env('T4VPS_USER'), env('T4VPS_KEY')],
        ]);
      $response = $request->getBody();
      $response = json_decode(($response));
    // echo "<pre>";
    //   print_r((($response)));
    
      
      foreach($response->products as &$prod){
          $disc=[]; 
        $prod->description = ($prod->description);
      }
    //   exit;
      return json_encode($response);
});

Route::get('category/{catid}/{productid}',function(int $catid, int $productid){
    $client = new \GuzzleHttp\Client();
        $request = $client->get('https://billing.time4vps.com/api/order/'.$productid, [
        'auth' => [env('T4VPS_USER'), env('T4VPS_KEY')],
        ]);
      $response = $request->getBody();
    //   echo "<pre>";
    //   print_r(json_decode(strip_tags($response)));
    //   exit;
      return  strip_tags($response);
});

Route::get('services',function(){

    return $response = (\App\Time4vps::AllServiceList());
if(file_exists('T4VPS.json')){
    return file_get_contents('T4VPS.json');
} 
    $vps = json_decode(file_get_contents(url('api/category')));
    foreach($vps->categories as &$v){
        $v->detail = json_decode(file_get_contents(url('api/category/'.$v->id)));
    }
    file_put_contents('T4VPS.json', json_encode($vps));
    
    return file_get_contents('T4VPS.json');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
