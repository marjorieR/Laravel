@extends('layout')

@section('title')  liste de mes Categories  @endsection


@section('breadscrumb')
    <li><a href="#">Home</a></li>
    <li class="active"><a href="#">categories</a></li>
    <li class="active"><a href="#"><strong>Liste</strong></a></li>
@show


@section('css')  

@parent
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">

@endsection


@section('subtitle')
    <div class="page-header">
        <h1>
            <i class="fa fa-list page-header-icon"></i>
            Liste des categories
        </h1>
    </div>



@endsection





@section('content')


    <div class="row">

        <div class="col-md-8">

            <div class="alert alert-danger">

                <i class="fa fa-warning"></i> <strong>3</strong> catégories qui ont aucun film
            </div>

            <div class="alert alert-info">

                <i class="fa fa-info"></i> La catégorie <strong></strong> est la plus populaire <i>{{ $category }}Films</i>
            </div>

            <div class="alert alert-default">

                <i class="fa fa-dollar"></i> La catégorie <strong>Horreur</strong> a le plus gros budget de l'anne <strong>2015</strong> : <i>3 500 152</i> €

            </div>

        </div>




            <div class="panel panel-info panel-dark widget-profile col-md-4">

                <div class="panel-heading">

                    <div class="widget-profile-bg-icon"><i class="fa fa-film"></i></div>

                    <img src="" alt="" class="widget-profile-avatar">

                    <div class="widget-profile-header">

                        <span>Catégorie Fantastique</span><br>

                    </div>

                </div>
                <!-- / .panel-heading -->
                <div class="widget-profile-counters">
                    <div class="col-xs-4"><span>15</span><br>Films</div>
                    <div class="col-xs-4"><span>30</span><br>Commentaires</div>
                    <div class="col-xs-4"><span>18</span><br>Acteurs</div>
                </div>



            </div>

    </div>



    <div class="table-info">

        <div class="table-header">

            <div class="table-caption">

               Categories

            </div>
        </div>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Noms</th>
                <th>Description</th>
                <th>Films</th>
                <th>Actions</th>

            </tr>
            </thead>
            <tbody>

            @foreach($categories as $categorie)

                <tr>
                    <td>{{ $categorie->id }}</td>


                    <td>{{ $categorie->title}}</td>

                    <td>{{ $categorie->description }}</td>

                    <td><strong>{{ count($categorie->movies) }} <i class="fa fa-film"></i> </strong></td>



                    <td>
                        <div class="btn-group">

                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">

                                <i class="fa fa-cog"></i> Actions&nbsp;<i class="fa fa-caret-down"></i></button>

                            <ul class="dropdown-menu">
                                <li><a href="#">Voir</a></li>
                                <li><a href="#">Voir les films associés</a></li>
                                <li><a href="#">Editer</a></li>
                                <li><a href="#">Supprimer</a></li>
                            </ul>
                        </div>
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