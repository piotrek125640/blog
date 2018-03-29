<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function getReviews(){
      $rev = curl_init();
      curl_setopt($rev, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($rev, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($rev, CURLOPT_URL, 'https://graph.facebook.com/127959464396298/ratings?access_token=EAACEdEose0cBANdKZBh3oN4OyW1C32nl81q7UStxgVcZACVdKZAmKaqqbYeCZArqy5o5Dj90ZANzGLZAAtuh5K97duxwZAfTOIy5YZC2N3MepAX8L4PAsCZAfHbbwOkZC665kIca6okbgfZBjCPyEs2nBJ7nv2ZCmiR3g1N8Ya18ZBLsdaIoEuHpnTIZAKuz6DDpa81QAZD');
      $result = curl_exec($rev);
      curl_close($rev);

      $obj = json_decode($result);
      for ($i=0; $i <count($obj->data) ; $i++) {
        $reviews[] = $obj->data[$i];
      }

      for ($i=0; $i <count($reviews) ; $i++) {
        if(isset($reviews[$i]->review_text)){
          $res[] =  [$reviews[$i]->review_text, $reviews[$i]->rating, strstr($reviews[$i]->reviewer->name, ' ', true)];
        }
      }

      dd($obj->data[0]->review_text,$reviews,$res);
    }
}
