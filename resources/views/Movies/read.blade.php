@extends('layout')



@section ('title')  Biography  @endsection

@section('breadcrumb')
    <li><a href="#"Home></a></li><li>Movies</li><li>biographie</li>
@endsection


@section('css')  
@parent
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
@endsection



@section('content')

    {{ $movie->title }}

    {{ strip_tags($movie->synopsis) }}

@endsection
