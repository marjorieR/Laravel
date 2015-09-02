@extends('layout')

@section('title')  liste de mes Films  @endsection

@section('breadcrumb')
    <li><a href="#"Home></a></li><li>Films</li><li>liste Films</li>
@endsection


@section('css')  
@parent
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
@endsection



@section('content')

    <div class="table-info">
        <div class="table-header">
            <div class="table-caption">
               Films
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>id</th>
                <th>Photos</th>
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

