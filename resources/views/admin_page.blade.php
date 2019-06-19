<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Kursach_design (first_ver)</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo+Black">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Cards-with-Hover-Effect-115-1.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Cards-with-Hover-Effect-115.css">
    <link rel="stylesheet" href="assets/css/Card-Group1-Shadow.css">
    <link rel="stylesheet" href="assets/css/Carousel-Hero.css">
    <link rel="stylesheet" href="assets/css/Dark-NavBar-1.css">
    <link rel="stylesheet" href="assets/css/Dark-NavBar.css">
    <link rel="stylesheet" href="assets/css/Data-Table-1.css">
    <link rel="stylesheet" href="assets/css/Data-Table.css">
    <link rel="stylesheet" href="assets/css/dh-row-text-image-right.css">
    <link rel="stylesheet" href="assets/css/dh-row-titile-text-image-right-1.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Header---Apple.css">
    <link rel="stylesheet" href="assets/css/Pretty-Search-Form.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Model-Cards-1.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/Pretty-Table-1.css">
    <link rel="stylesheet" href="assets/css/Pretty-Table.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md" style="padding-right: 25px;padding-left: 25px;padding-top: 10px;padding-bottom: 10px;">
            <div class="container-fluid"><a class="navbar-brand" href="index.html"><img src="assets/img/navbar_logo.png" style="width: 256px;"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav d-xl-flex mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="purchasing.html">Purchasing</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="waranty.html">Warranty</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="contacts.html">Contacts</a></li>
                    </ul>
                    <ul class="nav navbar-nav d-xl-flex ml-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="basket.html"><i class="fa fa-shopping-cart"></i>&nbsp;Basket</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="registration.html"><i class="fa fa-user"></i>&nbsp;Registration</a></li>
                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Currency</a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">RUB</a><a class="dropdown-item" role="presentation" href="#">EUR</a><a class="dropdown-item" role="presentation" href="#">USD</a></div>
                        </li>
                    </ul>
            </div>
    </div>
    </nav>
    <form class="search-form" style="margin-top: -4px;">
        <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-search"></i></span></div><input class="form-control" type="text" placeholder="I am looking for..">
            <div class="input-group-append"><button class="btn btn-light" type="submit">Search </button></div>
        </div>
    </form>
    </div>
    <div style="margin-bottom: 16px;"><button class="btn btn-primary" type="button" style="margin-left: 21px;">Users Table</button><button class="btn btn-primary" type="button" style="margin-left: 30px;">Orders Table</button><button class="btn btn-primary" type="button" style="margin-left: 29px;">Games Table</button></div>
    <div
        style="margin-bottom: 19px;"><button class="btn btn-primary" type="button" style="margin-left: 21px;">Create New Row</button></div>
        <div class="datagrid">
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Cell 1</td>
                        <td>Cell 2</td>
                        <td><button class="btn btn-primary" type="button" style="margin-left: -8px;">Update</button><button class="btn btn-primary" type="button" style="margin-left: 8px;">Delete</button></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr></tr>
                </tfoot>
            </table>
        </div>
        <div class="footer-dark" style="height: 302px;padding-top: 0px;padding-bottom: 0px;">
            <footer style="padding: 66px;margin-top: -4px;padding-right: 75px;padding-bottom: 31px;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 item">
                            <h3>Safety</h3>
                            <ul>
                                <li>All keys are getting from<br>legal sources.<br>Piracy is`nt good, remember that<br>:)</li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 item">
                            <h3>About</h3>
                            <ul>
                                <li><a href="purchasing.html">Purchasing</a></li>
                                <li><a href="waranty.html">Warranty</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 item text">
                            <h3>PC Master Race Shop</h3>
                            <p>We are here to give all our customers best buying expirience.<br>Our shop - right choice if you want to buy games without headache.<br>We hope you will enjoy our services and come again!</p>
                        </div>
                        <div class="col item social"><a href="#">vk</a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
                    </div>
                    <p class="copyright">PC Master Race Shop © 2019</p>
                </div>
            </footer>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
        <script src="assets/js/bs-animation.js"></script>
</body>

</html>