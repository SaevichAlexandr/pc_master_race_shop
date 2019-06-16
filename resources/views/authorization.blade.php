    @extends('layouts.layout')

    @section('main_section')
    <div class="register-photo" style="background-color: rgb(254,254,254);">
        <div class="form-container">
            <form method="post">
                <h2 class="text-center"><strong>Log in</strong></h2>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                <div class="form-group"><button class="btn btn-primary btn-block border rounded border-dark" type="submit" style="background-color: rgb(255,168,0);">Ready, steady, go!</button></div><a href="#" class="already">Don`t have an account? Registrate here.</a></form>
        </div>
    </div>
    @endsection
