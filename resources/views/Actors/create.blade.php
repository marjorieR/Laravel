@extends('layout')

@section('title')  Creation acteurs  @endsection

@section('breadscrumb')
    <li><a href="#">Home</a></li>
    <li class="active"><a href="#">Acteurs</a></li>
    <li class="active"><a href="#"><strong>Créer</strong></a></li>
@show

@section('css')  


@parent
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
@endsection


@section('subtitle')
    <div class="page-header">
        <h1>
            <i class="fa fa-plus page-header-icon"></i>
            Créer un Acteur
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


        <form enctype="multipart/form-data" novalidate  method="post" action="{{ route('actors.post') }}" class="panel panel-info form-horizontal">

            {{ csrf_field() }}

            <div class="panel-heading">
                <span class="panel-title">Création Acteur</span>
            </div>

            <div class="panel-body">

                <div class="form-group">

                    <label for="inputEmail2" class="col-sm-2 control-label">Nom</label>

                    <div class="col-sm-10">
                        <input type="text" name="lastname"  value="{{Input::old('lastname')}}" class="form-control" id="lastname" placeholder="Nom de l'acteur">
                        @if ($errors->has('lastname')) <p class="help-block text-danger">{{ $errors->first('lastname') }}</p>@endif
                    </div>

                </div>

                <div class="form-group">

                    <label for="inputPassword" class="col-sm-2 control-label">Prenom</label>

                    <div class="col-sm-10">
                        <input type="text" name="firstname"  value="{{Input::old('firstname')}}" class="form-control" id="firstname" placeholder="Prenom de l'acteur">
                        @if ($errors->has('firstname')) <p class="help-block text-danger">{{ $errors->first('firstname') }}</p>@endif
                    </div>

                </div>


                <div class="form-group">

                    <label for="inputPassword" class="col-sm-2 control-label">Date de naissance</label>

                    <div class="col-sm-10">
                        <input type="text" name="dob"  value="{{Input::old('dob')}}" class="date form-control" id="dob" placeholder="JJ/MM/YYYY">
                        @if ($errors->has('dob')) <p class="help-block text-danger">{{ $errors->first('dob') }}</p>@endif
                    </div>

                </div>





                <div class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label">Images</label>

                    <div class="col-sm-10">
                        <input capture="capture" accept="image/* " type="file" name="image"  value="{{Input::old('image')}}" class="form-control" id="image" placeholder="Http//">
                        @if ($errors->has('image')) <p class="help-block text-danger">{{ $errors->first('image') }}</p>@endif
                    </div>

                </div>



                <div class="form-group">
                    <label class="col-sm-2 control-label">Nationalité</label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label>
                                <input type="radio" name="nationality" id="optionsRadios1" value="option1" class="px" checked="">
                                <span class="lbl">Française</span>
                            </label>
                        </div> <!-- / .radio -->
                        <div class="radio">
                            <label>
                                <input type="radio" name="nationality" id="optionsRadios2" value="option2" class="px">
                                <span class="lbl">Anglaise</span>
                            </label>
                        </div>
                        <!-- / .radio -->
                        <div class="radio">
                            <label>
                                <input type="radio" name="nationality" id="optionsRadios2-2" value="option2" class="px">
                                <span class="lbl">Espagnol</span>
                            </label>
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio" name="nationality" id="optionsRadios2-2" value="option2" class="px">
                                <span class="lbl">Allemande</span>
                            </label>
                        </div>
                    </div> <!-- / .col-sm-10 -->
                </div>

                <div class="form-group">

                    <label for="asdasdas" class="col-sm-2 control-label">Rôles</label>
                        <div class="col-sm-10">
                            <select class="form-control form-group-margin">
                                <option>Acteurs</option>
                                <option>Figuration</option>
                                <option>Compositeur</option>
                                <option>Réalisateur</option>

                            </select>
                        </div>
                </div>


                <div class="form-group">

                    <label for="asdasdas" class="col-sm-2 control-label">Filmographie</label>


                    <div class="col-sm-10">

                        <select multiple name="movies[]" class="form-control form-group-margin">

                            @foreach($movies as $movie)
                            <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                            @endforeach

                        </select>

                    </div>


                </div>


                <div class="form-group">
                    <label for="asdasdas" class="col-sm-2 control-label" name="recompenses">Récompenses</label>
                    <div class="col-sm-10">

                        <textarea class="form-control" type="text" name="recompenses"  class="form-control" id="recompenses" >{{Input::old('recompenses') }}</textarea>@if ($errors->has('recompenses')) <p class="help-block text-danger">{{ $errors->first('recompenses') }}</p>@endif

                    </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-2 control-label">Biographie</label>
                    <div class="col-md-10">
                        <textarea class="form-control wyswyg" type="text" name="biography"  id="biography" >{{ Input::old('biography') }}</textarea>@if ($errors->has('biography')) <p class="help-block text-danger">{{ $errors->first('biography') }}</p>@endif
                </div>

                <div class="col-md-10">
                    <button type='submit' class="btn btn-info btn-rounded">Créer un acteur</button>
                 </div>

            </div>
        </form>
</div>

@endsection