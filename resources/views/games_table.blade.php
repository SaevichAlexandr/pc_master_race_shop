
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
                <th>name</th>
                <th>password</th>
                <th>is_admin</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Lupa</td>
                <td>Pupa</td>
                <td>passwordpassword</td>
                <td>0</td>
                <td>
                    <form>
                        {{--Добавить валуева с помощью блейдов--}}
                        <input class="row_id" type="hidden" value="">
                        <button class="btn btn-primary" type="button" style="margin-left: -8px;" data-toggle="modal" data-target="#update">Update</button>
                        <button class="btn btn-primary" type="button" style="margin-left: 8px;" data-toggle="modal" data-target="#delete">Delete</button>
                    </form>
                </td>
            </tr>
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
                        <input class="table_name" type="hidden" value="users">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input id="email" class="form-control" type="text" placeholder="example@mail.com">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input id="password" class="form-control" type="text" placeholder="12344321">
                        </div>
                        <div class="form-group">
                            <label for="is_admin">Is_admin:</label>
                            <input id="is_admin" class="form-control" type="number" placeholder="0 or 1">
                        </div>
                        <button class="btn btn-light" type="button" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary" type="button">Save</button>
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
                        {{--Добавить id ряда через блейд?--}}
                        <input class="row_id" type="hidden" value="row_id">
                        <input class="table_name" type="hidden" value="users">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input id="email" class="form-control" type="text" value="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input id="password" class="form-control" type="text" value="password">
                        </div>
                        <div class="form-group">
                            <label for="is_admin">Is_admin:</label>
                            <input id="is_admin" class="form-control" type="number" value="1">
                        </div>
                        <button class="btn btn-light" type="button" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary" type="button">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{--Удаление записи--}}
    <div id="delete" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Deleting</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <p>Do you really want to delete this row?</p>
                    <form method="POST" action="/delete_row">
                        {{--Добавить значения каки-то образом--}}
                        <input class="row_id" type="hidden" value="row_id">
                        <input class="table_name" type="hidden" value="users">
                        <button class="btn btn-light" type="button" data-dismiss="modal">No</button>
                        <button class="btn btn-primary" type="button">Yes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
