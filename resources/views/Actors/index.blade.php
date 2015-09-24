@extends('layout')

@section('title')  liste de mes acteurs  @endsection

@section('breadscrumb')
    <li><a href="#">Home</a></li>
    <li class="active"><a href="#">Actors</a></li>
    <li class="active"><a href="#"><strong>Liste</strong></a></li>
@show


@section('css')  
    @parent
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('subtitle')
    <div class="page-header">
        <h1>
            <i class="fa fa-users page-header-icon"></i>
            Liste de mes acteurs
        </h1>
    </div>
@endsection



@section('content')

    <div class="table table-info">
        <div class="table-header">
            <div class="table-caption">
                Actors
            </div>
        </div>
        <table id="list" class="table table-bordered">
            <thead>
            <tr>
                <th>id</th>
                <th>Photos</th>
                <th>Noms</th>
                <th>Favoris</th>
                <th>Ville</th>
                <th>Date de naissance</th>
                <th>Actions</th>

            </tr>
            </thead>
            <tbody>

            @foreach($actors as $actor)

                <tr>
                    <td>{{ $actor->id }}</td>

                    <td class ="col-lg-1">

                        <a href="{{ route('actors.read',['id' =>$actor->id]) }}">
                            <img src="{{ $actor->image }}" class="img-responsive" alt="Responsive image">
                        </a>
                    </td>


                    <td>{{ $actor->firstname }}{{ $actor->lastname }}</td>

                    <td>
                        <a href= "" class="likes"
                                    data-token="{{ csrf_token() }}"
                                    data-id="{{ $actor->id }}"
                                    data-url="{{ route ('actors.likes') }}">

                         <i class=" @if(array_search($actor->id,session('likes',[]))) text-success @endif fa fa-thumbs-up"></i>

                        </a>
                        </br>

                        <a href="" class="dislikes"
                                   data-token="{{ csrf_token() }}"
                                   data-id="{{ $actor->id }}"
                                   data-url="{{ route ('actors.dislikes') }}">

                            <i class=" @if(array_search($actor->id,session('dislikes',[]))) text-danger @endif fa fa-thumbs-down"></i>
                        </a>


                    </td>


                    <td>{{ $actor->city }}</td>

                    <td>{{ $actor->dob }}</td>


                    <td>
                        <a href="" class="btn btn-primary btn-sm"><i class="fa fa-search">  Voir</i></a>
                        <a href="{{ route('actors.delete',['id'=>$actor->id]) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash">  Supprimer</i></a>

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

