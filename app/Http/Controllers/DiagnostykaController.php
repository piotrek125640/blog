<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class DiagnostykaController extends Controller
{
    public function index(){
        $photos = Photo::all();
        // dd($photos);
		return view('diagnostyka.index',compact('photos'));
		}
}
