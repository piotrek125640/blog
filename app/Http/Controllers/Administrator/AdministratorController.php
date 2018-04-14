<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Administrator;
use Illuminate\Http\Request;
use App\Photo;
use Auth;
use Redirect;

class AdministratorController extends Controller
{
    public function index()
    {
      $result = Photo::where('sekcja','=' ,'1')
                ->get();
      $count = count($result);
      for ($i=1; $i < $count ; $i++) {
        $slides[] = $i;
      }

      foreach($result as $object)
      {
          $photos[] = $object->toArray();
      }
        return view('administrator.index',compact(['photos', 'slides']));
    }

    public function create(Request $request)
    {
      $request->validate([  //validation
        'nagłówek' => 'required',
        'tekst' => 'required',
        'alt' => 'required',
        'link' => 'required',
        'sekcja' => 'required'

      ]);

      $photo = new Photo;
      $photo->h1 = $request->input('nagłówek');
      $photo->p = $request->input('tekst');
      $photo->alt = $request->input('alt');
      $photo->src = $request->input('link');
      $photo->sekcja = $request->input('sekcja');
      $photo->save();

      return Redirect::back();
    }

    public function delete(Request $request){
      Photo::where('id', '=', $request->input('photo_id'))
      ->delete();


      return Redirect::back()->withErrors('Usunięto pomyślnie');
    }

    public function manage()
    {
      $photos = Photo::orderBy('sekcja', 'asc')
      ->get();

      return view('administrator.zarządzaj', compact('photos'));
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
