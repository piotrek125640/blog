<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontaktController extends Controller
{
    public function about()
    {
      return view('kontakt.o_nas');
    }

    public function messages(){
      return view('kontakt.kontakt');
    }

    public function info(){
      return view('kontakt.informacje');
    }
}
