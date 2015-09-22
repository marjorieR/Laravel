@extends('layout')

@section('title') Pro  @endsection

@section('breadscrumb')
    <li><a href="#">Home</a></li>
    <li class="active"><a href="#">Pro</a></li>

@show

{{--@section('css')  --}}

{{--@parent--}}
{{--<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">--}}
{{--@endsection--}}



@section ('js')
    @parent

    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="{{ asset('js/gmap.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

@endsection


@section('subtitle')
    <div class="page-header">
        <h1>
            Session Pro
        </h1>
    </div>
@endsection


@section('content')




    <div class="row">

        <div class="pull-right">

            <div class="btn-group btn-group-sm" role="group" aria-label="...">

                <a href="" class=" active btn btn-info btn-sm">Simple</a>

                <a href="" class="btn btn-info btn-sm">Avancé</a>

                <a href="" class="active btn btn-info btn-sm">professionnel</a>

            </div>
        </div>

        <hr class="row" />

    </div>

    <br />
    <br />