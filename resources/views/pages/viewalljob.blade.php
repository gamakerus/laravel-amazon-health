@extends('layout.layout')
    @section('menu')
        @include('content.sidemenu')
    @endsection
    @section('main')
        @include('content.topmenu')
        @include('content.viewalljob')
    @endsection
    @section('footer')
        @include('content.footer')
    @endsection