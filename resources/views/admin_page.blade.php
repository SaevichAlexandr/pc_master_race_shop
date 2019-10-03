@extends('layouts.layout')

    @section('main_section')

        <div style="margin-bottom: 16px; margin-top: 16px">
            <p style="margin-left: 20px">Welcome!</p>
            <p style="margin-left: 20px">You at the admin page</p>
            <p style="margin-left: 20px">Please, choose that table that you need</p>
            <p style="margin-left: 20px">(Put one of buttons below)</p>
            {{--<button id="users_table" class="btn btn-primary" type="button" style="margin-left: 21px;">Users Table</button>--}}
            {{--<button id="orders_table" class="btn btn-primary" type="button" style="margin-left: 30px;">Orders Table</button>--}}
            {{--<button id="games_table" class="btn btn-primary" type="button" style="margin-left: 29px;">Games Table</button>--}}
            <a class="btn btn-primary border rounded border-dark" role="button" href="{{ 'http://pc.master.race.shop/users_table' }}" style="margin-left: 29px;">Users table</a>
            <a class="btn btn-primary border rounded border-dark" role="button" href="{{ 'http://pc.master.race.shop/orders_table' }}" style="margin-left: 29px;">Orders table</a>
            <a class="btn btn-primary border rounded border-dark" role="button" href="{{ 'http://pc.master.race.shop/games_table' }}" style="margin-left: 29px;">Games table</a>
        </div>
    @endsection
