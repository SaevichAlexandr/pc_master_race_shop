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
            alert('Одно из полей не заполнено!');
        }
    });

    // слушаем кнопки update
    $(document).on('click', '.update_row', function () {
        // данные из строки таблицы подставляемые в модальное окно
        // let id_value = $(this).siblings('.row_id').prop('value');
        // let email_value = $(this).siblings('.row_email').prop('value');
        // let password_value = $(this).siblings('.row_password').prop('value');
        // let is_admin_value = $(this).siblings('.row_is_admin').prop('value');

        // объекты инпутов в которых лежат данные для модального окна
        let id_obj = $(this).siblings('.row_id');
        let email_obj = $(this).siblings('.row_email');
        // let password_obj = $(this).siblings('.row_password');
        let is_admin_obj = $(this).siblings('.row_is_admin');

        //TODO: нужно из переменных выше сделать объекты и запихивать в них после выполнения изменений новые данные

        // объекты для вставки в таблицу изменённых значений
        let table_id = $(this).parents('.form_parent').siblings('.table_id');
        let table_email = $(this).parents('.form_parent').siblings('.table_email');
        let table_is_admin = $(this).parents('.form_parent').siblings('.table_is_admin');

        // подстановка данных из строки в модальное окно
        $('#id_update').val(id_obj.val());
        $('#email_update').val(email_obj.val());
        // $('#password_update').val(password_obj.val());
        $('#is_admin_update').val(is_admin_obj.val());

        // console.log($(this).parents('.form_parent').siblings('.table_id').html());
        console.log(table_id.html());
        console.log(table_email.html());
        // активируем отправку по нажатию на кнопку save
        $('#update_row_button').on('click', function () {
            let id = $('#id_update').prop('value');
            let email = $('#email_update').prop('value');
            // let password = $('#password_update').prop('value');
            let is_admin = $('#is_admin_update').prop('value');
            let _token = $('#token_update').val();

            // ajax метод для вставки данных в БД
            $.ajax({
                type: 'POST',
                url:'/update_row',
                dataType: 'json',
                data: `id=${id}&email=${email}&is_admin=${is_admin}&table_name=users&_token=${_token}`,
                success: function (response) {
                    if (response) {
                        // подстановка новых значений в таблицу админки
                        table_email.html(response['email']);
                        table_is_admin.html(response['is_admin']);

                        // подставляем данные в форму, пивязанную к строке таблицы
                        email_obj.val(response['email']);
                        is_admin_obj.val(response['is_admin']);
                    } else {
                        alert("При изменении данных произошла ошибка!");
                    }
                }
            });
        });
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
            }
        });
    });
});

