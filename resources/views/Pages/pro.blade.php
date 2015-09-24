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
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>

    <script src="{{ asset('js/realtime.js') }}"></script>

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

                <a href="" class="btn btn-info btn-sm">Simple</a>

                <a href="{{ route('pages.advenced')}}" class="btn btn-info btn-sm">Avancé</a>

                <a href="" class="active btn btn-info btn-sm">professionnel</a>

            </div>
        </div>

        <hr class="row" />

    </div>

    <br />
    <br />


<div class="row">

    <div class="col-md-6">

        <div id="contain" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>

    </div>

</div>


@endsection
