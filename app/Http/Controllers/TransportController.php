<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class TransportController extends Controller
{
    public function index(){
      $photos = Photo::where('sekcja','=' ,'3')
                ->get();
      for ($i=0; $i<count($photos); $i++) {
        $slides[] = $i+1;
      }
		return view('transport.index',compact(['photos','slides']));
		}
}
