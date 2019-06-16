@section('header')
    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Kursach_design (first_ver)</title>
    <link rel="stylesheet" href="../resources/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../resources/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../resources/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo+Black">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="../resources/assets/css/Bold-BS4-Cards-with-Hover-Effect-115-1.css">
    <link rel="stylesheet" href="../resources/assets/css/Bold-BS4-Cards-with-Hover-Effect-115.css">
    <link rel="stylesheet" href="../resources/assets/css/Card-Group1-Shadow.css">
    <link rel="stylesheet" href="../resources/assets/css/Carousel-Hero.css">
    <link rel="stylesheet" href="../resources/assets/css/Dark-NavBar-1.css">
    <link rel="stylesheet" href="../resources/assets/css/Dark-NavBar.css">
    <link rel="stylesheet" href="../resources/assets/css/dh-row-text-image-right.css">
    <link rel="stylesheet" href="../resources/assets/css/dh-row-titile-text-image-right-1.css">
    <link rel="stylesheet" href="../resources/assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="../resources/assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="../resources/assets/css/Pretty-Search-Form.css">
    <link rel="stylesheet" href="../resources/assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="../resources/assets/css/Header---Apple.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="../resources/assets/css/Model-Cards-1.css">
    <link rel="stylesheet" href="../resources/assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="../resources/assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="../resources/assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="../resources/assets/css/styles.css">
</head>
<body style="padding: 0px;padding-top: 0px;">
<div>
    <nav class="navbar navbar-light navbar-expand-md" style="padding-right: 25px;padding-left: 25px;padding-top: 10px;padding-bottom: 10px;">
        <div class="container-fluid"><a class="navbar-brand" href="/"><img src="../../resources/assets/img/navbar_logo.png" style="width: 256px;"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav d-xl-flex mr-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/purchasing">Purchasing</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/warranty">Warranty</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/contacts">Contacts</a></li>
                </ul>
                <ul class="nav navbar-nav d-xl-flex ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/user_orders"><i class="fa fa-shopping-cart"></i>&nbsp;User orders</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/registration"><i class="fa fa-user"></i>&nbsp;Registration</a></li>
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
<ul class="nav nav-pills nav-fill text-primary border rounded-0 shadow-sm sticky-top" style="background-size: 0;">
    <li class="nav-item border rounded-0"><a class="nav-link text-primary text-secondary" href="/catalog">Games catalog</a></li>
    <li class="nav-item border rounded-0"><a class="nav-link text-primary text-secondary" href="/new_games">New</a></li>
    <li class="nav-item border rounded-0"><a class="nav-link text-primary text-secondary" href="/bestsellers">Best-sellers</a></li>
    <li class="nav-item border rounded-0"><a class="nav-link text-primary text-secondary" href="/preorders">Pre-orders</a></li>
</ul>
@show

@section('main_section')
<h1>ZARABOTAI PZHLST</h1>
@show

@section('footer')
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
                            <li><a href="/purchasing">Purchasing</a></li>
                            <li><a href="/warranty">Warranty</a></li>
                            <li><a href="/contacts">Contacts</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>PC Master Race Shop</h3>
                        <p>We are here to give all our customers best buying expirience.<br>Our shop - right choice if you want to buy games without headache.<br>We hope you will enjoy our services and come again!</p>
                    </div>
                    <div class="col item social"><a href="https://vk.com/id157824880">vk</a><a href="https://www.youtube.com/watch?v=Rj4pT-6RPIs"><i class="icon ion-social-facebook"></i></a></div>
                </div>
                <p class="copyright">PC Master Race Shop © 2019</p>
            </div>
        </footer>
    </div>
    <script src="../resources/assets/js/jquery.min.js"></script>
    <script src="../resources/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../resources/assets/js/bs-animation.js"></script>
</body>
</html>
@show
