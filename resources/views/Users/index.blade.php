
@extends('layout')

@section('title')  liste des Utilisateurs  @endsection



@section('subtitle')
    <div class="page-header">
        <h1>
            <i class="fa fa-user"></i>
            Liste des Utilisateurs
        </h1>
    </div>
@endsection



@section('breadscrumb')
    <li><a href="#">Home</a></li>
    <li class="active"><a href="#">Users</a></li>
    <li class="active"><a href="#"><strong>Liste</strong></a></li>
@show


@section('css')  
@parent
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">

@endsection





@section('content')

    <div class="table-info">

        <div class="table-header">

            <div class="table-caption"> Users </div>

        </div>

        <table class="table table-bordered">

            <thead>

            <tr>
                <th>id</th>
                <th>Avatar</th>
                <th>Username</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Ville</th>
                <th>Zipcode</th>
                <th>Enabled</th>
                <th>Action</th>

            </tr>

            </thead>

            <tbody>

            @foreach($users as $user)

                <tr>
                    <td>{{ $user->id }}
                        <i class= @if(in_array($user->id,session('banni',[])))" text-danger @endif fa fa-ban"></i></td>






                    <td class ="col-lg-1">

                        <a href="{{ route('users.read',['id' =>$user->id]) }}">
                        <img src="{{ $user->avatar }}" class="img-responsive" alt="Responsive image">
                        </a>

                    </td>

                    <td>{{ $user->username }}</td>

                    <td>{{ $user->firstname }}</td>

                    <td>{{ $user->lastname }}</td>

                    <td>{{ $user->email }}</td>

                    <td>{{ $user->ville }}</td>

                    <td>{{ $user->zipcode }}</td>



                    <td>

                        <a href="{{route('users.enabled',['id'=>$user->id])}}">

                            @if($user-> enabled == 1)

                                <i class="fa fa-toggle-on"></i>


                            @else

                                <i class="fa fa-toggle-off"></i>


                            @endif</a>
                    </td>



                    <td>
                        <a href="" class="btn btn-primary btn-sm"><i class="fa fa-eye">  Voir</i></a>
                        <a href="{{ route('users.delete',['id'=>$user->id]) }}" class="btn btn-primary btn-sm"><i class="fa fa-trash">  Supprimer</i></a>


                        <a href="" class=" banni btn btn-danger btn-sm btn-rounded"

                                   data-token="{{ csrf_token() }}"
                                   data-id="{{ $user->id }}"
                                   data-url="{{ route ('users.banni') }}"><i class="fa fa-times"> Bannir</i></a>

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