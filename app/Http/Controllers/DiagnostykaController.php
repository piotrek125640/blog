<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class DiagnostykaController extends Controller
{
    public function index(){
        $photos = Photo::where('sekcja','=' ,'2')
                  ->get();
        $count = count($photos);
        for ($i=0; $i < $count ; $i++) {
          $slides[] = $i;
        }
        // dd($photos, $slides);
		return view('diagnostyka.index',compact(['photos','slides']));
		}
}
