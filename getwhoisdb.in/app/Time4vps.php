<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time4vps extends Model
{
    CONST BRAND = 'HostStudioz';
    CONST MARGIN = 40;
    
    private function removeService($obj){
        $removeCategories = [3];
        $removeProducts = [];
         $return = $obj;
         foreach($removeCategories as $id){
             foreach($return->categories as $k=>$v){
                if($v->id == $id){
                    // unset($v);
                    unset($return->categories[$k]);
                } else {
                    foreach($removeProducts as $pid){
                        foreach($return->categories[$k]->detail->products as $pk=>$pv){
                           if($pv->id == $pid){
                               // unset($v);
                               unset($return->categories[$k]->detail->products[$pk]);
                           } 
                        }
                    }
                }
             }
         }
       return $return;
    }

    private function PriceAddCalc($originalNumber, $percentageChange){
        //  return $originalNumber;
        //Get 2.25% of 100.
        $numberToAdd = ($originalNumber / 100) * $percentageChange;
        
        //Finish it up with some simple addition
        $newNumber = $originalNumber + $numberToAdd;
        
        //Result is 102.25
        return number_format((float) $newNumber,2);
    }

    private function PriceMod($return)
    {
        $priceChange = [
            'm' => 35,
            'q' => 35,
            's' => 35,
            'a' => 35,
            'b' => 35,
            'default' => 40,
        ];
        foreach($return->categories as $k=>$v){
            
                    foreach($return->categories[$k]->detail->products as &$products){
                    
                        foreach($products->periods as &$peroidPrice){
                            if(array_key_exists($peroidPrice->value, $priceChange)){
                                   $peroidPrice->price = $this->PriceAddCalc($peroidPrice->price, $priceChange[$peroidPrice->value]);
                            } else {
                                $peroidPrice->price = $this->PriceAddCalc($peroidPrice->price,$priceChange['default']);
                            }
                        }
                    }
         }
         return $return;
    }

    public static function priceConfig($originalNumber, $peroidPrice = 'default'){
        $priceChange = [
            'm' => 35,
            'q' => 35,
            's' => 35,
            'a' => 35,
            'b' => 35,
            'default' => 35,
        ];
        $numberToAdd = ($originalNumber / 100) * $priceChange[$peroidPrice];

        //Finish it up with some simple addition
        $newNumber = $originalNumber + $numberToAdd;
        
        //Result is 102.25
        return number_format((float) $newNumber,2);
        // return $this->PriceAddCalc($price, $priceChange[$peroidPrice]);
    }

    function ScanAndChangePrice(&$obj){
        if(isset($obj->price)){
            $obj->price = $this->priceConfig($obj->price);
        }
        if(isset($obj->price_today)){
            $obj->price_today = $this->priceConfig($obj->price_today);
        }

        if(isset($obj->items)){
            foreach($obj->items as &$item){
                $item->price = $this->priceConfig($item->price);
            }
        }
       
        return $obj;
    }
    /**USE IN ORDER DETAIL PAGE */
    private function PriceModItem($return)
    {

        if(isset( $return->product->config ) ){
            $return->product = $this->ScanAndChangePrice($return->product);
            // $productItem = $return->product->config->product; // items ,price
            if(isset ($return->product->config->product[0]->items) ) {
                $return->product->config->product[0] = $this->ScanAndChangePrice($return->product->config->product[0]);
            }

            // $productForms= $return->product->config->forms; // items No Change Required
            // $productAddons= $return->product->config->addons; //config ->items

            if( isset($return->product->config->addons) ){
                foreach($return->product->config->addons as &$addOnConfig){
                    if( isset($addOnConfig->config) ){
                        foreach($addOnConfig->config as &$ProductItem){
                            if(isset($ProductItem->items)){
                               $ProductItem = $this->ScanAndChangePrice($ProductItem);
                            }
                        }
                       
                    }
                }
            }
        } 
         return $return;
    }

    public static function AllServiceList()
    {
        $Time4vps = new \App\Time4vps();
        $auth = [ 'auth' => [env('T4VPS_USER'), env('T4VPS_KEY')]];

        if (file_exists('t4vpsResponse.json') && is_readable ('t4vpsResponse.json'))
        {
            $response = json_decode( file_get_contents('t4vpsResponse.json'));
        } 
        else 
        {
            $client = new \GuzzleHttp\Client();
            $response = $client->get('https://billing.time4vps.com/api/category/', $auth);
            $response = $response->getBody();
            $response = $Time4vps->removeService( json_decode($response) );
            
            foreach($response->categories as &$v){
                $details = $client->get('https://billing.time4vps.com/api/category/'.$v->id.'/product', $auth);
                $details = $details->getBody();
                $v->detail = json_decode($details);
            }
            file_put_contents('t4vpsResponse.json',json_encode($response));
        }
        // echo "<pre>";
        $response = $Time4vps->removeService($response);
        // print_r($response);
        $response =  $Time4vps->PriceMod($response);
        
        // exit;
        $response = json_encode($response);
        // return $response;
        return str_replace('Time4VPS', $Time4vps::BRAND, $response);
    }


    public function productsDetail(int $productid){
        $auth = [ 'auth' => [env('T4VPS_USER'), env('T4VPS_KEY')]];
        $Time4vps = new \App\Time4vps();
        $client = new \GuzzleHttp\Client();
        $request = $client->get('https://billing.time4vps.com/api/order/'.$productid, $auth);
     $response = $request->getBody();
    //  /category/@category_id/product
    $response = json_decode($response);

    $details = $client->get('https://billing.time4vps.com/api/category/'.$response->product->category_id.'/product', $auth);
    $details = $details->getBody();
    $details = json_decode($details);
    // $response->detail = json_decode($details);
    $det = array_search($productid, array_column($details->products, 'id')); 
    $response->details = $details->products[$det];
    // echo "<pre>";
    // print_r($response);
    // exit;
    //  $response = $Time4vps->removeService($response);
      return $response =  $Time4vps->PriceModItem($response);
    //   $response = json_encode($response);
    //    return str_replace('Time4VPS', $Time4vps::BRAND, $response);
    }

    public function itemPrice($dump, int $itemID){
    //     $response = $this->productsDetail(127);
    //    return $re = array_search($itemID, array_column($response, 'id'));
        // return $response = ($response);
    }
}
