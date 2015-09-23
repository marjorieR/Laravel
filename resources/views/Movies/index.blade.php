@extends('layout')

@section('title')  liste de mes Films  @endsection



@section('subtitle')
    <div class="page-header">
        <h1>
            <i class="fa fa-film page-header-icon"></i>
            Liste de mes films
        </h1>
    </div>
@endsection



@section('breadscrumb')
    <li><a href="#">Home</a></li>
    <li class="active"><a href="#">Films</a></li>
    <li class="active"><a href="#"><strong>Liste</strong></a></li>
@show



@section('css')  
@parent
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">

@endsection




@section('content')


    <div class="row">
        <div class="col-md-7">
            <div class="stat-panel">
                <!-- Success background, bordered, without top and bottom borders, without left border, without padding, vertically and horizontally centered text, large text -->
                <a href="" class="stat-cell col-xs-5 bg-info bordered no-border-vr no-border-l no-padding valign-middle text-center text-lg">
                    {{ $nbfilms  }}
                    <i class="fa fa-film"></i>&nbsp;&nbsp;<strong></strong>
                </a> <!-- /.stat-cell -->
                <!-- Without padding, extra small text -->
                <div class="stat-cell col-xs-7 no-padding valign-middle">
                    <!-- Add parent div.stat-rows if you want build nested rows -->
                    <div class="stat-rows">
                        <div class="stat-row">
                            <!-- Success background, small padding, vertically aligned text -->
                            <a href="#" class="stat-cell bg-info padding-sm valign-middle">
                              {{ $filmscover  }} Films mis en avant
                                <i class="fa fa-star pull-right"></i>
                            </a>
                        </div>
                        <div class="stat-row">
                            <!-- Success darken background, small padding, vertically aligned text -->
                            <a href="#" class="stat-cell bg-info darken padding-sm valign-middle">
                                  {{ $filmsav}} Films A Venir
                                <i class="fa fa-film pull-right"></i>
                            </a>
                        </div>
                        <div class="stat-row">
                            <!-- Success darker background, small padding, vertically aligned text -->
                            <a href="#" class="stat-cell bg-info darker padding-sm valign-middle">
                                {{ $invisible }} films inactifs
                                <i class="fa fa-eye-slash pull-right"></i>
                            </a>
                        </div>
                    </div> <!-- /.stat-rows -->
                </div> <!-- /.stat-cell -->
            </div>
        </div>




        <div class="col-md-5">

            <div class="stat-panel">
                <!-- Success background. vertically centered text -->
                <div class="stat-cell bg-success valign-middle">
                    <!-- Stat panel bg icon -->
                    <i class="fa fa-usd bg-icon"></i>
                    <!-- Extra large text -->
                    <span class="text-xlg"><strong> {{ $budget }} Euros</strong></span><br>
                    <!-- Big text -->
                    <span class="text-bg">Budget</span><br>
                    <!-- Small text -->
                    <span class="text-sm">Total de l'annee 2015</span>
                </div> <!-- /.stat-cell -->
            </div>
        </div>
    </div>



    <div class="table-info">

        <div class="table-header">

            <div class="table-caption">

                <div class="btn-group btn-group-sm" role="group" aria-label="...">

                    <a href="{{route('movies.index') }}" class="@if($bo == "*") active @endif btn btn-info btn-sm">

                        <i class="fa fa-language">  Tous</i></a>

                    <a href="{{route('movies.index', ['bo' =>'VO']) }}" class="@if($bo == "VO") active @endif  btn btn-info btn-sm">

                        <i class="fa fa-language">  VO</i></a>

                    <a href="{{route('movies.index',['bo' =>'VOST'])}}" class="@if($bo == "VOST") active @endif btn btn-info btn-sm">

                        <i class="fa fa-language">  VOST</i></a>

                    <a href="{{route('movies.index',['bo' =>'VOSTFR'])}}" class="@if($bo == "VOSTFR") active @endif btn btn-info btn-sm">

                        <i class="fa fa-language">  VOSTFR</i></a>

                </div>


                <div class="btn-group btn-group-sm" role="group" aria-label="...">

                    <a href="{{route('movies.index') }}" class="@if($visibilite  == "*") active @endif btn btn-info btn-sm">

                        <i class="fa fa-eye">  Tous</i></a>

                    <a href="{{route('movies.index', ['visibilite' => 1, "bo" => "*"]) }}" class=" @if ($visibilite == 1) active @endif btn btn-info btn-sm">

                        <i class="fa fa-eye">  Visble</i></a>

                    <a href="{{route('movies.index', ['visibilite' => 0, "bo" => "*"]) }}" class=" @if ($visibilite == 0) active @endif btn btn-info btn-sm">

                        <i class="fa fa-eye-slash">  Invisible</i></a>


                </div>


                <div class="btn-group btn-group-sm" role="group" aria-label="...">

                    <a href="{{ route('movies.index') }}" class=" @if($distributeur == "*") active @endif btn btn-info btn-sm">

                        <i class="fa fa-language">  Tous</i></a>

                    <a href="{{ route('movies.index'), ['distributeur' => 'Warner_Bross', "bo" => "*", 'visibilite' =>"*"]}}" class=" @if($distributeur == "Warner_Bross") active @endif btn btn-info btn-sm">

                        <i class="fa fa-language">  Warner-Bros</i></a>

                    <a href="{{ route('movies.index'), ['distributeur' => 'HBO', "bo" => "*", 'visibilite' => "*" ] }}" class=" @if($distributeur == "HBO") active @endif btn btn-info btn-sm">

                        <i class="fa fa-language">  HBO</i></a>

                </div>



                <div class="btn-group btn-group-sm" role="group" aria-label="...">

                    <a href="{{ route('movies.trash')}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"> Poubelle</i></a>

                </div>




                <div class="panel-heading-controls">

                    <select class="form-control input-sm" id="actionslist">

                        <option>Actions</option>

                        <option value="1">Supprimer</option>

                        <option value="2">Activer</option>

                        <option value="3">Desactiver</option>

                    </select>

                             {{--<button class=" pull-right btn btn-info btn-xs">OK</button>--}}

                </div>

            </div>


        </div>

    </div>




        <table id="list" class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Photos</th>
                    <th>Activation</th>
                    <th>Cover</th>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Durée</th>
                    <th>Favoris</th>
                    <th>Actions</th>
                    <th>Presse</th>
                </tr>
            </thead>
            <tbody>

            @foreach($movies as $movie)

                <tr>
                    <td class="col-lg-1"><input  data-url="{{ route('movies.delete',['id'=>$movie->id]) }}" type="checkbox"></td>

                    <td class ="col-lg-1">

                        <a href="{{ route('movies.read',['id' => $movie->id]) }}">
                            <img src="{{ $movie->image }}" class="img-responsive" alt="Responsive image">
                        </a>

                    </td>

                    <td class ="col-lg-1">

                       <a href="{{route('movies.activation',['id'=> $movie->id])}}">

                           @if($movie-> visible ==1)

                                <i class="fa fa-check-square-o"></i>


                           @else

                                <i class="fa fa-check-square"></i>


                           @endif</a>
                    </td>

                    <td>

                        <a href="{{route('movies.cover',['id'=>$movie->id])}}">

                            @if($movie-> cover ==1)

                                <i class="fa fa-star-o"></i>


                            @else

                                <i class="fa fa-star"></i>


                            @endif</a></td>

                    <td class ="col-lg-2">{{ $movie->title }}</td>


                    <td class ="col-lg-3">

                        {{ str_limit( strip_tags($movie->description),$limit =100, $end = '...')}}

                    </td>

                    <td>{{ $movie->duree }}h</td>


                    <td>

                       <input type="checkbox" data-class="switcher-info" data-token="{{ csrf_token() }}" data-id="{{ $movie->id }}"  data-url="{{ route ('movies.favoris') }}" class="switcher" checked="checked">


                    </td>

                    <td>
                        <a href="" class="btn btn-primary btn-sm"><i class="fa fa-eye">  Voir</i></a>
                        @if(Route::current()->getName()== "movies.trash")
                            <a href="{{ route('movies.restore',['id'=>$movie->id]) }}" class="btn btn-info btn-sm"><i class="fa fa-refresh"> Restaurer</i></a>
                        @else
                            <a href="{{ route('movies.delete',['id'=>$movie->id]) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash">  Supprimer</i></a>
                        @endif

                        <td>
                            <a href="" class="btn btn-xs btn-primary"><i class="fa fa-thumbs-up"></i> Note de presse <small>({{ $movie->note_presse }}/5)</small></a>
                            <a href="" class="btn btn-xs btn-primary"><i class="fa fa-thumbs-down"></i> Note de presse <small>({{ $movie->note_presse }}/5)</small></a>
                        </td>
                    </td>

                </tr>


            @endforeach

            </tbody>
        </table>
        <div class="table-footer">
            Footer
        </div>



@endsection

