<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class MainController extends Controller
{
  public function index(){
      $photos = Photo::where('sekcja','=' ,'1')
                ->get();
      for ($i=0; $i<count($photos); $i++) {
        $slides[] = $i+1;
      }
      // dd($photos,$slides);
  return view('index',compact(['photos', 'slides']));
  }
}
