@extends('layout')


@section('title')  liste de mes acteurs  @endsection


@section('breadscrumb')

    <li><a href="#">Home</a></li>

    <li class="active"><a href="#">Réalisateurs</a></li>

    <li class="active"><a href="#"><strong>Liste</strong></a></li>
@show



@section('css')
     
@parent

<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">

@endsection


@section('subtitle')

    <div class="page-header">
        <h1>
            <i class="fa fa-video-camera page-header-icon"></i>
            Liste de mes Réalisateurs
        </h1>
    </div>

@endsection



@section('content')

    <div class="table-info">
        <div class="table-header">
            <div class="table-caption">
                Directors
            </div>
        </div>
        <table class="table table-bordered">
            <thead>

            <tr>
                <th>id</th>

                <th>Photos</th>

                <th>Noms</th>

                <th>Ville</th>

                <th>Date de naissance</th>

                <th>Actions</th>

            </tr>
            </thead>
            <tbody>

            @foreach($directors as $director)

                <tr>
                    <td>{{ $director->id }}</td>

                    <td class ="col-lg-1">

                        <a href="{{ route('directors.read',['id' =>$director->id]) }}">
                            <img src="{{ $director->image }}" class="img-responsive" alt="Responsive image">
                        </a>

                    </td>
                    <td>{{ $director->firstname }}{{ $director->lastname }}</td>

                    <td>{{ $director->city }}</td>

                    <td>{{ $director->dob }}</td>

                    <td>
                        <a href="" class="btn btn-primary btn-sm"><i class="fa fa-eye">  Voir</i></a>
                        <a href="{{ route('directors.delete',['id'=>$director->id]) }}" class="btn btn-primary btn-sm"><i class="fa fa-trash">  Supprimer</i></a>

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

