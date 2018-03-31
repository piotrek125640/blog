@extends('layouts.master')
@section('head')
  @include('layouts.css')
  @include('layouts.script')
  @include('layouts.navbar')
@endsection
@section('gallery')

@endsection
@section('body')
  @foreach($photos as $photo)
  @include('diagnostyka.photo')
  @endforeach
@endsection
@section('footer')
  @include('layouts.footer')
@endsection
