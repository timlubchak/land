{{--подключаем части шаблона к глановму шаблону сайта --}}
@extends('layouts.site')

@section('header')
   @include('site.header')
@endsection


@section('content')
    @include('site.content')
@endsection