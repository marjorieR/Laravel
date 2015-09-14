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


@section('content')

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


    <script>
        init.push(function () {
            // Easy Pie Charts
            var easyPieChartDefaults = {
                animate: 2000,
                scaleColor: false,
                lineWidth: 6,
                lineCap: 'square',
                size: 90,
                trackColor: '#e5e5e5'
            }
            $('#easy-pie-chart-1').easyPieChart($.extend({}, easyPieChartDefaults, {
                barColor: PixelAdmin.settings.consts.COLORS[1]
            }));
            $('#easy-pie-chart-2').easyPieChart($.extend({}, easyPieChartDefaults, {
                barColor: PixelAdmin.settings.consts.COLORS[1]
            }));
            $('#easy-pie-chart-3').easyPieChart($.extend({}, easyPieChartDefaults, {
                barColor: PixelAdmin.settings.consts.COLORS[1]
            }));
        });
    </script>


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




        <div class="col-md-6">

        <div class="panel panel-success widget-support-tickets" id="dashboard-support-tickets">

            <div class="panel-heading">

                <span class="panel-title"><i class="panel-title-icon fa fa-bullhorn"></i>Prochaines séances</span>

                <div class="panel-heading-controls">

                    <div class="panel-heading-text"><a href="#">séance a venir</a></div>
                </div>
            </div>
            <!-- / .panel-heading -->
            <div class="panel-body tab-content-padding">
                <!-- Panel padding, without vertical padding -->
                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 300px;"><div class="panel-padding no-padding-vr" style="overflow: hidden; width: auto; height: 300px;">

                        <div class="ticket">

                            <span class="label label-success ticket-label">sorties</span>

                            <a href="#" title="" class="ticket-title">fims<span>[#201798]</span></a>
								<span class="ticket-info">
									diffisé <a href="#" title="">distributeurs</a> today
								</span>
                        </div> <!-- / .ticket -->

                        <div class="ticket">
                            <span class="label label-warning ticket-label">Pending</span>
                            <a href="#" title="" class="ticket-title">Mobile App Problem<span>[#201797]</span></a>
								<span class="ticket-info">
									Opened by <a href="#">Denise Steiner</a> 2 days ago
								</span>
                        </div> <!-- / .ticket -->

                        <div class="ticket">
                            <span class="label label-info ticket-label">In progress</span>
                            <a href="#" title="" class="ticket-title">
                                <i class="fa fa-warning text-danger"></i>PayPal issue<span>[#201796]</span>
                            </a>
								<span class="ticket-info">
									Opened by <a href="#">Robert Jang</a> 3 days ago
								</span>
                        </div> <!-- / .ticket -->

                        <div class="ticket">
                            <span class="label label-danger ticket-label">Rejected</span>
                            <a href="#" title="" class="ticket-title">IE8 problem<span>[#201795]</span></a>
								<span class="ticket-info">
									Opened by <a href="#">Robert Jang</a> 4 days ago
								</span>
                        </div> <!-- / .ticket -->

                        <div class="ticket">
                            <span class="label label-success ticket-label">Completed</span>
                            <a href="#" title="" class="ticket-title">Server unavaible<span>[#201794]</span></a>
								<span class="ticket-info">
									Opened by <a href="#">Timothy Owens</a> 5 days ago
								</span>
                        </div> <!-- / .ticket -->

                        <div class="ticket">
                            <span class="label label-success ticket-label">Completed</span>
                            <a href="#" title="" class="ticket-title">Server unavaible<span>[#201798]</span></a>
								<span class="ticket-info">
									Opened by <a href="#" title="">Timothy Owens</a> today
								</span>
                        </div> <!-- / .ticket -->

                        <div class="ticket">
                            <span class="label label-warning ticket-label">Pending</span>
                            <a href="#" title="" class="ticket-title">Mobile App Problem<span>[#201797]</span></a>
								<span class="ticket-info">
									Opened by <a href="#">Denise Steiner</a> 2 days ago
								</span>
                        </div> <!-- / .ticket -->

                        <div class="ticket">
                            <span class="label label-info ticket-label">In progress</span>
                            <a href="#" title="" class="ticket-title">
                                <i class="fa fa-warning text-danger"></i>PayPal issue<span>[#201796]</span>
                            </a>
								<span class="ticket-info">
									Opened by <a href="#">Robert Jang</a> 3 days ago
								</span>
                        </div> <!-- / .ticket -->

                        <div class="ticket">
                            <span class="label label-danger ticket-label">Rejected</span>
                            <a href="#" title="" class="ticket-title">IE8 problem<span>[#201795]</span></a>
								<span class="ticket-info">
									Opened by <a href="#">Robert Jang</a> 4 days ago
								</span>
                        </div> <!-- / .ticket -->

                        <div class="ticket">
                            <span class="label label-success ticket-label">Completed</span>
                            <a href="#" title="" class="ticket-title">Server unavaible<span>[#201794]</span></a>
								<span class="ticket-info">
									Opened by <a href="#">Timothy Owens</a> 5 days ago
								</span>
                        </div> <!-- / .ticket -->

                        <div class="ticket">
                            <span class="label label-success ticket-label">Completed</span>
                            <a href="#" title="" class="ticket-title">Server unavaible<span>[#201798]</span></a>
								<span class="ticket-info">
									Opened by <a href="#" title="">Timothy Owens</a> today
								</span>
                        </div> <!-- / .ticket -->

                        <div class="ticket">
                            <span class="label label-warning ticket-label">Pending</span>
                            <a href="#" title="" class="ticket-title">Mobile App Problem<span>[#201797]</span></a>
								<span class="ticket-info">
									Opened by <a href="#">Denise Steiner</a> 2 days ago
								</span>
                        </div> <!-- / .ticket -->

                        <div class="ticket">
                            <span class="label label-info ticket-label">In progress</span>
                            <a href="#" title="" class="ticket-title">
                                <i class="fa fa-warning text-danger"></i>PayPal issue<span>[#201796]</span>
                            </a>
								<span class="ticket-info">
									Opened by <a href="#">Robert Jang</a> 3 days ago
								</span>
                        </div> <!-- / .ticket -->

                        <div class="ticket">
                            <span class="label label-danger ticket-label">Rejected</span>
                            <a href="#" title="" class="ticket-title">IE8 problem<span>[#201795]</span></a>
								<span class="ticket-info">
									Opened by <a href="#">Robert Jang</a> 4 days ago
								</span>
                        </div> <!-- / .ticket -->

                        <div class="ticket">
                            <span class="label label-success ticket-label">Completed</span>
                            <a href="#" title="" class="ticket-title">Server unavaible<span>[#201794]</span></a>
								<span class="ticket-info">
									Opened by <a href="#">Timothy Owens</a> 5 days ago
								</span>
                        </div> <!-- / .ticket -->
                    </div><div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 93.5550935550936px; background: rgb(136, 136, 136);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div></div>
            </div> <!-- / .panel-body -->
        </div> <!-- / .panel -->
    </div>
</div>


    <div class="col-md-12" id="panelajax" data-url="">


        <div class="panel panel-warning" id="dashboard-recent">

            <div class="panel-heading">

                <span class="panel-title"><i class="panel-title-icon fa fa-comments text-danger"></i>Commentaires récents</span>

                    <ul class="nav nav-tabs nav-tabs-xs">

                        <li class="active">
                            <a href="#dashboard-recent-comments" data-toggle="tab">Comments</a>
                        </li>
                    </ul>

            </div>

                <div class="tab-content">


                    <div class="widget-comments panel-body tab-pane no-padding fade active in" id="dashboard-recent-comments">

                        <div class="panel-padding no-padding-vr" style="overflow: hidden; width: auto; height: 300px;">

                            @foreach($comments as $comment)

                                <div class="comment">

                                    <div class="comment-body">

                                        <div class="comment-by">

                                            <a href="#" title="">{{ $comment->user->username  }}</a>commented on<a href="#" title=""></a>

                                        </div>

                                        <div class="comment-text">{{ $comment->content  }}</div>

                                    </div>
                                </div>

                            @endforeach





                        </div>


                    </div>

                </div>
            </div>
        </div>




@endsection






