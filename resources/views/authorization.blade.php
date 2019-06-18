    @extends('layouts.layout')

    @section('main_section')
        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{$error}}</p>
            @endforeach
        @endif
    <div class="register-photo" style="background-color: rgb(254,254,254);">
        <div class="form-container">
            <form method="post" action="{{route('custom.login')}}">
                {{csrf_field()}}
                <h2 class="text-center"><strong>Log in</strong></h2>
                <div class="form-group"><input class="form-control" type="email" name="email" value="{{old('email')}}" placeholder="Email"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                <div class="form-group"><button class="btn btn-primary btn-block border rounded border-dark" type="submit" style="background-color: rgb(255,168,0);">Ready, steady, go!</button></div><a href="{{route('custom.register')}}" class="already">Don`t have an account? Registrate here.</a></form>
        </div>
    </div>
    @endsection
