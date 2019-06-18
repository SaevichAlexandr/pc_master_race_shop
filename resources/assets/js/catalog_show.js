$(document).ready(function () {
    var number = 6;

    $.ajax({
        type: 'GET',
        url: '/test',
        data: 'number=' + number,
        success: function(response) {
            var html = "";
            for (var i = 0; i < response.length; i++) {
                html += '<div class="col-auto col-sm-6 col-md-auto col-lg-auto col-xs-5" style="background-size: cover;background-position: top;height: 362px;">\n' +
                    '                                        <div class="card d-inline-block mb-4 box-shadow rounded-0" style="height: 350px;width: 264px;">\n' +
                    '                                        <div class="card-body" data-bs-hover-animate="pulse" style="background-size: cover;background-position: top;height: 350px;background-image: url(&quot;../resources/assets/img/' +
                    response[i].image_name + '&quot;);"><a class="btn btn-primary border rounded border-dark" role="button" href="http://pc.master.race.shop/gameinfo/' + response[i].id + '" data-bs-hover-animate="pulse" style="width: 224px;margin-top: 273px;background-color: rgb(255,153,0);">' + response[i].price + '</a></div>\n' +
                    '                                    </div>\n' +
                    '                                    </div>'
            }
            $('#row').html(html);
        }
    });
    number += 6;

    $('#showMore').on('click', function () {
        $.ajax({
            type: 'GET',
            url: '/test',
            data: 'number=' + number,
            success: function(response) {
                var html = "";
                for (var i = 0; i < response.length; i++) {
                    html += '<div class="col-auto col-sm-6 col-md-auto col-lg-auto col-xs-5" style="background-size: cover;background-position: top;height: 362px;">\n' +
                        '                                        <div class="card d-inline-block mb-4 box-shadow rounded-0" style="height: 350px;width: 264px;">\n' +
                        '                                        <div class="card-body" data-bs-hover-animate="pulse" style="background-size: cover;background-position: top;height: 350px;background-image: url(&quot;../resources/assets/img/' +
                        response[i].image_name + '&quot;);"><a class="btn btn-primary border rounded border-dark" role="button" href="http://pc.master.race.shop/gameinfo/' + response[i].id + '" data-bs-hover-animate="pulse" style="width: 224px;margin-top: 273px;background-color: rgb(255,153,0);">' + response[i].price + '</a></div>\n' +
                        '                                    </div>\n' +
                        '                                    </div>'
                }
                $('#row').html(html);
            }
        });
        number += 6;
    });
})
