<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransportController extends Controller
{
    public function index(){
      $photos = DB::table('gallery')->get();

      return('diagnostyka.index'compact('photos'));
}
