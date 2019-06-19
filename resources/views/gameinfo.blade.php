    @extends('layouts.layout')



    @section('main_section')
    <div id="empresa" style="padding:20px;margin:1px;">
        <div class="container" style="margin-top: 50px;">
            <div class="row">
                <div class="col-sm-6 col-md-5 col-lg-5"><img src="{{'../resources/assets/img/'.$gameInfo->image_name}}"></div>
                <div class="col-sm-6 col-md-7 col-lg-7">
                    <h1>{{ $gameInfo->name }}</h1>
                    <p>Platform: {{ $gameInfo->platform }}</p>
                    <p>Release date: {{ $gameInfo->release_date }}</p>
                    <p>Publisher: {{ $gameInfo->publisher }}</p>
                    <p>Developer: {{ $gameInfo->developer }}</p>
                    <p>Price: {{ $gameInfo->price }}</p>
                    <form method="POST" action="{{route('send_game_id')}}">
                        <input type="hidden" name="game_id" value="{{$gameInfo->id}}">
                        <button class="btn btn-primary" type="submit" style="background-color: rgb(232,182,2);width: 127px;">Buy</button>
                        {{csrf_field()}}
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="empresa" style="padding:20px;margin:1px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-7 col-lg-7">
                    <h1>Description:</h1>
                    <p>{{ $gameInfo->description_ru }}</p>
                </div>
                <div class="col">
                    <h1>System requirements:</h1>
                    <p>{{ $gameInfo->system_requirements }}</p>
                </div>
            </div>
        </div>
    </div>
   @endsection

