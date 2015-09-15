@extends('layout_logout')

@section('title') Authentification  @endsection




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


    <form action="" method="post" class="panel" >

        {{ csrf_field() }}

        <div class="form-group">
            <input type="text" name="name" value="{{ Input::old('name') }}" class="form-control input-lg" placeholder="Name ">
            @if ($errors->has('name')) <p class="help-block text-danger">{{ $errors->first('name') }}</p>@endif
        </div><!-- / name -->


        <div class="form-group">
            <input type="text" name="firstname" value="{{ Input::old('firstname') }}" class="form-control input-lg" placeholder="Prenom ">
            @if ($errors->has('firstname')) <p class="help-block text-danger">{{ $errors->first('firstname') }}</p>@endif
        </div><!-- /prenom -->

        <div class="form-group">
            <input type="text" name="ville" value="{{ Input::old('ville') }}" class="form-control input-lg" placeholder="Ville ">
            @if ($errors->has('ville')) <p class="help-block text-danger">{{ $errors->first('ville') }}</p>@endif
        </div><!-- /prenom -->

        <div class="form-group">
            <input type="text" name="images" value="{{ Input::old('images') }}" class="form-control input-lg" placeholder="Http:// ">
            @if ($errors->has('images')) <p class="help-block text-danger">{{ $errors->first('images') }}</p>@endif
        </div><!-- /image -->

        <div class="form-group">

            <textarea class="form-control input-lg"  type="text" name="description"  id="description" placeholder="Description ">{{ Input::old('description') }}</textarea>@if($errors->has('description')) <p class="help-block text-danger">{{ $errors->first('description') }}</p>@endif
        </div><!-- description -->



        <div class="form-group">
            <input type="text" name="email" value="{{ Input::old('email') }}" class="form-control input-lg" placeholder="Email ">
            @if ($errors->has('email')) <p class="help-block text-danger">{{ $errors->first('email') }}</p>@endif
        </div> <!-- / name -->

        <div class="form-group signin-password">
            <input type="password" name="password" value="{{ Input::old('password') }}" class="form-control input-lg" placeholder="Password">
            @if ($errors->has('password')) <p class="help-block text-danger">{{ $errors->first('password') }}</p>@endif

        </div>

        <div class="form-group signin-password">
            <input type="password" name="password_confirmation"  class="form-control input-lg" placeholder="Confirmation Password">

        </div><!-- / Password -->

        <div class="form-actions">
            <input type="submit" value="Enregistrer" class="btn btn-primary btn-block btn-lg">
        </div>



        <!-- / .form-actions -->
    </form>
    <!-- / Form -->




@endsection
