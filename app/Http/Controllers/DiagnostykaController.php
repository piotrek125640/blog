<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiagnostykaController extends Controller
{
    public function index(){
		return view('diagnostyka.index');
		}
