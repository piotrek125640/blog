<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Administrator;
use Illuminate\Http\Request;
use App\Photo;
use Auth;

class AdministratorController extends Controller
{
    public function index()
    {
      $photos = Photo::where('sekcja','=' ,'1')
                ->get();
      $count = count($photos);
      for ($i=0; $i < $count ; $i++) {
        $slides[] = $i;
      }
        return view('administrator.index',compact(['photos', 'slides']));
    }

    public function manage()
    {
      return view('administrator.zarządzaj');
    }

    public function reviews()
    {
      return view('administrator.opinie');
    }

    public function photos()
    {
      return view('administrator.zdjęcia');
    }


}
