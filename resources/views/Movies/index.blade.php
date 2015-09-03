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

    <div class="table-info">
        <div class="table-header">
            <div class="table-caption">Films

                <div class="btn-group btn-group-sm" role="group" aria-label="...">
                    <a href="" class="active btn btn-info btn-sm"><i class="fa fa-language">  Tous</i></a>
                    <a href="" class="btn btn-info btn-sm"><i class="fa fa-language">  VO</i></a>
                    <a href="" class="btn btn-info btn-sm"><i class="fa fa-language">  VOST</i></a>
                    <a href="" class="btn btn-info btn-sm"><i class="fa fa-language">  VOSTFR</i></a>
                </div>

                <div class="btn-group btn-group-sm" role="group" aria-label="...">
                    <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye">  Tous</i></a>
                    <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye">  Visble</i></a>
                    <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye-slash">  Invisible</i></a>
                </div>

                <div class="btn-group btn-group-sm" role="group" aria-label="...">
                    <a href="" class="btn btn-info btn-sm"><i class="fa fa-language">  Tous</i></a>
                    <a href="" class="btn btn-info btn-sm"><i class="fa fa-language">  Warner-Bros</i></a>
                    <a href="" class="btn btn-info btn-sm"><i class="fa fa-language">  HBO</i></a>
                </div>


            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Photos</th>
                    <th>Activation</th>
                    <th>Cover</th>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Durée</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

            @foreach($movies as $movie)

                <tr>
                    <td>{{ $movie->id }}</td>

                    <td class ="col-lg-1">

                        <a href="{{ route('movies.read',['id' =>$movie->id]) }}">
                            <img src="{{ $movie->image }}" class="img-responsive" alt="Responsive image">
                        </a>

                    </td>

                    <td>

                       <a href="{{route('movies.activation',['id'=>$movie->id])}}">

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

                    <td>{{ $movie->title }}</td>


                    <td>

                        {{ str_limit( strip_tags($movie->description),$limit =100, $end = '...')}}

                    </td>

                    <td>{{ $movie->duree }}</td>

                    <td>
                        <a href="" class="btn btn-primary btn-sm"><i class="fa fa-eye">  Voir</i></a>
                        <a href="{{ route('movies.delete',['id'=>$movie->id]) }}" class="btn btn-primary btn-sm"><i class="fa fa-trash">  Supprimer</i></a>

                    </td>

                </tr>


            @endforeach

            </tbody>
        </table>
        <div class="table-footer">
            Footer
        </div>
    </div>





@endsection

