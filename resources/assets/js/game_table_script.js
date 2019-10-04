$(document).ready(function() {
    $('#create_row_button').on('click', function () {
        let platform = $('#platform_create').prop('value');
        let price = $('#price_create').prop('value');
        let release_date = $('#release_date_create').prop('value');
        let developer = $('#developer_create').prop('value');
        let publisher = $('#publisher_create').prop('value');
        let name = $('#name_create').prop('value');
        let system_requirements = $('#system_requirements_create').prop('value');
        let description_ru = $('#description_ru_create').prop('value');
        let sold_keys = $('#sold_keys_create').prop('value');
        let is_preorder = $('#is_preorder_create').prop('value');
        let image_name = $('#image_name_create').prop('value');
        let _token = $(this).siblings('#token_create').prop('value');

        if (platform && price && release_date && developer && publisher && name && system_requirements
             && description_ru && sold_keys && is_preorder && image_name) {
            $.ajax({
                type: 'POST',
                url: '/create_row',
                dataType: 'json',
                data: `platform=${platform}&price=${price}&release_date=${release_date}&developer=${developer}
                       &publisher=${publisher}&name=${name}&system_requirements=${system_requirements}&description_ru=${description_ru}
                       &sold_keys=${sold_keys}&is_preorder=${is_preorder}&image_name=${image_name}&table_name=games&_token=${_token}`,
                success: function (response) {
                    if (response) {
                        let html =
                            `<tr class="table_row">
                                <td class="table_id custom-size">${response['id']}</td>
                                <td class="table_platform custom-size">${response['platform']}</td>
                                <td class="table_price custom-size">${response['price']}</td>
                                <td class="table_release_date custom-size">${response['release_date']}</td>
                                <td class="table_developer custom-size">${response['developer']}</td>
                                <td class="table_publisher custom-size">${response['publisher']}</td>
                                <td class="table_name custom-size">${response['name']}</td>
                                <td class="table_system_requirements custom-size">${response['system_requirements']}</td>
                                <td class="table_description_ru custom-size">${response['description_ru']}</td>
                                <td class="table_sold_keys custom-size">${response['sold_keys']}</td>
                                <td class="table_is_preorder custom-size">${response['is_preorder']}</td>
                                <td class="table_image_name custom-size">${response['image_name']}</td>
                                <td class="form_parent">
                                    <form class="form_class">
                                        <input class="token_delete" type="hidden" value="${_token}">
                                        <input class="row_id" type="hidden" value="${response['id']}">
                                        <input class="row_platform" type="hidden" value="${response['platform']}">
                                        <input class="row_price" type="hidden" value="${response['price']}">
                                        <input class="release_date" type="hidden" value="${response['release_date']}">
                                        <input class="row_developer" type="hidden" value="${response['developer']}">
                                        <input class="row_publisher" type="hidden" value="${response['publisher']}">
                                        <input class="row_name" type="hidden" value="${response['name']}">
                                        <input class="row_system_requirements" type="hidden" value="${response['system_requirements']}">
                                        <input class="row_description_ru" type="hidden" value="${response['description_ru']}">
                                        <input class="row_sold_keys" type="hidden" value="${response['sold_keys']}">
                                        <input class="row_is_preorder" type="hidden" value="${response['is_preorder']}">
                                        <input class="row_image_name" type="hidden" value="${response['image_name']}">
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


    $(document).on('click', '.delete_row', function () {
        let id_value = $(this).siblings('.row_id').prop('value');
        let _token = $(this).siblings('.token_delete').prop('value');
        let table_row = $(this).parents('.table_row');

        $.ajax({
            type: 'POST',
            url: '/delete_row',
            dataType: 'json',
            data: "id=" + id_value + "&table_name=games&_token=" + _token,
            success: function (response) {
                // обработка проверки на попытку удаления администратора
                    table_row.remove();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert('Ошибка: ' + textStatus + ' | ' + errorThrown);
            }
        });
    });
});
