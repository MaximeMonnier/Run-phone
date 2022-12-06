<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
        content="IE=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
    <title>Run Phone</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
        crossorigin="anonymous">

    <!-- Owl caroussel CDN -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />

    <!-- Font awesome icons -->

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />

    <!-- Custom CSS file -->

    <link rel="stylesheet"
        href="./style.css">

</head>

<body>

    <!-- start #header -->
    <header id="header">
        <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <p class="font-robo font-size-10 text-black-50 m-0">Maxime Monnier 48 Chemin banoirs Saint-Leu , La Réunion
                97436 </p>
            <div class="font-robo font-size-14px">
                <a href="#"
                    class=" liens px-3 border-right border-left text-dark">Login</a>
                <a href="#"
                    class=" liens px-3 border-right text-dark">Liste de Souhait (0)</a>
            </div>
        </div>


        <!-- !start #header -->

        <!-- Primary Navigation -->

        <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
            <div class="container-fluid">
                <a class="navbar-brand"
                    href="#">Run Phone</a>
                <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse"
                    id="navbarNav">
                    <ul class="navbar-nav m-auto font-mont ">
                        <li class="nav-item">
                            <a class="nav-link active"
                                aria-current="page"
                                href="#">En Vente</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="#">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="#">Produits <i class="fas fa-chevron-down"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="#">Categories <i class="fas fa-chevron-down"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="#">Comming Soon</a>
                        </li>
                    </ul>
                    <form action="#"
                        class="font-size-14 font-robo">
                        <a href="#"
                            class="py-2 rounded-pill liens color-primary-bg">
                            <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                            <span class="px-3 py-2 rounded-pill liens text-dark bg-light">0</span>
                        </a>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <!-- !Primary Navigation -->

    <!-- start #main-site -->
    <main id="main-site">

        <!-- Owl-caroussel -->
        <section id="banner-area">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="./assets/Banner1.png"
                        alt="Banner1">
                </div>
                <div class="item">
                    <img src="./assets/Banner2.png"
                        alt="Banner2">
                </div>
                <div class="item">
                    <img src="./assets/Banner1.png"
                        alt="Banner3">
                </div>
            </div>
        </section>
        <!-- !Owl-caroussel -->

        <!-- top sale -->
        <section id="top-sale">
            <div class="container py-5">
                <h4 class="font-robo font-size-20">Top des Ventes</h4>
                <hr>
                <!-- Owl-caroussel -->
                <div class="owl-carousel owl-theme">
                    <div class="item py-2">
                        <div class="product font-mont">
                            <a href="#"><img src="./assets/products/1.png"
                                    alt="product1"
                                    class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Samsung Galaxie 21</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Ajouter au Panier</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2">
                        <div class="product font-mont">
                            <a href="#"><img src="./assets/products/3.png"
                                    alt="product1"
                                    class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Readme Note 7</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Ajouter au Panier</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2">
                        <div class="product font-mont">
                            <a href="#"><img src="./assets/products/3.png"
                                    alt="product1"
                                    class="img-fluid"></a>
                            <div class="text-center">
                                <h6>iphone7</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Ajouter au Panier</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2">
                        <div class="product font-mont">
                            <a href="#"><img src="./assets/products/2.png"
                                    alt="product1"
                                    class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Readme Note 7</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Ajouter au Panier</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2">
                        <div class="product font-mont">
                            <a href="#"><img src="./assets/products/1.png"
                                    alt="product1"
                                    class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Samsung Galaxie 21</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Ajouter au Panier</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2">
                        <div class="product font-mont">
                            <a href="#"><img src="./assets/products/3.png"
                                    alt="product1"
                                    class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Readme Note 7</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Ajouter au Panier</button>
                            </div>
                        </div>
                    </div>
                     <div class="item py-2">
                        <div class="product font-mont">
                            <a href="#"><img src="./assets/products/1.png"
                                    alt="product1"
                                    class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Samsung Galaxie 21</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Ajouter au Panier</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2">
                        <div class="product font-mont">
                            <a href="#"><img src="./assets/products/3.png"
                                    alt="product1"
                                    class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Readme Note 7</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Ajouter au Panier</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- !Owl-caroussel -->
            </div>
        </section>
        <!-- !top sale -->

        <!-- !special price -->
        <section id="special-price">
    <div class="container">
        <h4 class="font-robo font-size-20">Offre Spécial</h4>
        <div id="filters" class="button-group text-end font-mont font-size-16">
            <button class="btn is-checked bold" data-filter="*">Toutes Les Marques</button>
            <button class="btn bold" data-filter=".Apple">Apple</button>
            <button class="btn bold" data-filter=".Samsung">Samsungs</button>
            <button class="btn bold" data-filter=".Redmi">Redmi</button>
        </div>

        <div class="grid">
            <div class="grid-item Apple border">
                <div class="item py-2" style="width:200px">
                    <div class="product font-mont">
                        <a href="#"><img src="./assets/products/14.png"
                                alt="product13"
                                class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Apple Iphone 10</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$152</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Ajouter au Panier</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item Apple border">
                <div class="item py-2" style="width:200px">
                    <div class="product font-mont">
                        <a href="#"><img src="./assets/products/13.png"
                                alt="product13"
                                class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Apple Iphone 10</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$152</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Ajouter au Panier</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item Apple border">
                <div class="item py-2" style="width:200px">
                    <div class="product font-mont">
                        <a href="#"><img src="./assets/products/13.png"
                                alt="product13"
                                class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Apple Iphone 10</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$152</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Ajouter au Panier</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item Samsung border">
                <div class="item py-2" style="width:200px">
                    <div class="product font-mont">
                        <a href="#"><img src="./assets/products/10.png"
                                alt="product10"
                                class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Samsung Galaxie 10</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$152</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Ajouter au Panier</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item Samsung border">
                <div class="item py-2" style="width:200px">
                    <div class="product font-mont">
                        <a href="#"><img src="./assets/products/11.png"
                                alt="product11"
                                class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Samsung Galaxie 10</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$152</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Ajouter au Panier</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item Redmi border">
                <div class="item py-2" style="width:200px">
                    <div class="product font-mont">
                        <a href="#"><img src="./assets/products/3.png"
                                alt="product3"
                                class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Redmi Note 7 Pro</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$152</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Ajouter au Panier</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item Redmi border">
                <div class="item py-2" style="width:200px">
                    <div class="product font-mont">
                        <a href="#"><img src="./assets/products/3.png"
                                alt="product3"
                                class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Redmi Note 7 Pro</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$152</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Ajouter au Panier</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item Redmi border">
                <div class="item py-2" style="width:200px">
                    <div class="product font-mont">
                        <a href="#"><img src="./assets/products/3.png"
                                alt="product3"
                                class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Redmi Note 7 Pro</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$152</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Ajouter au Panier</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item Redmi border">
                <div class="item py-2" style="width:200px">
                    <div class="product font-mont">
                        <a href="#"><img src="./assets/products/3.png"
                                alt="product3"
                                class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Redmi Note 7 Pro</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$152</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Ajouter au Panier</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item Apple border">
                <div class="item py-2" style="width:200px">
                    <div class="product font-mont">
                        <a href="#"><img src="./assets/products/14.png"
                                alt="product13"
                                class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Apple Iphone 10</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$152</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Ajouter au Panier</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item Samsung border">
                <div class="item py-2" style="width:200px">
                    <div class="product font-mont">
                        <a href="#"><img src="./assets/products/11.png"
                                alt="product11"
                                class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Samsung Galaxie 10</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$152</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Ajouter au Panier</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item Redmi border">
                <div class="item py-2" style="width:200px">
                    <div class="product font-mont">
                        <a href="#"><img src="./assets/products/3.png"
                                alt="product3"
                                class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Redmi Note 7 Pro</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$152</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Ajouter au Panier</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </section>
        <!-- !special price -->

        <!-- Banner ads -->
        <section id="banner_adds">
            <div class="container py-5 text-center">
                <img src="./assets/banner1-cr-500x150.jpg" alt="banner1" class="img-fluid">
                <img src="./assets/banner2-cr-500x150.jpg" alt="banner2" class="img-fluid">
            </div>
        </section>
        <!-- !Banner ads -->

        <!-- New phones -->
        <section id="new-phones">
            <div class="container">
                <h4 class="font-robo font-size-20">Nouveaux Téléphones 2022</h4>
                <hr>

                 <!-- Owl-caroussel -->
                 <div class="owl-carousel owl-theme">
                    <div class="item py-2 bg-light">
                        <div class="product font-mont">
                            <a href="#"><img src="./assets/products/1.png"
                                    alt="product1"
                                    class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Samsung Galaxie 21</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Ajouter au Panier</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-mont">
                            <a href="#"><img src="./assets/products/3.png"
                                    alt="product1"
                                    class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Readme Note 7</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Ajouter au Panier</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-mont">
                            <a href="#"><img src="./assets/products/3.png"
                                    alt="product1"
                                    class="img-fluid"></a>
                            <div class="text-center">
                                <h6>iphone7</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Ajouter au Panier</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-mont">
                            <a href="#"><img src="./assets/products/2.png"
                                    alt="product1"
                                    class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Readme Note 7</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Ajouter au Panier</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-mont">
                            <a href="#"><img src="./assets/products/1.png"
                                    alt="product1"
                                    class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Samsung Galaxie 21</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Ajouter au Panier</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-mont">
                            <a href="#"><img src="./assets/products/3.png"
                                    alt="product1"
                                    class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Readme Note 7</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Ajouter au Panier</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-mont">
                            <a href="#"><img src="./assets/products/1.png"
                                    alt="product1"
                                    class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Samsung Galaxie 21</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Ajouter au Panier</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-mont">
                            <a href="#"><img src="./assets/products/3.png"
                                    alt="product1"
                                    class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Readme Note 7</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Ajouter au Panier</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- !Owl-caroussel -->

            </div>
        </section>
        <!-- !New phones -->

        <!-- Latest blog -->
        <section id="blogs">
            <div class="container py-4">
                <h4 class="font-robo font-size-20">Nos derniers articles de blog</h4>
                <hr>

                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="card border-0 font-mont mr-5" style="width: 18rem;">
                            <h5 class="card-title font-size-16">Les Nouveaux smatphones</h5>
                            <img src="./assets/blog/blog2.jpg" alt="blog1" class="card-img-top">
                            <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis beatae ullam inventore rerum. Possimus nobis non officiis incidunt ullam ducimus!</p>
                            <a href="#" class="color-second text-left">Go somewhere</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 font-mont mr-5" style="width: 18rem;">
                            <h5 class="card-title font-size-16">Les Nouveaux smatphones</h5>
                            <img src="./assets/blog/blog3.jpg" alt="blog1" class="card-img-top">
                            <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis beatae ullam inventore rerum. Possimus nobis non officiis incidunt ullam ducimus!</p>
                            <a href="#" class="color-second text-left">Go somewhere</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 font-mont mr-5" style="width: 18rem;">
                            <h5 class="card-title font-size-16">Les Nouveaux smatphones</h5>
                            <img src="./assets/blog/blog1.jpg" alt="blog1" class="card-img-top">
                            <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis beatae ullam inventore rerum. Possimus nobis non officiis incidunt ullam ducimus!</p>
                            <a href="#" class="color-second text-left">Go somewhere</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- !Latest blog -->

    </main>
    <!-- !start #main-site -->


    <!-- start #footer -->
    <footer id="footer" class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <h4 class="font-robo font-size-20">Run Phone</h4>
                    <p class="font-size-14 font-mont text-white-50">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime, assumenda? Iste ex aliquam minus eius.</p>
                </div>
                <div class="col-lg-4 col-12">
                    <h4 class="font-robo font-size-20">Newsletter</h4>
                    <form class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary mb-2">Envoyer</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-2 col-12">
                    <h4 class="font-robo font-size-20">Informations</h4>
                    <div class="d-flex flex-column flex-wrap">
                        <a href="#" class="font-mont font-size-14 text-white-50 pb-1">A propos de nous</a>
                        <a href="#" class="font-mont font-size-14 text-white-50 pb-1">Informations de livraison</a>
                        <a href="#" class="font-mont font-size-14 text-white-50 pb-1">Politique de confidentialité</a>
                        <a href="#" class="font-mont font-size-14 text-white-50 pb-1">Therms & Condition</a>
                    </div>
                </div>
                <div class="col-lg-2 col-12">
                    <h4 class="font-robo font-size-20">Compte</h4>
                    <a href="#" class="font-mont font-size-14 text-white-50 pb-1">Mon Comptes</a>
                        <a href="#" class="font-mont font-size-14 text-white-50 pb-1">Historique de commandes</a>
                        <a href="#" class="font-mont font-size-14 text-white-50 pb-1">Liste de souhait</a>
                        <a href="#" class="font-mont font-size-14 text-white-50 pb-1">Newsletters</a>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright text-center bg-dark text-white py-2">
        <p class="font-mont font-size-14">&copy Copyrights 2022, Design By <a href="#" class="color-second">Maxime Monnier</a></p>
    </div>
    <!-- !start #footer -->



    <!-- JavaScript Bundle with Popper bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymougs"></script>

    <!-- jquey js file-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        

    <!-- owl caroussel js file-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>

    <!-- isotop plugin cdn-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- custom javascript -->
    <script src="./index.js "></script>

</body>

</html>