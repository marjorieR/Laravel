@extends('layout')

@section('title')  Creation Categories  @endsection

@section('breadscrumb')
    <li><a href="#">Home</a></li>
    <li class="active"><a href="#">Categories</a></li>
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


        <form enctype="multipart/form-data" novalidate  method="post" action="{{ route('categories.post') }}" class="panel panel-info form-horizontal">

            {{ csrf_field() }}

            <div class="panel-heading">
                <span class="panel-title">Création d'une Categories</span>
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
                    <label for="inputPassword" class="col-sm-2 control-label">Images</label>

                    <div class="col-sm-10">
                        <input capture="capture" accept="image/* " type="file" name="image"  value="{{Input::old('image')}}" class="form-control" id="image">
                        @if($errors->has('image')) <p class="help-block text-danger">{{ $errors->first('image') }}</p>@endif
                    </div>

                </div>





                <div class="form-group">
                    <label class="col-sm-2 control-label">Description</label>
                    <div class="col-md-10">
                        <textarea class="form-control wyswyg" type="text" name="description"  id="description" >{{ Input::old('description') }}</textarea>@if($errors->has('description')) <p class="help-block text-danger">{{ $errors->first('description') }}</p>@endif
                    </div>


                </div>

                <div class="col-md-12">
                    <button type='submit' class="btn btn-info  btn-rounded">Créer un Films</button>
                </div>


            </div>


@endsection
