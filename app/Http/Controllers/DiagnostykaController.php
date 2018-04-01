<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class DiagnostykaController extends Controller
{
    public function index(){
        $photos = Photo::where('sekcja','=' ,'2')
                  ->get();
        for ($i=0; $i<count($photos); $i++) {
          $slides[] = $i+1;
        }
        // dd($photos);
		return view('diagnostyka.index',compact(['photos','slides']));
		}
}
