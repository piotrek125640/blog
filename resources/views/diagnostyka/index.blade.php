@extends('layouts.master')
@section('head')
  @include('layouts.css')
  @include('layouts.script')
  @include('layouts.navbar')
@endsection
@section('gallery')
  @foreach($photos as $photo)
  @include('diagnostyka.photo')
  @endforeach
@endsection
@section('body')
@endsection
@section('footer')
  @include('layouts.footer')
@endsection
