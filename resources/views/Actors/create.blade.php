@extends('layout')

@section('title')  Creation acteurs  @endsection

@section('breadscrumb')
    <li><a href="#">Home</a></li>
    <li class="active"><a href="#">Acteurs</a></li>
    <li class="active"><a href="#"><strong>Créer</strong></a></li>
@show

@section('css')  


@parent
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
@endsection


@section('subtitle')
    <div class="page-header">
        <h1>
            <i class="fa fa-plus page-header-icon"></i>
            Créer un Acteur
        </h1>
    </div>
@endsection
