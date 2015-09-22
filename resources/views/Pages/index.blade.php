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



@section ('js')
    @parent
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/highcharts-3d.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>

    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/highcharts-3d.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>


@endsection



@section('subtitle')
    <div class="page-header">
        <h1>
            <i class="fa fa-user-secret"></i>
            Welcome
        </h1>
    </div>
@endsection


@section('content')




    <div class="row">

        <div class="pull-right">

            <div class="btn-group btn-group-sm" role="group" aria-label="...">

                <a href="" class=" active btn btn-info btn-sm">Simple</a>

                <a href="{{ route('pages.advenced')}}" class="btn btn-info btn-sm">Avancé</a>

                <a href="{{ route('pages.pro')}}" class="btn btn-info btn-sm">professionnel</a>

            </div>
        </div>

        <hr class="row" />

    </div>

    <br />
    <br />



    {{--SESSION MOYENNE AGE ACTEURS  +  ACTEURS DE LYON  +  ACTEURS DE PARIS   +  ACTEURS DE MARSEILLE--}}

    <div class="row">

        <div class="col-md-6">

            <div class="stat-panel">

                <a href="" class="stat-cell col-xs-5 bg-info bordered no-border-vr no-border-l no-padding valign-middle text-center text-md">
                    Moyenne d'age des acteurs </br><strong>{{ $ageactor->moyenne }}</strong> Ans</a>

                <div class="stat-cell col-xs-7 no-padding valign-middle">

                    <div class="stat-rows">

                        <div class="stat-row">

                            <a href="#" class="stat-cell bg-info padding-sm valign-middle">{{ $actorlyon }} à Lyon</a>
                        </div>

                        <div class="stat-row">

                            <a href="#" class="stat-cell bg-info darken padding-sm valign-middle"> {{ $actorparis }} à Paris</a>

                        </div>

                        <div class="stat-row">

                            <a href="#" class="stat-cell bg-info darker padding-sm valign-middle">{{ $actormars}} à Marseille</a>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        {{--SESSION NOMBRE DE COMMENTAIRES  +  FILMS ACTIFS  +  EN COURS DE VALIDATION  +  fILMS INACTIS--}}

        <div class="col-md-6">

            <div class="stat-panel">

                <a href="#" class="stat-cell col-xs-5 bg-success bordered no-border-vr no-border-l no-padding valign-middle text-center text-md">
                   Nombres de commentaires</br><strong>{{ $nbcom}}</strong></a>

                <div class="stat-cell col-xs-7 no-padding valign-middle">

                    <div class="stat-rows">

                        <div class="stat-row">

                            <a href="#" class="stat-cell bg-success padding-sm valign-middle">{{ $comactif }} Actifs</a>
                        </div>

                        <div class="stat-row">

                            <a href="#" class="stat-cell bg-success darken padding-sm valign-middle">{{  $comvalid }} En cours de validation</a>

                        </div>

                        <div class="stat-row">

                            <a href="#" class="stat-cell bg-success darker padding-sm valign-middle">{{ $cominactif }} Inactifs</a>
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>




    <div class="col-md-4">
        <div class="stat-panel text-center">
            <div class="stat-row">
                <!-- Dark gray background, small padding, extra small text, semibold text -->
                <div class="stat-cell bg-dark-gray padding-sm text-xs text-semibold">
                    <i class="fa fa-comments"></i>&nbsp;&nbsp;Taux de commentaires actifs
                </div>
            </div> <!-- /.stat-row -->
            <div class="stat-row">
                <!-- Bordered, without top border, without horizontal padding -->
                <div class="stat-cell bordered no-border-t no-padding-hr">
                    <div class="pie-chart" data-percent="54.545454545455" id="easy-pie-chart-1">
                        <div class="pie-chart-label"></div>
                    </div>
                </div> <!-- /.stat-row -->
            </div> <!-- /.stat-panel -->
        </div>
    </div>

    <div class="col-md-4">
        <div class="stat-panel text-center">
            <div class="stat-row">
                <!-- Dark gray background, small padding, extra small text, semibold text -->
                <div class="stat-cell bg-dark-gray padding-sm text-xs text-semibold">
                    <i class="fa fa-star"></i>&nbsp;&nbsp;Taux de films en favoris
                </div>
            </div> <!-- /.stat-row -->
            <div class="stat-row">
                <!-- Bordered, without top border, without horizontal padding -->
                <div class="stat-cell bordered no-border-t no-padding-hr">
                    <div class="pie-chart" data-percent="37.5" id="easy-pie-chart-2">
                        <div class="pie-chart-label"></div>
                    </div>
                </div> <!-- /.stat-row -->
            </div> <!-- /.stat-panel -->
        </div>
    </div>

    <div class="col-md-4">
        <div class="stat-panel text-center">
            <div class="stat-row">
                <!-- Dark gray background, small padding, extra small text, semibold text -->
                <div class="stat-cell bg-dark-gray padding-sm text-xs text-semibold">
                    <i class="fa fa-video-camera"></i>&nbsp;&nbsp;Taux de films diffusés
                </div>
            </div> <!-- /.stat-row -->
            <div class="stat-row">
                <!-- Bordered, without top border, without horizontal padding -->
                <div class="stat-cell bordered no-border-t no-padding-hr">
                    <div class="pie-chart" data-percent="56.25" id="easy-pie-chart-3">
                        <div class="pie-chart-label"></div>
                    </div>
                </div> <!-- /.stat-row -->
            </div> <!-- /.stat-panel -->
        </div>
     </div>



    {{--FORMULAIRE DE CREATION DE FILMS--}}{{--FORMULAIRE DE CREATION DE FILMS--}}{{--FORMULAIRE DE CREATION DE FILMS--}}



    <div class="row">

        <div class="col-md-6">

            <div class="panel panel-info form-horizontal">

                <div class="panel-heading">Création de film</div>

                <div class="panel-body">

                    <form id="addMovie" action="" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">

                            <label for="inputEmail2" class="form-control-label">Titre</label>
                            <input name="title" class="form-control" type="text" placeholder="Nom de mon film" />
                        </div>


                        <div class="form-group">

                            <label for="inputEmail2" class=" form-control-label">Categories</label>

                            <select name="categories_id" class="form-control">

                                @foreach(DB::select('SELECT id,title FROM categories') as $categorie)
                                    <option value="{{ $categorie->id }}"> {{ $categorie->title }} </option>
                                @endforeach
                            </select>

                        </div>

                        <div class="form-group">

                            <label for="inputEmail2" class="form-control-label">Synopsis</label>

                            <textarea class="form-control" name="synopsis"  placeholder="Synopsis de mon film"></textarea>

                        </div>

                        <div class="col-md-12">
                            <button type='submit' class="btn btn-info center-block btn-rounded">Créer un Films</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>



        {{--TABLE SEANCES--}}{{--TABLE SEANCES--}}{{--TABLE SEANCES--}}{{--TABLE SEANCES--}}

        <div class="col-md-6">

            <div id="sessions" class="panel panel-success widget-support-tickets"  data-url="{{ route('sessions.ajaxsessions') }}">


                <div class="panel-heading">

                    <span class="panel-title"><i class="panel-title-icon fa fa-bullhorn"></i>Prochaines séances</span>

                    <div class="panel-heading-controls">

                        <div class="panel-heading-text"><a href="">séance a venir</a></div>

                    </div>

                </div>

                <div id="dashboardajax" class="panel-body tab-content-padding">

                   <div class="panel-padding no-padding-vr" style="overflow: hidden; width: auto; height: 300px;">

                            @foreach($sessions as $session)


                        <div class="ticket" >

                            {{--{{dump($session->date_session)}}--}}

                            <?php $date = new DateTime('+2 day'); ?>
                            {{--{{ dump($date->format('Y-m-d H:i:s')) }}--}}
                            <?php $date2 = new DateTime('+6 day'); ?>
                            <?php $date3 = new DateTime('+15 day'); ?>


                                @if($session->date_session < $date->format('Y-m-d H:i:s') )
                                    <span class="label label-success ticket-label">Moins de deux jours</span>

                                @elseif($session->date_session < $date2->format('Y-m-d H:i:s') )

                                    <span class="label label-info ticket-label">Moins de 6 jours</span>


                                @elseif($session->date_session < $date3->format('Y-m-d H:i:s') )

                                    <span class="label label-warning ticket-label">Moins de 15 jours</span>

                                @else
                                    <span class="label label-danger ticket-label">Plus de 15 jours</span>

                                @endif

                            <a href="#" title="" class="ticket-title">{{ $session->movies->title }}<span># {{ $session->movies->id  }}</span></a>

                                <span class="ticket-info">Cinemas <a href="#" title="">{{ $session->cinema->title }}</a> {{ $session->date_session }}</span>



                         </div>

                            @endforeach

                </div>

            </div>

        </div>

    </div>

      {{-- GRAPH RÉPARTITION DES FILMS PAR CATEGORIES --}}      {{-- GRAPH RÉPARTITION DES FILMS PAR CATEGORIES --}}

<div class="row">

   <div class="col-md-6">

       <div id="container" data-tabe="{{ url('admin/api/allcat-movies') }}" style="height: 400px"></div>

   </div>


    {{--  --}}      {{--  --}}

    <div class="col-md-6">

    </div>

</div>

{{-- GRAPH RÉPARTITION NB SEANCES/MOIS --}}{{-- GRAPH RÉPARTITION NB SEANCES/MOIS --}}{{-- GRAPH RÉPARTITION NB SEANCES/MOIS --}}

<div class="row">

    <div class="col-md-12">

        <div id="containe" style="height: 400px; "></div>

    </div>

</div>



@endsection






