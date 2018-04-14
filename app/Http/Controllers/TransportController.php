<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class TransportController extends Controller
{
    public function index(){
      $result = Photo::where('sekcja','=' ,'3')
                ->get();
      for ($i=1; $i<count($result); $i++) {
        $slides[] = $i;
      }
      foreach($result as $object)
      {
          $photos[] = $object->toArray();
      }
		return view('transport.index',compact(['photos','slides']));
		}
}
