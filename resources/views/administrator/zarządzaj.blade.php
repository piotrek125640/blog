@extends('layouts.master')
@section('head')
  @include('layouts.css')
  @include('layouts.script')
  @include('layouts.navbar')
@endsection
@section('gallery')
@endsection
@section('body')
<script src="https://cdnjs.cloudflare.com/ajax/libs/mouse0270-bootstrap-notify/3.1.7/bootstrap-notify.min.js"></script>
  <div class="section">
    <h1 class="text-center h-padding">Zarządzaj galerią</h1>
    <hr>
    <h2 class="h-padding">Galeria</h2>
    <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Obraz</th>
        <th scope="col">Tekst alt.</th>
        <th scope="col">Nagłówek</th>
        <th scope="col">Tekst</th>
        <th scope="col">Sekcja</th>
        <th scope="col">Usuń</th>
      </tr>
    </thead>
    <tbody>
      @foreach($photos as $photo)
      <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>
          <!-- Button trigger modal -->
          <button class="btn btn-info btn-sm"data-toggle="modal" data-target="#{{$photo->id}}">
            Pokaż
          </button>
          <!-- Modal -->
          <div class="modal fade" id="{{$photo->id}}" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body mx-auto">
                  <img style="width: 700px; margin: 0 auto;" src="{{$photo->src}}" alt="">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                </div>
              </div>
            </div>
          </div>
        </td>
        <td>{{$photo->alt}}</td>
        <td>{{$photo->h1}}</td>
        <td>{{$photo->p}}</td>
        <td>
          @switch($photo->sekcja)
              @case(1)
                  Strona główna
                  @break
              @case(2)
                  Diagnostyka
                  @break
              @case(3)
                  Transport
                  @break
              @case(4)
                  Warsztat
                  @break
          @endswitch
        </td>
        <td>
          <form action="{{action('Administrator\AdministratorController@delete')}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="photo_id" value="{{$photo->id}}">
            <input class="btn btn-danger btn-sm" type="submit" value="Usuń">
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<div class="section-small">
  <h2 class="h-padding">Dodaj</h2>
  <form action="{{action('Administrator\AdministratorController@create')}}" method="post">
    {{ csrf_field() }}
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="nagłówek">Nagłówek</label>
        <input type="text" class="form-control" name="nagłówek" placeholder="">
      </div>
      <div class="form-group col-md-6">
        <label for="tekst">Tekst</label>
        <input type="text" class="form-control" name="tekst" placeholder="">
      </div>
    </div>
    <div class="form-group">
      <label for="link">Link do grafiki</label>
      <input type="text" class="form-control" name="link" placeholder="">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="sekcja">Sekcja</label>
        <select class="custom-select" name="sekcja">
          <option value="1">Strona główna</option>
          <option value="2">Diagnostyka</option>
          <option value="3">Transport</option>
          <option value="4">Warsztat</option>
        </select>
      </div>
      <div class="form-group col-md-6">
        <label for="alt">Tekst alternatywny</label>
        <input type="text" class="form-control" name="alt" placeholder="">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Wyślij</button>
  </form>
</div>
@foreach ($errors->all() as $error)
    <script type="text/javascript">
    $.notify({
      message: "{{$error}}"
    },{
      type: 'info',
    });
    </script>
@endforeach
@endsection
@section('footer')
  @include('layouts.footer')
@endsection
