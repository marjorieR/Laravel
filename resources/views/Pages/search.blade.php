@extends('layout')

@section('title')  search  @endsection



@section('subtitle')
    <div class="page-header">
        <h1>
            <i class="fa fa-film page-header-icon"></i>
           search
        </h1>
    </div>
@endsection



@section('breadscrumb')
    <li><a href="#">Home</a></li>
    <li class="active"><a href="#">searchs</a></li>

@show


@section('css')  
@parent
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">

@endsection

@section('content')



    <div class="panel-body">
        <form method="Get" action="{{route('pages.search')}}">
            <div class="form-group">
                <label class="col-sm-4 control-label">Titre:</label>

                <div class="col-sm-8">
                    <input type="text"  class="form-control" name="Title"id= "title" >
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Rechercher</button>
        </form>
    </div>


    <div class="panel-body">


        <select  name="lang" class="form-control">
            <option value="fr">Francais</option>
            <option value="en">Anglais</option>

        </select>
    </div>





@endsection