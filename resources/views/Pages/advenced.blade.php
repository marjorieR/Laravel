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
    <script src="{{ asset('js/app.js') }}"></script>

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



{{--TABLE RECOMMANDATIONS--}}{{--TABLE  RECOMMANDATIONS--}}{{--TABLE  RECOMMANDATIONS--}}{{--TABLE  RECOMMANDATIONS--}}



<div class="row">

    <div class="panel widget-threads">

        <div class="panel-heading">

            <span class="panel-title"><i class="panel-title-icon fa fa-comments-o"></i>Recommandations cinémas</span>

        </div>

        <div class="panel-body">

            <div class="thread">

                @foreach($recommandations as $recommandation)

                <div class="thread-body">
                    <img src="{{ $recommandation->cinema->images }}" alt="" class="thread-avatar">

                    <span class="thread-time">{{ date(' d F , Y', strtotime($recommandation->date_created)) }} à {{ date(' h.m.s', strtotime($recommandation->date_created)) }} </span>


                    <a href="#" class="thread-title">{{ $recommandation->title }}</a>
                    <p>{{ $recommandation->accroche }}</p>
                    <div class="thread-info">Commenté par <a href="#" title="">{{ $recommandation->cinema->title}}</a> sur <a href="#" title="">{{ $recommandation->movies->title}}</a></div>
                </div>
                    <hr />

                @endforeach

            </div>

        </div>

    </div>

</div>


{{--TABLE USERCONNEXION--}}   {{--TABLE  USERCONNEXION--}}   {{--TABLE USERCONNEXION--}}   {{--TABLE  USERCONNEXION--}}

<div class="row">

    <div class="col-md-6">

        <div class="panel panel-dark panel-light-green">

            <div class="panel-heading">

                <span class="panel-title"><i class="panel-title-icon fa fa-smile-o"></i><strong>5</strong> nouveaux utilisateurs (2 dernières semaines)</span>

            </div>

            <table class="table">

                <thead>

                <tr>
                    <th>#</th>

                    <th>Avatar/Username</th>

                    <th>Nom / Prénom</th>

                    <th>E-mail</th>

                </tr>

                </thead>

                <tbody class="valign-middle">

                @foreach($users as $user)

                <tr>
                    <td>{{ $user->id }}</td>

                    <td>
                        <img src="{{ $user->avatar }}" alt="" style="width:26px;height:26px;" class="rounded">&nbsp;&nbsp;<a href="#" title=""> {{ $user->username }}</a>
                    </td>

                    <td>{{ $user->lastname }}&nbsp;&nbsp;{{ $user->firstname }}</td>

                    <td>{{ $user->email }}</td>

                </tr>

                 @endforeach

                </tbody>

            </table>

        </div>

    </div>



    {{--TABLE TASK--}} {{--TABLE TASK--}} {{--TABLE TASK--}} {{--TABLE TASK--}} {{--TABLE TASK--}} {{--TABLE TASK--}}

    <div class="col-md-6">


        <div id="tasks" class="panel widget-tasks panel-dark-gray" data-url="{{ route('tasks.ajaxtasks') }}">

            <div class="panel-heading">

                <span class="panel-title"><i class="panel-title-icon fa fa-tasks"></i>Taches Récentes</span>

                <div class="panel-heading-controls">

                    <button class="btn btn-xs btn-primary btn-outline dark" id="clear-completed-tasks"><i class="fa fa-eraser text-success"></i> Clear completed tasks</button>

                </div>

            </div>

            <div  class="panel-body no-padding-vr ui-sortable">

                <div id="dashajax" class="panel-body no-padding-vr ui-sortable">

                    @foreach($tasks as $task)

                    <div class="task  @if($task->enabled == 1) completed @endif">

                        <?php $date = new DateTime('-2 day'); ?>
                        <?php $date2 = new DateTime('-7 day'); ?>
                        <?php $date3 = new DateTime('+7 day'); ?>


                            @if($task->date_tasks > $date->format('Y-m-d H:i:s') )

                                <span class="label label-success ticket-label">Hight</span>

                            @elseif($task->date_tasks > $date2->format('Y-m-d H:i:s') )

                                <span class="label label-info ticket-label">Medium</span>

                            @else
                                <span class="label label-danger ticket-label">Low</span>


                            @endif

                        <div class="fa fa-arrows-v task-sort-icon"></div>


                        <div class="action-checkbox" id="actionbox">

                            <label class="px-single"><input data url="{{ route('pages.deletetasks',['id'=>$task->id]) }}" type="checkbox" name="" value="" class="px"><span class="lbl"></span></label>

                        </div>

                        <a href="#" class="task-title"> {{ $task->content }} {{ $task->movies->title }}<span>{{ date(' d / m / Y', strtotime($task->date_tasks)) }}</span></a>



                    </div>



                @endforeach

                </div>

                    <hr/>



                        <form id="addTasks" method="post"  action="{{ route('pages.createtask') }}" class="row">

                        {{ csrf_field() }}

                        <div class="col-md-6">
                            <input name='content' id="content" type="text" placeholder="New task" class="form-control input-md widget-profile-input">
                        </div>


                        <div class="col-md-6">
                            <input type="text" class="form-control date input-md widget-profile-input" name="date" id="date_tasks" placeholder="date">
                        </div>

                        <div class="col-md-6"><br></div>

                        <div class="col-md-12">
                            <select class="form-control input-md widget-profile-input " name="movie">

                                @foreach($movies as $movie)
                                    <option id="{{$movie->id}}" value="{{$movie->id}}">{{$movie->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12"> <br></div>
                        <button type="submit" class="btn btn-dark-gray btn-xs col-md-offset-1 col-md-10">Créer</button>

                    </form>

            </div>

        </div>

    </div>


</div>


</div>


{{--Répartition des acteurs par ville--}} {{--Répartition des acteurs par ville--}} {{--Répartition des acteurs par ville--}}

<div class="row">

    <div class="col-md-6">

        <div class="panel">

            <div class="panel-heading">

                <span class="panel-title">Répartition des acteurs par ville</span>

            </div>

            <div class="panel-body">

                <div class="graph-container">

                    <div id="hero-bar" class="graph" style="position: relative;"></div>

                </div>

                    <div style="display:none">

                        <ville data-name="" data-nb=""></ville>


                    </div>

            </div>

        </div>

    </div>

    <div class="col-md-6">

        <div class="panel">

            <div class="panel-heading">

                <span class="panel-title">Répartition des acteurs par âge</span>

            </div>

            <div class="panel-body">

                <div class="graph-container">

                    <div id="jq-flot-pie"></div>

                </div>

            </div>

        </div>

    </div>



</div>

<div class="row">

    <div class="col-md-12">

        <div class="panel">

            <div class="panel-heading">

                <span class="panel-title">Répartition des Films par les 4 meilleurs réalisateurs</span>


            </div>

            <div class="panel-body">

                <div class="graph-container">

                    <div data-url="{{ url('admin/api/best-directors') }}" id="hero-area" class="graph" style="position: relative;"></div>

                </div>

                <div style="display:none">




                </div>

            </div>

        </div>

    </div>
</div>













@endsection



