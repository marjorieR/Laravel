@extends('layout')

@section('title')  liste de mes acteurs  @endsection

@section('breadcrumb')
    <li><a href="#"Home></a></li><li>Actors</li><li>liste acteurs</li>
@endsection


@section('css')  
    @parent
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
@endsection



@section('content')

    <div class="table-info">
        <div class="table-header">
            <div class="table-caption">
                Actors
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

            @foreach($actors as $actor)

                <tr>
                    <td>{{ $actor->id }}</td>

                    <td class ="col-lg-1">

                        <a href="{{ route('actors.read',['id' =>$actor->id]) }}">
                            <img src="{{ $actor->image }}" class="img-responsive" alt="Responsive image">
                        </a>
                    </td>

                    <td>{{ $actor->firstname }}{{ $actor->lastname }}</td>

                    <td>{{ $actor->city }}</td>

                    <td>{{ $actor->dob }}</td>


                    <td>
                        <a href="" class="btn btn-primary btn-sm"><i class="fa fa-search">Voir</i></a></br>
                        <a href="{{ route('actors.delete',['id'=>$actor->id]) }}" class="btn btn-danger"><i class="fa fa-trash">Supprimer</i></a>

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

