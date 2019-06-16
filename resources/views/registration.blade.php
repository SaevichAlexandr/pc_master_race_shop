@extends('layouts.layout')

@section('main_section')
    <div class="register-photo" style="background-color: rgb(254,254,254);">
        <div class="form-container">
            <div class="image-holder" style="background-image: url(/resources/assets/img/master_race_good.png);background-size: cover;background-position: center;"></div>
            <form method="post">
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                <div class="form-group"><input class="form-control" type="password" name="password-repeat" placeholder="Password (repeat)"></div>
                <div class="form-group"><button class="btn btn-primary btn-block border rounded border-dark" type="submit" style="background-color: rgb(255,168,0);">Sign Up</button></div><a href="/authorization" class="already">You already have an account? Login here.</a></form>
        </div>
    </div>
@endsection
