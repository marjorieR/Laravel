@extends('layout')

@section('title') Home  @endsection

@section('breadscrumb')
    <li><a href="#">Home</a></li>
    <li class="active"><a href="#">Admin</a></li>

@show

@section('css')  


@parent
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
@endsection


@section('subtitle')
    <div class="page-header">
        <h1>
            <i class="fa fa-user-secret"></i>
            Welcome
        </h1>
    </div>
@endsection





