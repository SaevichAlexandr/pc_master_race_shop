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
                    <p>Price: {{ $gameInfo->price }}</p><button class="btn btn-primary" type="button" style="background-color: rgb(232,182,2);width: 127px;">Buy</button></div>
            </div>
        </div>
    </div>
    <div id="empresa" style="padding:20px;margin:1px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-7 col-lg-7">
                    <h1>Description:</h1>
                    <p>{{ $gameInfo->description_ru }}</p>
                    {{--<p><br>Set in the&nbsp;Kingdom of Lothric,&nbsp;the player is tasked to survive an oncoming apocalypse brought about by the ongoing conflict between the age of fire and those branded--}}
                        {{--with the Dark Sign as with previous iterations of the series. To survive this event the player character must face the&nbsp;Lords of Cinder, previous heroes who linked--}}
                        {{--the fire, as the cycle of Light and Dark continues and no matter what you do, darkness will return and repeat itself forever.<br><br></p>--}}
                </div>
                <div class="col">
                    <h1>System requirements:</h1>
                    <p>{{ $gameInfo->system_requirements }}</p>
                    {{--<p><br>ОС:&nbsp;Windows 8.1, Windows 8, Windows 7 (SP1) (64-разрядная)<br>Процессор:&nbsp;Intel Core 2 Q6600 @ 2.40 ГГц / AMD Phenom 9850 @ 2.5 ГГц<br>Оперативная память:&nbsp;4 ГБ ОЗУ<br>Видеокарта:&nbsp;NVIDIA 9800 GT, 1 ГБ / AMD HD--}}
                        {{--4870, 1 ГБ<br>Место на диске:&nbsp;72 ГБ<br><br><br></p>--}}
                </div>
            </div>
        </div>
    </div>
   @endsection

