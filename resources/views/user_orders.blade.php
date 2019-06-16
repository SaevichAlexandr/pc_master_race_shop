@extends('layouts.layout')

@section('main_section')
    <div id="empresa" style="padding:20px;margin:1px;">
        <div class="container" style="margin-top: 50px;">
            <div class="row">
                <div class="col-sm-6 col-md-5 col-lg-5"><img src="../assets/img/dark_souls_3.jpg"></div>
                <div class="col-sm-6 col-md-7 col-lg-7">
                    <h1>Dark Souls 3</h1>
                    <p>Platform: PC</p>
                    <p>Release date: 12.04.2019</p>
                    <p>Publisher: Bandai Namco</p>
                    <p>Developer: From Software</p>
                    <p>Price: 60$</p><a class="btn btn-primary" role="button" href="gameinfo.blade.php" style="background-color: rgb(232,182,2);width: 127px;">Game info</a></div>
            </div>
        </div>
    </div>
@endsection
