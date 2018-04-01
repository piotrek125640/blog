<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class WarsztatController extends Controller
{
    public function index(){
      $photos = Photo::where('sekcja','=' ,'4')
                ->get();
      for ($i=0; $i<count($photos); $i++) {
        $slides[] = $i+1;
      }
		return view('warsztat.index',compact(['photos','slides']));
		}
}
