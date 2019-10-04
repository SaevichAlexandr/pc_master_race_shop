
@extends('layouts.layout')

@section('main_section')
    <div style="margin-bottom: 16px; margin-top: 16px">
        <a class="btn btn-primary border rounded border-dark" role="button" href="{{ 'http://pc.master.race.shop/users_table' }}" style="margin-left: 29px;">Users table</a>
        <a class="btn btn-primary border rounded border-dark" role="button" href="{{ 'http://pc.master.race.shop/orders_table' }}" style="margin-left: 29px;">Orders table</a>
        <a class="btn btn-primary border rounded border-dark" role="button" href="{{ 'http://pc.master.race.shop/games_table' }}" style="margin-left: 29px;">Games table</a>
    </div>
    <div style="margin-bottom: 19px;"><button class="btn btn-primary" type="button" style="margin-left: 21px;" data-toggle="modal" data-target="#create">Create New Row</button></div>
    <div class="datagrid">
        <table class="table">
            <thead>
            <tr>
                <th class="custom-size">id</th>
                <th class="custom-size">user_id</th>
                <th class="custom-size">game_id</th>
                <th class="custom-size">email_to_send</th>
                <th class="custom-size">created_at</th>
                <th class="custom-size">updated_at</th>
            </tr>
            </thead>
            <tbody id="tbody">
            @foreach($orders as $order)
                <tr class="table_row">
                    <td class="table_id custom-size">{{ $order->id }}</td>
                    <td class="table_user_id custom-size">{{ $order->user_id }}</td>
                    <td class="table_game_id custom-size">${{ $order->game_id }}</td>
                    <td class="table_email_to_send custom-size">{{ $order->email_to_send }}</td>
                    <td class="table_created_at custom-size">{{ $order->created_at }}</td>
                    <td class="table_updated_at custom-size">${{ $order->updated_at }}</td>
                    <td class="form_parent">
                        <form class="form_class">
                            <input class="token_delete" type="hidden" value="{{csrf_token()}}">
                            <input class="row_id" type="hidden" value="{{ $order->id }}">
                            <input class="row_user_id" type="hidden" value="{{ $order->user_id }}">
                            <input class="row_game_id" type="hidden" value="{{ $order->game_id }}">
                            <input class="row_email_to_send" type="hidden" value="{{ $order->email_to_send }}">
                            <input class="row_created_at" type="hidden" value="{{ $order->created_at }}">
                            <input class="row_updated_at" type="hidden" value="{{ $order->updated_at }}">
                            <button class="update_row btn btn-primary" type="button" style="margin-left: -8px;" data-toggle="modal" data-target="#update">Update</button>
                            <button class="delete_row btn btn-primary" type="button" style="margin-left: 8px;" data-toggle="modal" data-target="#delete">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr></tr>
            </tfoot>
        </table>
    </div>
    {{--Тут идут модальные окна--}}

    {{--Добавление записи--}}
    <div id="create" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Create new row</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div id="create_row" class="modal-body">
                    <form>
                        <input id="token_create" type="hidden" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label for="user_id_create">User_id:</label>
                            <input id="user_id_create" class="form-control" type="text" placeholder="123">
                        </div>
                        <div class="form-group">
                            <label for="game_id_create">Game_id:</label>
                            <input id="game_id_create" class="form-control" type="text" placeholder="123">
                        </div>
                        <div class="form-group">
                            <label for="email_to_send_create">Email_to_send:</label>
                            <input id="email_to_send_create" class="form-control" type="text" placeholder="example@mail.com">
                        </div>
                        <button class="btn btn-light" type="button" data-dismiss="modal">Close</button>
                        <button id="create_row_button" class="btn btn-primary" type="button">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{--Обновление записи--}}
    <div id="update" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update row</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <form>
                        <input id="id_update" type="hidden" value="">
                        <input id="token_update" type="hidden" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label for="user_id_update">User_id:</label>
                            <input id="user_id_update" class="form-control" type="text" value="">
                        </div>
                        <div class="form-group">
                            <label for="game_id_update">Game_id:</label>
                            <input id="game_id_update" class="form-control" type="text" value="">
                        </div>
                        <div class="form-group">
                            <label for="email_to_send_update">Email_to_send:</label>
                            <input id="email_to_send_update" class="form-control" type="email" value="">
                        </div>
                        <button class="btn btn-light" type="button" data-dismiss="modal">Close</button>
                        <button id="update_row_button" class="btn btn-primary" type="button">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="../resources/assets/js/order_table_script.js"></script>
@endsection
