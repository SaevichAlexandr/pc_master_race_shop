$(document).ready(function() {
    // создание новой записи в таблице
    $('#create_row_button').on('click', function () {
        let user_id = $('#user_id_create').prop('value');
        let game_id = $('#game_id_create').prop('value');
        let email_to_send = $('#email_to_send_create').prop('value');
        let _token = $(this).siblings('#token_create').prop('value');

        if (user_id && game_id && email_to_send) {
            $.ajax({
                type: 'POST',
                url: '/create_row',
                dataType: 'json',
                data: "user_id=" + user_id + "&game_id=" + game_id + "&email_to_send=" + email_to_send + "&table_name=orders&_token=" + _token,
                success: function (response) {
                    //php метод вернёт 0 если мыло повторяется, потому обрабатываем этот случай
                    if (response) {
                        let html =
                            ` <tr>
                            <td class="table_id custom-size">${response['id']}</td>
                            <td class="table_user_id custom-size">${response['user_id']}</td>
                            <td class="table_game_id custom-size">${response['game_id']}</td>
                            <td class="table_email_to_send custom-size">${response['email_to_send']}</td>
                            <td class="table_created_at custom-size">${response['created_at']}</td>
                            <td class="table_updated_at custom-size">${response['updated_at']}</td>
                            <td class="form_parent">
                                <form class="form_class">
                                    <input class="token_delete" type="hidden" value="${_token}">
                                    <input class="row_id" type="hidden" value="${response['id']}">
                                    <input class="row_user_id" type="hidden" value="${response['user_id']}">
                                    <input class="row_game_id" type="hidden" value="${response['game_id']}">
                                    <input class="row_email_to_send" type="hidden" value="${response['email_to_send']}">
                                    <input class="row_created_at" type="hidden" value="${response['created_at']}">
                                    <input class="row_updated_at" type="hidden" value="${response['updated_at']}">
                                    <button class="update_row btn btn-primary" type="button" style="margin-left: -8px;" data-toggle="modal" data-target="#update">Update</button>
                                    <button class="delete_row btn btn-primary" type="button" style="margin-left: 8px;" data-toggle="modal" data-target="#delete">Delete</button>
                                </form>
                            </td>
                        </tr>`;
                        $('#tbody').append(html);
                    } else {
                        alert("Ошибка записи в БД!");
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert('Ошибка: ' + textStatus + ' | ' + errorThrown);
                }
            });
        } else {
            alert('Одно из полей не заполнено либо заполнено неверно!');
        }
    });

    // Добавление данных в форму модального окна для изменения записи в таблице
    $(document).on('click', '.update_row', function () {
        // подстановка данных из строки в модальное окно
        $('#id_update').val($(this).siblings('.row_id').val());
        $('#user_id_update').val($(this).siblings('.row_user_id').val());
        $('#game_id_update').val($(this).siblings('.row_game_id').val());
        $('#email_to_send_update').val($(this).siblings('.row_email_to_send').val());
        console.log($('#email_to_send_update').val());
    });

    // Отправка изменённых данных на сервер для записи в БД и изменение значений в таблице
    $('#update_row_button').on('click', function () {
        let id = $('#id_update').prop('value');
        let user_id = $('#user_id_update').prop('value');
        let game_id = $('#game_id_update').prop('value');
        let email_to_send = $('#email_to_send_update').prop('value');
        let _token = $('#token_update').prop('value');

        // находим объект html где хранится id равный id в форме модального окна
        let row_id_obj = $('.row_id[value='+ id +']');
        // теперь можно найти объекты, в которые нужно занести уже изменённые данные
        // для корректного их отображения в будущем
        let row_user_id_obj = row_id_obj.siblings('.row_user_id');
        let row_game_id_obj = row_id_obj.siblings('.row_game_id');
        let row_email_to_send_obj = row_id_obj.siblings('.row_email_to_send');

        let table_user_id_obj = row_id_obj.parents('.form_parent').siblings('.table_user_id');
        let table_game_id_obj = row_id_obj.parents('.form_parent').siblings('.table_game_id');
        let table_email_to_send_obj = row_id_obj.parents('.form_parent').siblings('.table_email_to_send');

        // ajax метод для вставки данных в БД
        if (user_id && game_id && email_to_send && _token) {
            $.ajax({
                type: 'POST',
                url: '/update_row',
                dataType: 'json',
                data: `id=${id}&user_id=${user_id}&game_id=${game_id}&email_to_send=${email_to_send}&table_name=orders&_token=${_token}`,
                success: function (response) {
                    if (response) {
                        // подстановка новых значений в таблицу админки
                        table_user_id_obj.html(response['user_id']);
                        table_game_id_obj.html(response['game_id']);
                        table_email_to_send_obj.html(response['email_to_send']);
                        row_user_id_obj.val(response['user_id']);
                        row_game_id_obj.val(response['game_id']);
                        row_email_to_send_obj.val(response['email_to_send']);
                    } else {
                        alert("При изменении данных произошла ошибка!");
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert('Ошибка: ' + textStatus + ' | ' + errorThrown);
                }
            });
        } else {
            alert('Одно из полей не заполнено либо заполнено неверно!');
        }
    });

    // удаление записи в таблице
    $('.delete_row').on('click', function () {
        let id_value = $(this).siblings('.row_id').prop('value');
        let _token = $(this).siblings('.token_delete').prop('value');
        let table_row = $(this).parents('.table_row');

        $.ajax({
            type: 'POST',
            url: '/delete_row',
            dataType: 'json',
            data: "id=" + id_value + "&table_name=orders&_token=" + _token,
            success: function () {
                table_row.remove();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert('Ошибка: ' + textStatus + ' | ' + errorThrown);
            }
        });
    });
});
