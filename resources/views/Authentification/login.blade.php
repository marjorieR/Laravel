@extends('layout_logout')

@section('title') Authentification  @endsection




@section('content')


    <form action="" method="post" id="signin-form_id" class="panel" novalidate="novalidate">
        <div class="form-group">
            <input type="text" name="email" id="username_id" class="form-control input-lg" placeholder="Username or email">
        </div> <!-- / Username -->

        <div class="form-group signin-password">
            <input type="password" name="password" id="password_id" class="form-control input-lg" placeholder="Password">
            <a href="#" class="forgot">Forgot?</a>
        </div> <!-- / Password -->

        <div class="form-actions">
            <input type="submit" value="Sign In" class="btn btn-primary btn-block btn-lg">
        </div> <!-- / .form-actions -->

        {{ csrf_field() }}
    </form>
    <!-- / Form -->




@endsection
