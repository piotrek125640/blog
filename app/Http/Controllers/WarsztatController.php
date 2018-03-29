<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WarsztatController extends Controller
{
    public function index(){
		return view('warsztat.index');
		}
