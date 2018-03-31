<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class PhotoController extends Controller
{
    public function index(){
      $photos = Photo::all();
      // dd($photos);
  return view('diagnostyka.photo',compact('photos'));
  }
}
