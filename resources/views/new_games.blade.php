@extends('layouts.layout')

@section('main_section')
    <section>
        <div class="container" style="margin-top: 20px;margin-bottom: 20px;">
            <div class="row justify-content-around">
                @foreach($new_games as $game)
                    <div class="col-auto col-sm-6 col-md-auto col-lg-auto col-xs-5" style="background-size: cover;background-position: top;height: 362px;">
                        <div class="card d-inline-block mb-4 box-shadow rounded-0" style="height: 350px;width: 264px;">
                            <div class="card-body" data-bs-hover-animate="pulse" style="background-size: cover;background-position: top;height: 350px;background-image: url(&quot;../resources/assets/img/{{$game->image_name}}&quot;);"><a class="btn btn-primary border rounded border-dark" role="button" href="{{ 'http://pc.master.race.shop/gameinfo/'.$game->id }}" data-bs-hover-animate="pulse" style="width: 224px;margin-top: 273px;background-color: rgb(255,153,0);">{{ $game->price }}</a></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

<?php
    //TODO: Добавить метод сортирующий по самым новым играм
    ?>
