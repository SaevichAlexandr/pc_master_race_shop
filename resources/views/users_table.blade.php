
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
                <th>id</th>
                <th>email</th>
{{--                <th>password</th>--}}
                <th>is_admin</th>
            </tr>
            </thead>
            <tbody id="tbody">
            @foreach($users as $user)
                <tr class="table_row">
                    <td class="table_id custom-size">{{ $user->id }}</td>
                    <td class="table_email custom-size">{{ $user->email }}</td>
{{--                    <td>{{ $user->password }}</td>--}}
                    <td class="table_is_admin custom-size">${{ $user->is_admin }}</td>
                    <td class="form_parent">
                        <form class="form_class">
                            <input class="token_delete" type="hidden" value="{{csrf_token()}}">
                            <input class="row_id" type="hidden" value="{{ $user->id }}">
                            <input class="row_email" type="hidden" value="{{ $user->email }}">
{{--                            <input class="row_password" type="hidden" value="{{ $user->password }}">--}}
                            <input class="row_is_admin" type="hidden" value="{{ $user->is_admin }}">
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
                    {{--Для примера тут будет форма для добавления пользователя--}}
                    {{--Для каждой таблицы нужно будет через JS добавлять свою форму--}}
                    <form action="/create_row" method="POST">
                        <input id="token_create" type="hidden" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input id="email_create" class="form-control" type="text" placeholder="example@mail.com">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input id="password_create" class="form-control" type="text" placeholder="12344321">
                        </div>
                        <div class="form-group">
                            <label for="is_admin">Is_admin:</label>
                            <input id="is_admin_create" class="form-control" type="text" placeholder="0 or 1">
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
                    {{--Сюда будем бахать данные из бд в value--}}
                    <form action="/update_row" method="POST">
                        <input id="id_update" type="hidden" value="{{ $user->id}}">
                        <input id="token_update" type="hidden" value="{{csrf_token()}}">
                        <input class="row_id" type="hidden" value="row_id">
                        <input class="table_name" type="hidden" value="users">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input id="email_update" class="form-control" type="text" value="">
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label for="password">Password:</label>--}}
{{--                            <input id="password_update" class="form-control" type="text" value="">--}}
{{--                        </div>--}}
                        <div class="form-group">
                            <label for="is_admin">Is_admin:</label>
                            <input id="is_admin_update" class="form-control" type="number" value="">
                        </div>
                        <button class="btn btn-light" type="button" data-dismiss="modal">Close</button>
                        <button id="update_row_button" class="btn btn-primary" type="button">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="../resources/assets/js/user_table_script.js"></script>
@endsection
