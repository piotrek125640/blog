<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function getReviews(){
      // $app_id = '163973667636114';
      // $app_secret = '2641b04c5306aeb0688e82592be04eca';
      // $access_token_url = "https://graph.facebook.com/oauth/access_token?client_id=$app_id&client_secret=$app_secret&grant_type=client_credentials";
      // $access_token_data = file_get_contents($access_token_url);
      // $access_token_arr = json_decode($access_token_data);
      // $accessToken = $access_token_arr->access_token;
      // $rev = curl_init();
      // curl_setopt($rev, CURLOPT_SSL_VERIFYPEER, false);
      // curl_setopt($rev, CURLOPT_RETURNTRANSFER, true);
      // curl_setopt($rev, CURLOPT_URL, 'https://graph.facebook.com/v2.12/127959464396298/ratings?access_token=EAACVIhg2Q5IBAPw55m10kNRFAhoDLXdXpLFVJJpzjZAEUm4EGQRfOFRJ8pLOEqmPhK60LosjTLwizaAOrjYkJjH2XhJNAKgx1soZAhlWVxmc8M7FWL3Fayt5RuETUZCc4cesSyKXf2svRyV0WDZCiHNUgge7VXu1rXuc3Lm8ZBIGwCqmFIFwXbFZCXqRVEbYIngYJPKRALVQZDZD');
      // $result = curl_exec($rev);
      // curl_close($rev);
      // $rev = array();
      // $obj = json_decode($result);
      // for ($i=0; $i <count($obj->data) ; $i++) {
      //   $rev[] = $obj->data[$i];
      // }
      //
      // for ($i=0; $i <count($rev) ; $i++) {
      //   if(isset($rev[$i]->review_text)){
      //     $review[] =  [$rev[$i]->review_text, $rev[$i]->rating, strstr($rev[$i]->reviewer->name, ' ', true)];
      //   }
      // }
      //
      // return view('layouts.reviews', compact('review'));
      // dd($obj->data[0]->review_text,$review);
      // dd($result);

      $fb = new \Facebook\Facebook([
        'app_id' => '163973667636114',
        'app_secret' => '2641b04c5306aeb0688e82592be04eca',
        'default_graph_version' => 'v2.2',
        ]);

      $helper = $fb->getPageTabHelper();

      try {
        $accessToken = $helper->getAccessToken();
      } catch(Facebook\Exceptions\FacebookResponseException $e) {
        // When Graph returns an error
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
      } catch(Facebook\Exceptions\FacebookSDKException $e) {
        // When validation fails or other local issues
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
      }

      if (! isset($accessToken)) {
        echo 'No OAuth data could be obtained from the signed request. User has not authorized your app yet.';
        exit;
      }

      // Logged in
      echo '<h3>Page ID</h3>';
      var_dump($helper->getPageId());

      echo '<h3>User is admin of page</h3>';
      var_dump($helper->isAdmin());

      echo '<h3>Signed Request</h3>';
      var_dump($helper->getSignedRequest());

      echo '<h3>Access Token</h3>';
      var_dump($accessToken->getValue());


}
}
