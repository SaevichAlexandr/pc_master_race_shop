@extends('layouts.layout')

@section('main_section')
    <div class="carousel slide" data-ride="carousel" id="carousel-1">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item">
                <div class="jumbotron hero-nature carousel-hero" style="background-image: url(&quot;../resources/../resources/assets/img/master_race_2.jpg&quot;);">
                    <h1 class="hero-title">What gaming platform is best?</h1>
                    <p class="hero-subtitle">It`s pretty easy to learn<br>Of course it is PC</p>
                    <p><a class="btn btn-primary btn-lg border rounded border-dark hero-button" role="button" href="https://www.youtube.com/watch?v=oHg5SJYRHA0" style="filter: invert(0%);background-color: rgb(255,138,0);">Learn more</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="jumbotron hero-nature carousel-hero" style="background-image: url(&quot;../resources/../resources/assets/img/doom.jpg&quot;);background-position: 70% 30%">
                    <h1 class="hero-title">What gaming platform is best?</h1>
                    <p class="hero-subtitle">It`s pretty easy to learn<br>Of course it is PC</p>
                    <p><a class="btn btn-primary btn-lg border rounded border-dark hero-button" role="button" href="#" style="filter: invert(0%);background-color: rgb(255,138,0);">Learn more</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="jumbotron hero-nature carousel-hero" style="background-image: url(&quot;../resources/assets/img/dark_souls.jpg&quot;); background-position: 70% 30%">
                    <h1 class="hero-title">What gaming platform is best?</h1>
                    <p class="hero-subtitle">It`s pretty easy to learn<br>Of course it is PC</p>
                    <p><a class="btn btn-primary btn-lg border rounded border-dark hero-button" role="button" href="#" style="filter: invert(0%);background-color: rgb(255,138,0);">Learn more</a></p>
                </div>
            </div>
            <div class="carousel-item active">
                <div class="jumbotron hero-nature carousel-hero" style="background-image: url(&quot;../resources/assets/img/the_witcher.jpg&quot;); background-position: 85% 15%">
                    <h1 class="hero-title">What gaming platform is best?</h1>
                    <p class="hero-subtitle">It`s pretty easy to learn<br>Of course it is PC</p>
                    <p><a class="btn btn-primary btn-lg border rounded border-dark hero-button" role="button" href="#" style="filter: invert(0%);background-color: rgb(255,138,0);">Learn more</a></p>
                </div>
            </div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><i class="fa fa-chevron-left"></i><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><i class="fa fa-chevron-right"></i><span class="sr-only">Next</span></a></div>
        <ol
            class="carousel-indicators">
            <li data-target="#carousel-1" data-slide-to="0"></li>
            <li data-target="#carousel-1" data-slide-to="1"></li>
            <li data-target="#carousel-1" data-slide-to="2"></li>
            <li data-target="#carousel-1" data-slide-to="3" class="active"></li>
        </ol>
    </div>

    <ul class="nav nav-justified d-xl-flex justify-content-center" style="margin-top: 25px;background-color: transparent;height: 40px;margin-bottom: 25px;">
        <li class="nav-item border rounded border-dark d-table-row" style="width: 150px;background-color: rgb(255,153,0);height: 42px;"><a class="nav-link" href="#" style="color: rgb(255,255,255);">New</a></li>
        <li class="nav-item border rounded border-dark" style="width: 150px;background-color: rgb(255,153,0);height: 42px;"><a class="nav-link" href="#" style="color: rgb(251,251,251);">Best-sellers</a></li>
        <li class="nav-item border rounded border-dark" style="width: 150px;background-color: rgb(255,153,0);height: 42px;"><a class="nav-link" href="#" style="color: rgb(255,255,255);height: 40px;">Pre-orders</a></li>
    </ul>

    <section>
        <div class="container" style="margin-top: 20px;margin-bottom: 20px;">
            <div class="row justify-content-around">
                @foreach($games as $game)
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
