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
        $rev[] = $obj->data[$i];
      }

      for ($i=0; $i <count($rev) ; $i++) {
        if(isset($rev[$i]->review_text)){
          $review[] =  [$rev[$i]->review_text, $rev[$i]->rating, strstr($rev[$i]->reviewer->name, ' ', true)];
        }
      }

      // return view('layouts.reviews', compact('review'));
      dd($obj->data[0]->review_text,$rev,$res);
    }
}
