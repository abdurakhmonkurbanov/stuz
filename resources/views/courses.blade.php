@extends('main')
@section('head')
    @include('parts.heads')
@endsection

@section('js')
    @include('parts.js')
@endsection

@section('menu')
    @include('parts.menus')
@endsection

@section('content')
    @include('includes.courses')
@endsection


@section('footer')
    @include('parts.footer')
@endsection
