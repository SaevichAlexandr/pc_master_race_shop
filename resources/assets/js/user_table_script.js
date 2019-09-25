// $(document).ready(function () {

    $('#create_row_button').on('click', function () {

        var email = $('#email_create').prop('value');
        var password = $('#password_create').prop('value');
        var is_admin =$('#is_admin_create').prop('value');
        var _token = $(this).siblings('#token_create').prop('value');



        if (email && password && (is_admin == 0 || is_admin == 1) && _token) {
            $.ajax({
                type: 'POST',
                url: '/create_row',
                dataType: 'json',
                data: "email=" + email + "&password=" + password + "&is_admin=" + is_admin + "&table_name=users" + "&_token=" + _token,
                success: function (response) {
                        var html = " <tr class='table_row'>\n" +
                            "                    <td>" + response['id'] + "</td>\n" +
                            "                    <td>" + response['email'] + "</td>\n" +
                            "                    <td>" + response['password'] + "</td>\n" +
                            "                    <td>" + response['is_admin'] + "</td>\n" +
                            "                    <td>\n" +
                            "                        <form>\n" +
                            "<input class=\"token_delete\" type=\"hidden\" value=\"" + _token + "\">" +
                            "                            <input class=\"row_id\" type=\"hidden\" value=\"" + response['id'] + "\">\n" +
                            "                            <button class=\"update_row btn btn-primary\" type=\"button\" style=\"margin-left: -8px;\" data-toggle=\"modal\" data-target=\"#update\">Update</button>\n" +
                            "                            <button class=\"delete_row btn btn-primary\" type=\"button\" style=\"margin-left: 8px;\" data-toggle=\"modal\" data-target=\"#delete\">Delete</button>\n" +
                            "                        </form>\n" +
                            "                    </td>\n" +
                            "                </tr>";
                        $('#tbody').append(html);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert('Ошибка: ' + textStatus + ' | ' + errorThrown);
                }
            });
        } else {
            alert('Одно из полей не заполнено!');
        }
    });
// });

// Не знаю почему но $(document).on('click', '.delete_row', function () - работает
//а $('.delete_row').on('click', function () - нет, если пробовать на добавленном через аякс элементе
$(document).on('click', '.delete_row', function () {
    var id_value = $(this).siblings('.row_id').prop('value');
    var _token = $(this).siblings('.token_delete').prop('value');
    var table_row = $(this).parents('.table_row');

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
                alert("Нельзя удалять администраторов!");
            }
        }
    });
});
