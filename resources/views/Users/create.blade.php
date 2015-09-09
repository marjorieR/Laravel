@extends('layout')

@section('title')  Creation Users  @endsection

@section('breadscrumb')
    <li><a href="#">Home</a></li>
    <li class="active"><a href="#">Users</a></li>
    <li class="active"><a href="#"><strong>Créer</strong></a></li>
@show

@section('css')  
@parent
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
@endsection


@section('subtitle')
    <div class="page-header">
        <h1>
            <i class="fa fa-user-plus"></i>
            Créer un User
        </h1>
    </div>
@endsection


@section('content')



    <div class=" col-sm-12">


        @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li> {{ $error}} </li>
                    @endforeach
                </ul>

            </div>
        @endif


        <form enctype="multipart/form-data" novalidate  method="post" action="{{ route('users.post') }}" class="panel panel-info form-horizontal">

            {{ csrf_field() }}

            <div class="panel-heading">
                <span class="panel-title">Création d'un User</span>
            </div>

            <div class="panel-body">

                <div class="form-group">

                    <label for="inputEmail2" class="col-sm-2 control-label">Username</label>

                    <div class="col-sm-10">
                        <input type="text" name="username"  value="{{Input::old('username')}}" class="form-control" id="username" placeholder="Username">
                        @if($errors->has('username')) <p class="help-block text-danger">{{ $errors->first('username') }}</p>@endif
                    </div>

                </div>


                <div class="form-group">
                    <label for="avatar" class="col-sm-2 control-label">Avatar</label>

                    <div class="col-sm-10">
                        <input capture="capture" accept="image/* " type="file" name="image"  value="{{Input::old('avatar')}}" class="form-control" id="image">
                        @if($errors->has('avatar')) <p class="help-block text-danger">{{ $errors->first('avatar') }}</p>@endif
                    </div>

                </div>

                <div class="form-group">
                    <label for="inputEmail2" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">

                        <input type="text" name="email"  value="{{Input::old('email')}}" class="form-control" id="email" placeholder="Email">
                        @if($errors->has('email')) <p class="help-block text-danger">{{ $errors->first('email') }}</p>@endif

                    </div>

                </div>


                <div class="form-group">

                    <label for="inputPassword" class="col-sm-2 control-label">Mot de passe</label>

                    <div class="col-sm-10">


                        <input type="password" name="password"  value="{{Input::old('password')}}" class="form-control" id="password" placeholder="Password">
                        @if($errors->has('password')) <p class="help-block text-danger">{{ $errors->first('password') }}</p>@endif

                    </div>

                </div>

                <div class="form-group">

                    <label for="ville" class="col-sm-2 control-label">Ville</label>

                    <div class="col-sm-10">

                        <input type="text" name="ville"  value="{{Input::old('ville')}}" class="form-control" id="ville" placeholder="Ville">
                        @if($errors->has('ville')) <p class="help-block text-danger">{{ $errors->first('ville') }}</p>@endif

                    </div>

                </div>


                <div class="form-group">

                    <label for="zipcode" class="col-sm-2 control-label">Code postal</label>

                    <div class="col-sm-10">

                        <input type="text" name="zipcode"  value="{{Input::old('zipcode')}}" class="form-control" id="zipcode" placeholder="Code postal">
                        @if($errors->has('zipcode')) <p class="help-block text-danger">{{ $errors->first('zipcode') }}</p>@endif

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-sm-2 control-label">Connexion</label>

                    <div class="col-sm-3">

                        <div class="radio">
                            <label>
                                <input type="radio" name="enable" id="enable" value="1" class="px" checked="">
                                <span class="lbl">En ligne</span>
                            </label>
                        </div>

                    </div>

                    <div class="col-sm-3">

                        <div class="radio">
                            <label>

                                <input type="radio" name="enable" id="enable" value="0" class="px" checked="">

                                <span class="lbl">Hors ligne</span>
                            </label>
                        </div>

                    </div>

                </div>

                <div class="col-md-12">
                    <button type='submit' class="btn btn-info center-block btn-rounded">Créer un Utilisateur</button>
                </div>

            </div>




@endsection