@extends('layout')

@section('title')  liste de mes acteurs  @endsection






@section('breadcrumb')<li><a href="#"Home></a></li><li>Actors</li><li>Index</li>  @endsection

@show


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
                <th>First Name</th>
                <th>Last Name</th>

            </tr>
            </thead>
            <tbody>

            @foreach($actors as $actor)

            <tr>
                <td>{{$actor->id}}</td>
                <td>{{ $actor->firstname }}</td>
                <td>{{ $actor->lastname }}</td>

            </tr>


            @endforeach

            </tbody>
        </table>
        <div class="table-footer">
            Footer
        </div>
    </div>





@endsection

