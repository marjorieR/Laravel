@extends('layout')



@section ('title') Biography  @endsection

@section('breadcrumb')
    <li><a href="#"Home></a></li><li>Actors</li><li>biographie</li>
@endsection


@section('css')  
@parent
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
@endsection


@section('content')

    {{ $actor->firstname }}
    {{ $actor->lastname }}
    {{ strip_tags($actor->biography) }}

@endsection
