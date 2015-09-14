@extends('layout')

@section('title')Synopsis @endsection



@section('subtitle')
    <div class="page-header">
        <h1>
            <i class="fa fa-film page-header-icon"></i>
            Synopsis film
        </h1>
    </div>
@endsection



@section('breadscrumb')
    <li><a href="#">Home</a></li>
    <li class="active"><a href="#">Film</a></li>
    <li class="active"><a href="#"><strong>synopsis</strong></a></li>
@show


@section('css')  

@parent
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">

@endsection



@section('content')

    <h3>{{ $movie->title }}</h3>

    <p>{{ strip_tags($movie->synopsis) }}</p>





    <div class="table-info">

        <div class="table-header">

            <div class="table-caption">
                Info Table
            </div>
        </div>

            <table class="table table-bordered">

                <thead>

                    <tr>
                        <th>#</th>
                        <th>Commentaires</th>

                    </tr>

                </thead>

                <tbody>

             @foreach($movie->comments as $comment)

                <tr>


                    <td>{{ $comment->id }}</td>
                    <td>{{ $comment->content }}</td>

                </tr>

             @endforeach

            </tbody>

            </table>

                <div class="table-footer">

                    Footer

                </div>
    </div>

        <form action="{{ route("movies.comment",['id'=> $movie->id]) }}" method="post">

            {{ csrf_field() }}

            <textarea placeholder="Ecrire un commentaire" class="form-control" name="content"></textarea>
            <button class="btn btn-primary" type="submit"><i class="fafa-pencil"></i> J'écris ce commentaire</button>

        </form>

@endsection
