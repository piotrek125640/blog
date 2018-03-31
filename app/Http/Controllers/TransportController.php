<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class TransportController extends Controller
{
    public function index(){
      $photos = Photo::where('sekcja','=' ,'3')
                ->get();

      $count = count($photos);
      for ($i=0; $i < $count ; $i++) {
        $slides[] = $i;
      }
		return view('transport.index',compact(['photos','slides']));
		}
}
