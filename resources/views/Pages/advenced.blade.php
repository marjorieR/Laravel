@extends('layout')

@section('title') Avancé  @endsection

@section('breadscrumb')
    <li><a href="#">Home</a></li>
    <li class="active"><a href="#">Avancé</a></li>

@show

{{--@section('css')  --}}

{{--@parent--}}
{{--<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">--}}
{{--@endsection--}}



@section ('js')
    @parent

    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="{{ asset('js/gmap.js') }}"></script>

@endsection


@section('subtitle')
    <div class="page-header">
        <h1>
            Session Avancée
        </h1>
    </div>
@endsection


@section('content')

<div class="row">

    <div class="pull-right">

        <div class="btn-group btn-group-sm" role="group" aria-label="...">

            <a href="{{ route('pages.index')}}" class="btn btn-info btn-sm">Simple</a>

            <a href="" class=" active btn btn-info btn-sm">Avancée</a>

            <a href="" class="btn btn-info btn-sm">professionnel</a>

        </div>
    </div>

    <hr class="row" />

</div>

<br />
<br />


<div class="row">

<div id="map" style=" width : 100%; height: 350px;"></div>


    @foreach($markers as $marker)

    <marker display="none"  data-sessions="{{ $marker->sessions->count() }}"  data-id="{{ $marker->id }}" data-title="{{ $marker->title }}" data-images="{{ $marker->images }}"data-ville="{{ $marker->ville }}" data-created="{{ $marker->date_created }}"></marker>

    @endforeach

</div>

</br>
</br>
</br>

<div class="row">

    <div class="panel widget-threads">

        <div class="panel-heading">

            <span class="panel-title"><i class="panel-title-icon fa fa-comments-o"></i>Recommandations cinémas</span>

        </div>

        <div class="panel-body">

            <div class="thread">

                <img src="http://www.alpes4science.org/userfiles/logo%20pathe%201_jpg.jpg" alt="" class="thread-avatar">

                <div class="thread-body">

                    <span class="thread-time">14h</span>
                    <a href="#" class="thread-title">Un film très émouvant</a>
                    <p>Un film superbe avec quelques longeurs mais vraiment sympa. Je recommande :)</p>
                    <div class="thread-info">Commenté par <a href="#" title="">Pathé</a> sur <a href="#" title="">La Ligne Verte</a></div>
                </div>
            </div>

        </div>

    </div>

</div>




@endsection



