<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class PhotoController extends Controller
{
<<<<<<< HEAD

=======
    public function index(){
      $photo = Photo::latest()->get();
  return view('diagnostyka.index',compact('photo'));
  }
>>>>>>> 250b4e85174b1510c7301d924df656e14c170c5a
}
