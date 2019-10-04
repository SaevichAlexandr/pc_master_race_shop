
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
                <th class="custom-size">platform</th>
                <th class="custom-size">price</th>
                <th class="custom-size">release_date</th>
                <th class="custom-size">developer</th>
                <th class="custom-size">publisher</th>
                <th class="custom-size">name</th>
                <th class="custom-size">system_requirements</th>
                <th class="custom-size">description_ru</th>
                <th class="custom-size">sold_keys</th>
                <th class="custom-size">is_preorder</th>
                <th class="custom-size">image_name</th>
            </tr>
            </thead>
            <tbody id="tbody">
            @foreach($games as $game)
                <tr>
                    <td class="table_id custom-size">{{ $game->id }}</td>
                    <td class="table_platform custom-size">{{ $game->platform }}</td>
                    <td class="table_price custom-size">{{ $game->price }}</td>
                    <td class="table_release_date custom-size">{{ $game->release_date }}</td>
                    <td class="table_developer custom-size">{{ $game->developer }}</td>
                    <td class="table_publisher custom-size">{{ $game->publisher }}</td>
                    <td class="table_name custom-size">{{ $game->name }}</td>
                    <td class="table_system_requirements custom-size">{{ $game->system_requirements }}</td>
                    <td class="table_description_ru custom-size">{{ $game->description_ru }}</td>
                    <td class="table_sold_keys custom-size">{{ $game->sold_keys }}</td>
                    <td class="table_is_preorder custom-size">{{ $game->is_preorder }}</td>
                    <td class="table_image_name custom-size">{{ $game->image_name }}</td>
                    <td class="form_parent">
                        <form class="form_class">
                            <input class="token_delete" type="hidden" value="{{csrf_token()}}">
                            <input class="row_id" type="hidden" value="{{ $game->id }}">
                            <input class="row_platform" type="hidden" value="{{ $game->platform }}">
                            <input class="row_price" type="hidden" value="{{ $game->price }}">
                            <input class="release_date" type="hidden" value="{{ $game->release_date }}">
                            <input class="row_developer" type="hidden" value="{{ $game->developer }}">
                            <input class="row_publisher" type="hidden" value="{{ $game->publisher }}">
                            <input class="row_name" type="hidden" value="{{ $game->name }}">
                            <input class="row_system_requirements" type="hidden" value="{{ $game->system_requirements }}">
                            <input class="row_description_ru" type="hidden" value="{{ $game->description_ru }}">
                            <input class="row_sold_keys" type="hidden" value="{{ $game->sold_keys }}">
                            <input class="row_is_preorder" type="hidden" value="{{ $game->is_preorder }}">
                            <input class="row_image_name" type="hidden" value="{{ $game->image_name }}">
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
                            <label for="platform_create">Platform:</label>
                            <input id="platform_create" class="form-control" type="text" placeholder="PC">
                        </div>
                        <div class="form-group">
                            <label for="price_create">Price:</label>
                            <input id="price_create" class="form-control" type="text" placeholder="60">
                        </div>
                        <div class="form-group">
                            <label for="release_date_create">Release_date:</label>
                            <input id="release_date_create" class="form-control" type="text" placeholder="01.01.2011">
                        </div>
                        <div class="form-group">
                            <label for="developer_create">Developer:</label>
                            <input id="developer_create" class="form-control" type="text" placeholder="Blizzard">
                        </div>
                        <input class="table_name" type="hidden" value="users">
                        <div class="form-group">
                            <label for="publisher_create">Publisher:</label>
                            <input id="publisher_create" class="form-control" type="text" placeholder="Activision">
                        </div>
                        <div class="form-group">
                            <label for="name_create">Name:</label>
                            <input id="name_create" class="form-control" type="text" placeholder="Overwatch">
                        </div>
                        <div class="form-group">
                            <label for="system_requirements_create">System_requirements:</label>
                            <input id="system_requirements_create" class="form-control" type="text" placeholder="Windows 7-10...">
                        </div>
                        <div class="form-group">
                            <label for="description_ru_create">Description_ru:</label>
                            <input id="description_ru_create" class="form-control" type="text" placeholder="Good game">
                        </div>
                        <div class="form-group">
                            <label for="sold_keys_create">Sold_keys:</label>
                            <input id="sold_keys_create" class="form-control" type="text" placeholder="9000">
                        </div>
                        <div class="form-group">
                            <label for="is_preorder_create">Is_preorder:</label>
                            <input id="is_preorder_create" class="form-control" type="text" placeholder="0 or 1">
                        </div>
                        <div class="form-group">
                            <label for="image_name_create">Image_name:</label>
                            <input id="image_name_create" class="form-control" type="text" placeholder="image.jpg">
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
                            <label for="platform_update">Platform:</label>
                            <input id="platform_update" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label for="price_update">Price:</label>
                            <input id="price_update" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label for="release_date_update">Release_date:</label>
                            <input id="release_date_update" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label for="developer_update">Developer:</label>
                            <input id="developer_update" class="form-control" type="text">
                        </div>
                        <input class="table_name" type="hidden" value="users">
                        <div class="form-group">
                            <label for="publisher_update">Publisher:</label>
                            <input id="publisher_update" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label for="name_update">Name:</label>
                            <input id="name_update" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label for="system_requirements_update">System_requirements:</label>
                            <input id="system_requirements_update" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label for="description_ru_update">Description_ru:</label>
                            <input id="description_ru_update" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label for="sold_keys_update">Sold_keys:</label>
                            <input id="sold_keys_update" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label for="is_preorder_update">Is_preorder:</label>
                            <input id="is_preorder_update" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label for="image_name_update">Image_name:</label>
                            <input id="image_name_update" class="form-control" type="text">
                        </div>
                        <button class="btn btn-light" type="button" data-dismiss="modal">Close</button>
                        <button id="update_row_button" class="btn btn-primary" type="button">Save</button>
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
