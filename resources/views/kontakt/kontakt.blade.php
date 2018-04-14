@extends('layouts.master')
@section('head')
  @include('layouts.css')
  @include('layouts.script')
  @include('layouts.navbar')
@endsection
@section('gallery')

@endsection
@section('body')
  <div class="section">
	<div class="row">
	  <div class="col-md-6">
        <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2423.0260172240028!2d21.429227315532206!3d52.605300579830434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ee59d4526b8b7%3A0x1079a9ff9a7ba233!2sOkr%C4%99gowa+Stacja+Kontroli+Pojazd%C3%B3w!5e0!3m2!1spl!2spl!4v1522515406667"  width="100%" height="315" frameborder="10" allowfullscreen></iframe>
      </div>
      <div class="col-md-6">
          <h4><strong>Napisz do nas</strong></h4>
          <form action="{{url('/admin/zarządzaj')}}" method="post">
            {{ csrf_field() }}
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" placeholder="">
              </div>
              <div class="form-group col-md-6">
                <label for="phone">Numer telefonu</label>
                <input type="text" class="form-control" name="phone" placeholder="">
              </div>
            </div>
            <div class="form-group">
              <label for="subject">Temat</label>
              <input type="text" class="form-control" name="subject" placeholder="">
            </div>
            <div class="form-group">
              <label for="message">Wiadomość</label>
              <textarea type="text" class="form-control" name="message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Wyślij wiadomość</button>
          </form>
      </div>
    </div>
  </div>
  <hr style="margin-bottom: 50px;">
@endsection
@section('footer')
  @include('layouts.footer')
@endsection
