@extends('layouts.master')
@section('head')
  @include('layouts.css')
  @include('layouts.script')
  @include('layouts.navbar')
@endsection
@section('gallery')

@endsection
@section('body')
  <section id="contact">
  <div class="container card">

	<div class="row">
	  <div class="col-md-7" style="margin-top:2rem;">
        <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2423.0260172240028!2d21.429227315532206!3d52.605300579830434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ee59d4526b8b7%3A0x1079a9ff9a7ba233!2sOkr%C4%99gowa+Stacja+Kontroli+Pojazd%C3%B3w!5e0!3m2!1spl!2spl!4v1522515406667"  width="100%" height="315" frameborder="10" style="border:1" allowfullscreen></iframe>
      </div>

      <div class="col-md-5">
          <h4><strong>Napisz do nas</strong></h4>
        <form>
          <div class="form-group">
            <input type="text" class="form-control" name="" value="" placeholder="Imię">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="" value="" placeholder="E-mail">
          </div>
          <div class="form-group">
            <input type="tel" class="form-control" name="" value="" placeholder="Telefon">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="" rows="3" placeholder="Wiadomość"></textarea>
          </div>
          <button class="btn btn-default" type="submit" name="button">
              <i class="fa fa-paper-plane" aria-hidden="true"></i> Submit
          </button>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
@section('footer')
  @include('layouts.footer')
@endsection
