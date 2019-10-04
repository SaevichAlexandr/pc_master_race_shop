$(document).ready(function() {
    $('#create_row_button').on('click', function () {

        let email = $('#email_create').prop('value');
        let password = $('#password_create').prop('value');
        let is_admin =$('#is_admin_create').prop('value');
        let _token = $(this).siblings('#token_create').prop('value');

        if (email && password && (is_admin == 0 || is_admin == 1) && _token) {
            $.ajax({
                type: 'POST',
                url: '/create_row',
                dataType: 'json',
                data: "email=" + email + "&password=" + password + "&is_admin=" + is_admin + "&table_name=users" + "&_token=" + _token,
                success: function (response) {
                    //php метод вернёт 0 если мыло повторяется, потому обрабатываем этот случай
                    if (response) {
                        let html =
                            `
                             <tr class="table_row">
                                <td class="table_id custom-size">${response['id']}</td>
                                <td class="table_email custom-size">${response['email']}</td>
                                <td class="table_is_admin custom-size">${response['is_admin']}</td>
                                <td class="form_parent">
                                    <form class="form_class">
                                        <input class="token_delete" type="hidden" value="${_token}">
                                        <input class="row_id" type="hidden" value="${response['id']}">
                                        <input class="row_email" type="hidden" value="${response['email']}">
                                        <input class="row_is_admin" type="hidden" value="${response['is_admin']}">
                                        <button class="update_row btn btn-primary" type="button" style="margin-left: -8px;" data-toggle="modal" data-target="#update">Update</button>
                                        <button class="delete_row btn btn-primary" type="button" style="margin-left: 8px;" data-toggle="modal" data-target="#delete">Delete</button>
                                    </form>
                                </td>
                            </tr>
                             `;
                        $('#tbody').append(html);
                    } else {
                        alert("Запись с таким email уже существует!");
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
        $('#email_update').val($(this).siblings('.row_email').val());
        $('#is_admin_update').val($(this).siblings('.row_is_admin').val());
    });

    // Отправка изменённых данных на сервер для записи в БД и изменение значений в таблице
    $(document).on('click', '#update_row_button', function () {
        let id = $('#id_update').prop('value');
        let email = $('#email_update').prop('value');
        let is_admin = $('#is_admin_update').prop('value');
        let _token = $('#token_update').prop('value');

        // находим объект html где хранится id равный id в форме модального окна
        let row_id_obj = $('.row_id[value='+ id +']');
        // теперь можно найти объекты, в которые нужно занести уже изменённые данные
        // для корректного их отображения в будущем
        let row_email_obj = row_id_obj.siblings('.row_email');
        let row_is_admin_obj = row_id_obj.siblings('.row_is_admin');

        let table_email_obj = row_id_obj.parents('.form_parent').siblings('.table_email');
        let table_is_admin_obj = row_id_obj.parents('.form_parent').siblings('.table_is_admin');

        // ajax метод для вставки данных в БД
        if (email && is_admin && (is_admin == 0 || is_admin == 1) && _token) {
            $.ajax({
                type: 'POST',
                url: '/update_row',
                dataType: 'json',
                data: `id=${id}&email=${email}&is_admin=${is_admin}&table_name=users&_token=${_token}`,
                success: function (response) {
                    if (response) {
                        // подстановка новых значений в таблицу админки
                        table_email_obj.html(response['email']);
                        table_is_admin_obj.html(response['is_admin']);
                        row_email_obj.val(response['email']);
                        row_is_admin_obj.val(response['is_admin']);
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

    $(document).on('click', '.delete_row', function () {
        let id_value = $(this).siblings('.row_id').prop('value');
        let _token = $(this).siblings('.token_delete').prop('value');
        let table_row = $(this).parents('.table_row');

        $.ajax({
            type: 'POST',
            url: '/delete_row',
            dataType: 'json',
            data: "id=" + id_value + "&table_name=users&_token=" + _token,
            success: function (response) {
                // обработка проверки на попытку удаления администратора
                if (response) {
                    table_row.remove();
                } else {
                    alert("Нельзя удалять пользователей, являющихся администраторами!");
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert('Ошибка: ' + textStatus + ' | ' + errorThrown);
            }
        });
    });
});

