@extends('layout.layout')
    @section('menu')
        @include('content.sidemenu')
    @endsection
    @section('main')
        @include('content.topmenu')
        @include('content.message')
    @endsection
    @section('footer')
        @include('content.footer')
    @endsection