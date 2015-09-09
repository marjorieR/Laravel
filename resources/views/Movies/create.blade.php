@extends('layout')

@section('title')  Creation Films  @endsection

@section('breadscrumb')
    <li><a href="#">Home</a></li>
    <li class="active"><a href="#">Films</a></li>
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
            Créer un Film
        </h1>
    </div>
@endsection



@section('content')

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


        <form enctype="multipart/form-data" novalidate  method="post" action="{{ route('movies.post') }}" class="panel panel-info form-horizontal">

            {{ csrf_field() }}

            <div class="panel-heading">
                <span class="panel-title">Création d'un film</span>
            </div>

            <div class="panel-body">

                <div class="form-group">

                    <label for="inputEmail2" class="col-sm-2 control-label">Titre</label>

                    <div class="col-sm-10">
                        <input type="text" name="title"  value="{{Input::old('title')}}" class="form-control" id="title" placeholder="Titre du film">
                        @if($errors->has('title')) <p class="help-block text-danger">{{ $errors->first('title') }}</p>@endif
                    </div>

                </div>

                <div class="form-group">

                    <label for="asdasdas" class="col-sm-2 control-label">Categories</label>


                    <div class="col-sm-10">

                        <select name="categories" class="js-example-tags">

                            @foreach($categories as $categorie)
                                <option value="{{ $categorie->id }}">{{ $categorie->title }}</option>
                            @endforeach

                        </select>

                    </div>


                </div>

                <div class="form-group">

                    <label for="inputEmail2" class="col-sm-2 control-label">Durée</label>

                    <div class="col-sm-10">
                        <input type="text" name="duree"  value="{{Input::old('duree')}}" class="form-control" id="duree" placeholder="duree">
                        @if($errors->has('duree')) <p class="help-block text-danger">{{ $errors->first('duree') }}</p>@endif
                    </div>

                </div>


                <div class="form-group">

                    <label for="inputPassword" class="col-sm-2 control-label">Date de sortie</label>

                    <div class="col-sm-10">
                        <input type="text" name="date_release"  value="{{Input::old('date_release')}}" class="date form-control" id="date_release" placeholder="Date de sortie">
                        @if($errors->has('date_release')) <p class="help-block text-danger">{{ $errors->first('date_release') }}</p>@endif
                    </div>

                </div>


                <div class="form-group">

                    <label for="inputPassword" class="col-sm-2 control-label">Année</label>

                    <div class="col-sm-10">
                        <input type="text" name="annee"  value="{{Input::old('annee')}}" class="form-control" id="annee" placeholder="Annee">
                        @if($errors->has('annee')) <p class="help-block text-danger">{{ $errors->first('annee') }}</p>@endif
                    </div>

                </div>


                <div class="form-group">

                    <label for="bo" class="col-sm-2 control-label">BO</label>

                    <div class="col-sm-10">

                        <select name="bo" class="form-control form-group-margin">

                            <option value="VO">VO</option>
                            <option value="VOST">VOST</option>
                            <option value="VOSTFR">VOSTFR</option>
                            <option value="FR">FR</option>

                        </select>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-sm-2 control-label">Visible</label>

                    <div class="col-sm-3">

                        <div class="radio">
                            <label>
                                <input type="radio" name="visible" id="visible" value=1 class="px" checked="">
                                <span class="lbl">visible</span>
                            </label>
                        </div>

                    </div>

                    <div class="col-sm-3">

                        <div class="radio">
                            <label>
                                <input type="radio" name="visible" id="visible" value=0 class="px" checked="">
                                <span class="lbl">invisible</span>
                            </label>
                        </div>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-sm-2 control-label">Cover</label>

                    <div class="col-sm-3">

                        <div class="radio">
                            <label>
                                <input type="radio" name="cover" id="cover" value=1 class="px" checked="">
                                <span class="lbl">Mise en Avant</span>
                            </label>
                        </div>

                    </div>

                    <div class="col-sm-3">

                        <div class="radio">
                            <label>
                                <input type="radio" name="cover" id="cover" value=0 class="px" checked="">
                                <span class="lbl">Ou Non</span>
                            </label>
                        </div>

                    </div>

                </div>


                <div class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label">Images</label>

                    <div class="col-sm-10">
                        <input capture="capture" accept="image/* " type="file" name="image"  value="{{Input::old('image')}}" class="form-control" id="image">
                        @if($errors->has('image')) <p class="help-block text-danger">{{ $errors->first('image') }}</p>@endif
                    </div>

                </div>


                <div class="form-group">

                    <label for="asdasdas" class="col-sm-2 control-label">Acteurs</label>


                    <div class="col-sm-10">

                        <select multiple name="actors[]" class="js-example-tags">

                            @foreach($actors as $actor)
                                <option value="{{ $actor->id }}">{{ $actor->firstname }}{{ $actor->lastname }}</option>
                            @endforeach

                        </select>

                    </div>


                </div>


                <div class="form-group">

                    <label for="asdasdas" class="col-sm-2 control-label">Réalisateurs</label>


                    <div class="col-sm-10">

                        <select multiple name="directors[]" class="js-example-tags">

                            @foreach($directors as $director)
                                <option value="{{ $director->id }}">{{ $director->firstname }}{{ $director->lastname }}</option>
                            @endforeach

                        </select>

                    </div>


                </div>


                <div class="form-group">

                    <label for="inputEmail2" class="col-sm-2 control-label">Budget</label>

                    <div class="col-sm-10">
                        <input type="text" name="budget"  value="{{Input::old('budget')}}" class="form-control" id="budget" placeholder="Budget du film">
                        @if($errors->has('budget'))<p class="help-block text-danger">{{ $errors->first('budget') }}</p>@endif
                    </div>

                </div>




                <div class="form-group">
                    <label class="col-sm-2 control-label">Synopsis</label>
                    <div class="col-md-10">
                        <textarea class="form-control wyswyg" type="text" name="synopsis"  id="synopsis" >{{ Input::old('synopsis') }}</textarea>@if($errors->has('synopsis')) <p class="help-block text-danger">{{ $errors->first('synopsis') }}</p>@endif
                    </div>


                </div>

                <div class="col-md-12">
                    <button type='submit' class="btn btn-info center-block btn-rounded">Créer un Films</button>
                </div>


            </div>





@endsection
