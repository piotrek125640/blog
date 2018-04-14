<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class WarsztatController extends Controller
{
    public function index(){
      $result = Photo::where('sekcja','=' ,'4')
                ->get();
      for ($i=0; $i<count($result); $i++) {
        $slides[] = $i+1;
      }

      foreach($result as $object)
      {
          $photos[] = $object->toArray();
      }
		return view('warsztat.index',compact(['photos','slides']));
		}
}
