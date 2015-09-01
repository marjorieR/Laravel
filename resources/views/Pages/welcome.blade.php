@extends('layout')


@section('content')
                <div class="title">Laravel 5</div>

                <a href = "{{ route ('actors.index',['ville'=>"lyon"]) }}">Liste des acteurs</a>


@endsection

