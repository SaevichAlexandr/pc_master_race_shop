
@extends('layouts.layout')

@section('main_section')
    <div class="container-fluid d-flex flex-column justify-content-center align-items-center flex-sm-row flex-md-row flex-lg-row flex-xl-row" style="margin-top: 41px;margin-bottom: 42px;">
        <h4 style="padding-right: 0px;margin-left: 24px;margin-right: 4px;margin-bottom: 0px;">Sort by:</h4>
        <div class="dropdown" style="width: 120px;"><button class="btn btn-primary dropdown-toggle border rounded border-dark" data-toggle="dropdown" aria-expanded="false" type="button" style="background-color: rgb(255,153,0);width: 120px;">Date</button>
            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Up&nbsp;<i class="fa fa-long-arrow-up"></i></a><a class="dropdown-item" role="presentation" href="#">Down&nbsp;<i class="fa fa-long-arrow-down"></i></a></div>
        </div>
        <div class="dropdown"><button class="btn btn-primary dropdown-toggle border rounded border-dark" data-toggle="dropdown" aria-expanded="false" type="button" style="background-color: rgb(255,153,0);width: 120px;">Price</button>
            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Up&nbsp;<i class="fa fa-long-arrow-up"></i></a><a class="dropdown-item" role="presentation" href="#">Down&nbsp;<i class="fa fa-long-arrow-down"></i></a></div>
        </div>
        <div class="dropdown"><button class="btn btn-primary dropdown-toggle border rounded border-dark" data-toggle="dropdown" aria-expanded="false" type="button" style="background-color: rgb(255,153,0);width: 120px;">Alphabet</button>
            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Up&nbsp;<i class="fa fa-long-arrow-up"></i></a><a class="dropdown-item" role="presentation" href="#">Down&nbsp;<i class="fa fa-long-arrow-down"></i></a></div>
        </div>
        <div class="dropdown"><button class="btn btn-primary dropdown-toggle border rounded border-dark" data-toggle="dropdown" aria-expanded="false" type="button" style="background-color: rgb(255,153,0);width: 120px;">Popularity</button>
            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Up&nbsp;<i class="fa fa-long-arrow-up"></i></a><a class="dropdown-item" role="presentation" href="#">Down&nbsp;<i class="fa fa-long-arrow-down"></i>&nbsp;</a></div>
        </div>
    </div>
    <section>
        <div class="container" style="margin-top: 20px;margin-bottom: 20px;">
            <div class="row justify-content-around">
                <div class="col-auto col-sm-6 col-md-auto col-lg-auto col-xs-5" style="background-size: cover;background-position: top;height: 362px;">
                    <div class="card d-inline-block mb-4 box-shadow rounded-0" style="height: 350px;width: 264px;">
                        <div class="card-body" data-bs-hover-animate="pulse" style="background-size: cover;background-position: top;height: 350px;background-image: url(&quot;assets/img/pubg.jpg&quot;);"><a class="btn btn-primary border rounded border-dark" role="button" href="#" data-bs-hover-animate="pulse" style="width: 224px;margin-top: 273px;background-color: rgb(255,153,0);">60$</a></div>
                    </div>
                </div>
                <div class="col-auto col-sm-6 col-md-auto col-lg-auto col-xs-5" style="background-size: cover;background-position: top;height: 362px;">
                    <div class="card d-inline-block mb-4 box-shadow rounded-0" style="height: 350px;width: 264px;">
                        <div class="card-body" data-bs-hover-animate="pulse" style="background-size: cover;background-position: top;height: 350px;background-image: url(&quot;assets/img/rainbow_six.jpg&quot;);"><a class="btn btn-primary border rounded border-dark" role="button" href="#" data-bs-hover-animate="pulse" style="width: 224px;margin-top: 273px;background-color: rgb(255,153,0);">60$</a></div>
                    </div>
                </div>
                <div class="col-auto col-sm-6 col-md-auto col-lg-auto col-xs-5" style="background-size: cover;background-position: top;height: 362px;">
                    <div class="card d-inline-block mb-4 box-shadow rounded-0" style="height: 350px;width: 264px;">
                        <div class="card-body" data-bs-hover-animate="pulse" style="background-size: cover;background-position: top;height: 350px;background-image: url(&quot;assets/img/gta_5.jpg&quot;);"><a class="btn btn-primary border rounded border-dark" role="button" href="#" data-bs-hover-animate="pulse" style="width: 224px;margin-top: 273px;background-color: rgb(255,153,0);">60$</a></div>
                    </div>
                </div>
                <div class="col-auto col-sm-6 col-md-auto col-lg-auto col-xs-5" style="background-size: cover;background-position: top;height: 362px;">
                    <div class="card d-inline-block mb-4 box-shadow rounded-0" style="height: 350px;width: 264px;">
                        <div class="card-body" data-bs-hover-animate="pulse" style="background-size: cover;background-position: top;height: 350px;background-image: url(&quot;assets/img/dark_souls_3.jpg&quot;);"><a class="btn btn-primary border rounded border-dark" role="button" href="#" data-bs-hover-animate="pulse" style="width: 224px;margin-top: 273px;background-color: rgb(255,153,0);">60$</a></div>
                    </div>
                </div>
                <div class="col-auto col-sm-6 col-md-auto col-lg-auto col-xs-5" style="background-size: cover;background-position: top;height: 362px;">
                    <div class="card d-inline-block mb-4 box-shadow rounded-0" style="height: 350px;width: 264px;">
                        <div class="card-body" data-bs-hover-animate="pulse" style="background-size: cover;background-position: top;height: 350px;background-image: url(&quot;assets/img/doom-1.jpg&quot;);"><a class="btn btn-primary border rounded border-dark" role="button" href="#" data-bs-hover-animate="pulse" style="width: 224px;margin-top: 273px;background-color: rgb(255,153,0);">60$</a></div>
                    </div>
                </div>
                <div class="col-auto col-sm-6 col-md-auto col-lg-auto col-xs-5" style="background-size: cover;background-position: top;height: 362px;">
                    <div class="card d-inline-block mb-4 box-shadow rounded-0" style="height: 350px;width: 264px;">
                        <div class="card-body" data-bs-hover-animate="pulse" style="background-size: cover;background-position: top;height: 350px;background-image: url(&quot;assets/img/nier.jpg&quot;);"><a class="btn btn-primary border rounded border-dark" role="button" href="#" data-bs-hover-animate="pulse" style="width: 224px;margin-top: 273px;background-color: rgb(255,153,0);">60$</a></div>
                    </div>
                </div>
                <div class="col-auto col-sm-6 col-md-auto col-lg-auto col-xs-5" style="background-size: cover;background-position: top;height: 362px;">
                    <div class="card d-inline-block mb-4 box-shadow rounded-0" style="height: 350px;width: 264px;">
                        <div class="card-body" data-bs-hover-animate="pulse" style="background-size: cover;background-position: top;height: 350px;background-image: url(&quot;assets/img/witcher.jpg&quot;);"><a class="btn btn-primary border rounded border-dark" role="button" href="#" data-bs-hover-animate="pulse" style="width: 224px;margin-top: 273px;background-color: rgb(255,153,0);">60$</a></div>
                    </div>
                </div>
                <div class="col-auto col-sm-6 col-md-auto col-lg-auto col-xs-5" style="background-size: cover;background-position: top;height: 362px;">
                    <div class="card d-inline-block mb-4 box-shadow rounded-0" style="height: 350px;width: 264px;">
                        <div class="card-body" data-bs-hover-animate="pulse" style="background-size: cover;background-position: top;height: 350px;background-image: url(&quot;assets/img/ni_no_kuni.jpg&quot;);"><a class="btn btn-primary border rounded border-dark" role="button" href="#" data-bs-hover-animate="pulse" style="width: 224px;margin-top: 273px;background-color: rgb(255,153,0);">60$</a></div>
                    </div>
                </div>
                <div class="col-auto col-sm-6 col-md-auto col-lg-auto col-xs-5" style="background-size: cover;background-position: top;height: 362px;">
                    <div class="card d-inline-block mb-4 box-shadow rounded-0" style="height: 350px;width: 264px;">
                        <div class="card-body border rounded border-dark" data-bs-hover-animate="pulse" style="background-size: cover;background-position: top;height: 350px;background-image: url(&quot;assets/img/resident_evil_2.jpg&quot;);"><a class="btn btn-primary" role="button" href="#" data-bs-hover-animate="pulse" style="width: 224px;margin-top: 273px;background-color: rgb(255,153,0);">60$</a></div>
                    </div>
                </div>
                <div class="col-auto col-sm-6 col-md-auto col-lg-auto col-xs-5" style="background-size: cover;background-position: top;height: 362px;">
                    <div class="card d-inline-block mb-4 box-shadow rounded-0" style="height: 350px;width: 264px;">
                        <div class="card-body" data-bs-hover-animate="pulse" style="background-size: cover;background-position: top;height: 350px;background-image: url(&quot;assets/img/kingdom_come_deliverance.jpg&quot;);"><a class="btn btn-primary border rounded border-dark" role="button" href="#" data-bs-hover-animate="pulse" style="width: 224px;margin-top: 273px;background-color: rgb(255,153,0);">60$</a></div>
                    </div>
                </div>
                <div class="col-auto col-sm-6 col-md-auto col-lg-auto col-xs-5" style="background-size: cover;background-position: top;height: 362px;">
                    <div class="card d-inline-block mb-4 box-shadow rounded-0" style="height: 350px;width: 264px;">
                        <div class="card-body" data-bs-hover-animate="pulse" style="background-size: cover;background-position: top;height: 350px;background-image: url(&quot;assets/img/final_fantasy.jpg&quot;);"><a class="btn btn-primary border rounded border-dark" role="button" href="#" data-bs-hover-animate="pulse" style="width: 224px;margin-top: 273px;background-color: rgb(255,153,0);">60$</a></div>
                    </div>
                </div>
                <div class="col-auto col-sm-6 col-md-auto col-lg-auto col-xs-5" style="background-size: cover;background-position: top;height: 362px;">
                    <div class="card d-inline-block mb-4 box-shadow rounded-0" style="height: 350px;width: 264px;">
                        <div class="card-body" data-bs-hover-animate="pulse" style="background-size: cover;background-position: top;height: 350px;background-image: url(&quot;assets/img/resident_evil_revelations.jpg&quot;);"><a class="btn btn-primary border rounded border-dark" role="button" href="#" data-bs-hover-animate="pulse" style="width: 224px;margin-top: 273px;background-color: rgb(255,153,0);">60$</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  @endsection

<?php
    // TODO: Реализовать перебор по параметрам и что-то типо пагинации
