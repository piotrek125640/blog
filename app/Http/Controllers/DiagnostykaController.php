<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class DiagnostykaController extends Controller
{
    public function index(){
        $result = Photo::where('sekcja','=' ,'2')
                  ->get();
        for ($i=1; $i<count($result); $i++) {
          $slides[] = $i;
        }
        foreach($result as $object)
        {
            $photos[] = $object->toArray();
        }
        // dd($photos);
		return view('diagnostyka.index',compact(['photos','slides']));
		}
}
