@extends('layout_logout')

@section('title') Authentification  @endsection




@section('content')


    <form action="index.html" id="signin-form_id" class="panel" novalidate="novalidate">

        <div class="form-group">
            <input type="text" name="name" id="name_id" class="form-control input-lg" placeholder="name ">
        </div> <!-- / name -->

        <div class="form-group">
            <input type="text" name="name" id="name_id" class="form-control input-lg" placeholder="email ">
        </div> <!-- / name -->

        <div class="form-group signin-password">
            <input type="password" name="signin_password" id="password_id" class="form-control input-lg" placeholder="Password">

        </div>

        <div class="form-group signin-password">
            <input type="password" name="signin_password" id="password_id" class="form-control input-lg" placeholder="Confirmation Password">

        </div><!-- / Password -->

        <div class="form-actions">
            <input type="submit" value="Sign In" class="btn btn-primary btn-block btn-lg">
        </div> <!-- / .form-actions -->
    </form>
    <!-- / Form -->




@endsection
