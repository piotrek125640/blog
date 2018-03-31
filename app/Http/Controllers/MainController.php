<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class MainController extends Controller
{
  public function index(){
      $photos = Photo::where('sekcja','=' ,'1')
                ->get();

      $count = count($photos);
      for ($i=1; $i < $count ; $i++) {
        $slides[] = $i;
      }
      // dd($photos);
  return view('index',compact(['photos', 'slides']));
  }
}
