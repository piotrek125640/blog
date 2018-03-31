<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class PhotoController extends Controller
{
    public function index(){
      $photo = Photo::latest()->get();
  return view('diagnostyka.index',compact('photo'));
  }
}
