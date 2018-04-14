<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class MainController extends Controller
{
  public function index(){
      $result = Photo::where('sekcja','=' ,'1')
                ->get();
      for ($i=1; $i<count($result); $i++) {
        $slides[] = $i;
      }

      foreach($result as $object)
      {
          $photos[] = $object->toArray();
      }
      // Dump array with object-arrays
      // dd(array_slice($photos,1));

      // dd($photos[0][0]->src,$slides);
  return view('index',compact(['photos', 'slides']));
  }
}
