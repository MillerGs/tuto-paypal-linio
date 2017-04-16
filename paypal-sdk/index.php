<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- Temporary navbar container fix -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    /* Temporary fix for img-fluid sizing within the carousel */
    
    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }
    </style>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <a class="navbar-brand" href="#">Start Bootstrap</a>
            <div class="collapse navbar-collapse" id="navbarExample">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="http://www.millergomez.com/" target="_blank">Web Site <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.youtube.com/channel/UCbyz-TC_RnH_wNp_IGBxtpw/videos?sort=dd&view=0&shelf_id=0" target="_blank">YouTube</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.facebook.com/BlogMillerGomez/" target="_blank">Facebook</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.linkedin.com/in/millergomez/" target="_blank">Linkedin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div id="shop" class="row">

            <div class="col-lg-3">

                <h1 class="my-4">Shop Name</h1>
                <div class="list-group">
                    <a href="#" class="list-group-item">Category 1</a>
                    <a href="#" class="list-group-item">Category 2</a>
                    <a href="#" class="list-group-item">Category 3</a>
                </div>

            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">

                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top img-fluid" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-block">
                                <h4 class="card-title"><a href="#">Item One</a></h4>
                                <h5>$4.99</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                                <button class="btn btn-xs btn-success" 
                                        data-product="Item One"
                                        data-price="4.99"
                                        data-sku="sku01">
                                    <i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
                                    &nbsp;Add</button>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top img-fluid" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-block">
                                <h4 class="card-title"><a href="#">Item Two</a></h4>
                                <h5>$2.83</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                                <button class="btn btn-xs btn-success" 
                                        data-product="Item Two"
                                        data-price="2.83"
                                        data-sku="sku02">
                                    <i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
                                    &nbsp;Add</button>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top img-fluid" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-block">
                                <h4 class="card-title"><a href="#">Item Three</a></h4>
                                <h5>$3.99</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                                <button class="btn btn-xs btn-success" 
                                        data-product="Item Three"
                                        data-price="3.99"
                                        data-sku="sku03">
                                    <i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
                                    &nbsp;Add</button>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top img-fluid" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-block">
                                <h4 class="card-title"><a href="#">Item Four</a></h4>
                                <h5>$24.99</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                                <button class="btn btn-xs btn-success" 
                                        data-product="Item Four"
                                        data-price="24.99"
                                        data-sku="sku04">
                                    <i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
                                    &nbsp;Add</button>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top img-fluid" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-block">
                                <h4 class="card-title"><a href="#">Item Five</a></h4>
                                <h5>$13</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                                <button class="btn btn-xs btn-success" 
                                        data-product="Item Five"
                                        data-price="13"
                                        data-sku="sku05">
                                    <i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
                                    &nbsp;Add</button>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top img-fluid" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-block">
                                <h4 class="card-title"><a href="#">Item Six</a></h4>
                                <h5>$4.80</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                                <button class="btn btn-xs btn-success" 
                                        data-product="Item Six"
                                        data-price="4.80"
                                        data-sku="sku06">
                                    <i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
                                    &nbsp;Add</button>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

        <div id="cart" style="display: none; margin-bottom: 600px;" class="row">
            <div class="col-sm-12" style="padding-top: 25px; padding-bottom: 25px;">
                <button id="btnShop" type="button" class="btn btn-warning btn-xs">Seguir comprando</button>
            </div>
            <div id="table-products" class="col-sm-12">
                  
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-8"></div>
                    <div class="col-sm-1">Total</div>
                    <div id="total" class="col-sm-1"></div>
                    <div class="col-sm-2"></div>
                </div>
                <div class="row">
                    <div class="col-sm-8"></div>
                    <div class="col-sm-4">
                        <button id="btnPagar" type="button" class="btn btn-info btn-xs">Pagar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-inverse">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="paypal.js" type="text/javascript"></script>
</body>

</html>
