@extends('layout')



@section ('title')  Biography  @endsection

@section('breadcrumb')
    <li><a href="#"Home></a></li><li>Directors</li><li>biographie</li>
@endsection


@section('css')  
@parent
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
@endsection



@section('content')

    {{ $director->firstname }}
    {{ $director->lastname }}
    {{ strip_tags($director->biography) }}

@endsection

