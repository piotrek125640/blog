@extends('layouts.master')
@section('head')
  @include('layouts.css')
  @include('layouts.script')
  @include('layouts.navbar')
@endsection
@section('gallery')
  @include('layouts.new-carousel')
@endsection
@section('body')
  @include('layouts.body-index')
  <script src="<?php echo asset('js/main.js')?>"></script>
@endsection
@section('footer')
  @include('layouts.footer')
@endsection
