@extends('layout')

@section('title') Compte  @endsection

@section('breadscrumb')
    <li><a href="#">Home</a></li>
    <li class="active"><a href="#">Compte</a></li>
    <li class="active"><a href="#"><strong>Modifier</strong></a></li>
@show

@section('css')  

@parent
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
@endsection


@section('subtitle')
    <div class="page-header">
        <h1>
            <i class="fa fa-database"></i>
            Modifications
        </h1>
    </div>
@endsection


@section('content')


    @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error}} </li>
                @endforeach
            </ul>

        </div>

    @endif


    <div class=" col-sm-8">




            <form action="" method="post" class="panel panel-info " >


                {{ csrf_field() }}

                <div class="panel-heading">
                    <span class="panel-title">Informations personnelles</span>
                </div>

             <div class="panel-body">

                <div class="form-group">
                    <input type="text" name="name" value=" {{ Auth::user()->name }} " class="form-control input-md" placeholder="Name ">
                    @if ($errors->has('name')) <p class="help-block text-danger">{{ $errors->first('name') }}</p>@endif
                </div><!-- / name -->


                <div class="form-group">
                    <input type="text" name="firstname" value="{{ Auth::user()->firstname }}" class="form-control input-md" placeholder="Prenom ">
                    @if ($errors->has('firstname')) <p class="help-block text-danger">{{ $errors->first('firstname') }}</p>@endif
                </div><!-- /prenom -->

                <div class="form-group">
                    <input type="text" name="ville" value="{{ Auth::user()->ville }}" class="form-control input-md" placeholder="Ville ">
                    @if ($errors->has('ville')) <p class="help-block text-danger">{{ $errors->first('ville') }}</p>@endif
                </div><!-- /prenom -->

                <div class="form-group">
                    <input type="text" name="images" value="{{ Auth::user()->images }}}" class="form-control input-md" placeholder="Http:// ">
                    @if ($errors->has('images')) <p class="help-block text-danger">{{ $errors->first('images') }}</p>@endif
                </div><!-- /image -->

                <div class="form-group">

                    <textarea class="form-control input-md"  type="text" name="description"  id="description" placeholder="Description ">{{ Auth::user()->description }}</textarea>@if($errors->has('description')) <p class="help-block text-danger">{{ $errors->first('description') }}</p>@endif
                </div><!-- description -->



                <div class="form-group">
                    <input type="text" name="email" value="{{ Auth::user()->email }}" class="form-control input-md" placeholder="Email ">
                    @if ($errors->has('email')) <p class="help-block text-danger">{{ $errors->first('email') }}</p>@endif
                </div> <!-- / name -->

                <div class="form-group signin-password">
                    <input type="password" name="password" value="{{ Auth::user()->password }}" class="form-control input-md" placeholder="Password">
                    @if ($errors->has('password')) <p class="help-block text-danger">{{ $errors->first('password') }}</p>@endif

                </div>

                <div class="form-group signin-password">
                    <input type="password" name="password_confirmation"  class="form-control input-md" placeholder="Confirmation Password">

                </div><!-- / Password -->

                <div class="form-actions">
                    <input type="submit" value="Enregistrer" class="btn btn-primary btn-block btn-lg">
                </div>

              </div>



                <!-- / .form-actions -->
            </form>

    </div>




@endsection
