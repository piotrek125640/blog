<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class WarsztatController extends Controller
{
    public function index(){
      $photos = Photo::where('sekcja','=' ,'4')
                ->get();

      $count = count($photos);
      for ($i=0; $i < $count ; $i++) {
        $slides[] = $i;
      }
		return view('warsztat.index',compact(['photos','slides']));
		}
}
