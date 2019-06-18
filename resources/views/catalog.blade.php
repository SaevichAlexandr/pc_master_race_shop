
@extends('layouts.layout')

@section('main_section')

    <div class="container-fluid d-flex flex-column justify-content-center align-items-center flex-sm-row flex-md-row flex-lg-row flex-xl-row" style="margin-top: 41px;margin-bottom: 42px;">
        <h4 style="padding-right: 0px;margin-left: 24px;margin-right: 4px;margin-bottom: 0px;">Sort by:</h4>
        <div class="dropdown" style="width: 120px;"><button class="btn btn-primary dropdown-toggle border rounded border-dark" data-toggle="dropdown" aria-expanded="false" type="button" style="background-color: rgb(255,153,0);width: 120px;">Date</button>
            <div class="dropdown-menu" role="menu"><a id="date_up" class="dropdown-item" role="presentation" >Up&nbsp;<i class="fa fa-long-arrow-up"></i></a><a id="date_down" class="dropdown-item" role="presentation" >Down&nbsp;<i class="fa fa-long-arrow-down"></i></a></div>
        </div>
        <div class="dropdown"><button class="btn btn-primary dropdown-toggle border rounded border-dark" data-toggle="dropdown" aria-expanded="false" type="button" style="background-color: rgb(255,153,0);width: 120px;">Price</button>
            <div class="dropdown-menu" role="menu"><a id="price_up" class="dropdown-item" role="presentation" >Up&nbsp;<i class="fa fa-long-arrow-up"></i></a><a id="price_down" class="dropdown-item" role="presentation" >Down&nbsp;<i class="fa fa-long-arrow-down"></i></a></div>
        </div>
        <div class="dropdown"><button class="btn btn-primary dropdown-toggle border rounded border-dark" data-toggle="dropdown" aria-expanded="false" type="button" style="background-color: rgb(255,153,0);width: 120px;">Alphabet</button>
            <div class="dropdown-menu" role="menu"><a id="alphabet_up" class="dropdown-item" role="presentation" >Up&nbsp;<i class="fa fa-long-arrow-up"></i></a><a id="alphabet_down" class="dropdown-item" role="presentation" >Down&nbsp;<i class="fa fa-long-arrow-down"></i></a></div>
        </div>
        <div class="dropdown"><button class="btn btn-primary dropdown-toggle border rounded border-dark" data-toggle="dropdown" aria-expanded="false" type="button" style="background-color: rgb(255,153,0);width: 120px;">Popularity</button>
            <div class="dropdown-menu" role="menu"><a id="popularity_up" class="dropdown-item" role="presentation" >Up <i class="fa fa-long-arrow-up"></i></a><a id="popularity_down" class="dropdown-item" role="presentation" >Down&nbsp;<i class="fa fa-long-arrow-down"></i>&nbsp;</a></div>
        </div>
    </div>
    <section>
        <div class="container" style="margin-top: 20px;margin-bottom: 20px;">
            <div id="row" class="row justify-content-around">
                <script type="text/javascript" src="../resources/assets/js/catalog_show.js"></script>
            </div>
        </div>
    </section>
    <div class="container d-flex justify-content-center align-items-center align-content-center" style="height: 49px;margin-bottom: 22px;">
        <a id="showMore" class="btn btn-primary border rounded border-dark" role="button" style="background-color: rgb(255,153,0);width: 390px;">Show more</a>
    </div>
  @endsection


