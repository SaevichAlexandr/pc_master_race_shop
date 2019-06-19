@extends('layouts.layout')

@section('main_section')
    <div class="register-photo" style="background-color: rgb(254,254,254);">
        <div class="form-container">
            <form method="post" action="{{route('buying')}}">
                <h2 class="text-center"><strong>Email for sending</strong></h2>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                <input type="hidden" name="game_id" value="{{$game_id}}">
                <div class="form-group"><button class="btn btn-primary btn-block border rounded border-dark" type="submit" style="background-color: rgb(255,168,0);">Next</button></div>
                {{csrf_field()}}
            </form>
        </div>
    </div>
@endsection
