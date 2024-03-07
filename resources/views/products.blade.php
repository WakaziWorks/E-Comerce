<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Wakazi Works</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <!--<link href="css/styles.css" rel="stylesheet" />-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

        <!-- CSS files loading here -->
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
        @extends('partials.header')
        <section class="product-section">
            <!-- <div class="nav-button">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Popular</button>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">New Arrivals</button>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Top Sale</button>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Price</button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Low to High</a></li>
                        <li><a class="dropdown-item" href="#">High to Low</a></li>
                    </ul>
                </div>
            </div> -->
            <!-- <div class="products">
                <div class="container text-center">
                    <div class="row row-props">
                        <div class="prod-col">
                            <img class="app-badge" src="https://images-na.ssl-images-amazon.com/images/I/61JFpu%2BtA7L._AC_SL1200_.jpg" alt="..." />
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <p>
                                <b>Kshs. 900.00</b>
                            </p>
                        </div>
                        <div class="prod-col">
                            <img class="app-badge" src="https://images-na.ssl-images-amazon.com/images/I/61JFpu%2BtA7L._AC_SL1200_.jpg" alt="..." />
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <p>
                                <b>Kshs. 900.00</b>
                            </p>
                        </div>
                        <div class="prod-col">
                            <img class="app-badge" src="https://images-na.ssl-images-amazon.com/images/I/61JFpu%2BtA7L._AC_SL1200_.jpg" alt="..." />
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <p>
                                <b>Kshs. 900.00</b>
                            </p>
                        </div>
                        <div class="prod-col">
                            <img class="app-badge" src="https://images-na.ssl-images-amazon.com/images/I/61JFpu%2BtA7L._AC_SL1200_.jpg" alt="..." />
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <p>
                                <b>Kshs. 900.00</b>
                            </p>
                        </div>
                    </div>
                    <div class="row row-props">
                        <div class="prod-col">
                            <img class="app-badge" src="https://images-na.ssl-images-amazon.com/images/I/61JFpu%2BtA7L._AC_SL1200_.jpg" alt="..." />
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <p>
                                <b>Kshs. 900.00</b>
                            </p>
                        </div>
                        <div class="prod-col">
                            <img class="app-badge" src="https://images-na.ssl-images-amazon.com/images/I/61JFpu%2BtA7L._AC_SL1200_.jpg" alt="..." />
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <p>
                                <b>Kshs. 900.00</b>
                            </p>
                        </div>
                        <div class="prod-col">
                            <img class="app-badge" src="https://images-na.ssl-images-amazon.com/images/I/61JFpu%2BtA7L._AC_SL1200_.jpg" alt="..." />
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <p>
                                <b>Kshs. 900.00</b>
                            </p>
                        </div>
                        <div class="prod-col">
                            <img class="app-badge" src="https://images-na.ssl-images-amazon.com/images/I/61JFpu%2BtA7L._AC_SL1200_.jpg" alt="..." />
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <p>
                                <b>Kshs. 900.00</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div> -->
        </section>
        @extends('partials.footer')
    </body>
</html>