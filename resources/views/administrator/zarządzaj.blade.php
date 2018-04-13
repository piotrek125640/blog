@extends('layouts.master')
@section('head')
  @include('layouts.css')
  @include('layouts.script')
  @include('layouts.administrator.manage-navbar')
@endsection
@section('gallery')
@endsection
@section('body')
<div id='card-container'>
  <div class="row">
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Warsztat</h5>
      <h6 class="card-subtitle mb-2 text-muted">Edytuj wiadomości na stronie.</h6>
      <a href="#" class="card-link">Edytuj zdjęcia</a>
      <a href="#" class="card-link">Edytuj posty</a>
    </div>
  </div>
      </div>
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Diagnostyka</h5>
    <h6 class="card-subtitle mb-2 text-muted">Edytuj wiadomości na stronie</h6>
    <a href="#" class="card-link">Edytuj zdjęcia</a>
    <a href="#" class="card-link">Edytuj posty</a>
  </div>
</div>
      </div>
          <div class="col-sm">
            <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Warsztat</h5>
          <h6 class="card-subtitle mb-2 text-muted">Edytuj wiadomości na stronie.</h6>
          <a href="#" class="card-link">Edytuj zdjęcia</a>
          <a href="#" class="card-link">Edytuj posty</a>
        </div>
      </div>
          </div>
</div>
@endsection
@section('footer')
  @include('layouts.footer')
@endsection
