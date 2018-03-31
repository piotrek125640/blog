<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransportController extends Controller
{
    public function index(){
      $photo = Photo::find($photo);
  		return view('diagnostyka.index',compact('photo'));
    }
}
