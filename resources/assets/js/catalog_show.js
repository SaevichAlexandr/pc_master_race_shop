$(document).ready(function () {
    var number = 6;
    var sort_by = "none";

    $.ajax({
        type: 'GET',
        url: '/show_catalog',
        data: 'number=' + number + '&sort_by=' + sort_by,
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

    $('#showMore').on('click', function () {
        number += 6;
        $.ajax({
            type: 'GET',
            url: '/show_catalog',
            dataType:'json',
            data: 'number=' + number + '&sort_by=' + sort_by,
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
    });

    $('#popularity_down').on('click', function () {
        sort_by = "popularity_down";
        loadGames(sort_by);
    });

    $('#popularity_up').on('click', function () {
        sort_by = "popularity_up";
        loadGames(sort_by);
    });

    $('#date_down').on('click', function () {
        sort_by = "date_down";
        loadGames(sort_by);
    });

    $('#date_up').on('click', function () {
        sort_by = "date_up";
        loadGames(sort_by);
    });

    $('#price_down').on('click', function () {
        sort_by = "price_down";
        loadGames(sort_by);
    });

    $('#price_up').on('click', function () {
        sort_by = "price_up";
        loadGames(sort_by);
    });

    $('#alphabet_down').on('click', function () {
        sort_by = "alphabet_down";
        loadGames(sort_by);
    });

    $('#alphabet_up').on('click', function () {
        sort_by = "alphabet_up";
        loadGames(sort_by);
    });

    function loadGames(sort_by) {
        $.ajax({
            type: 'GET',
            url: '/show_catalog',
            data: 'number=' + number + '&sort_by=' + sort_by,
            success: function(response) {
                $('#row').empty();
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
    }

});
