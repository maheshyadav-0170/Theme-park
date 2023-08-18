<?php 
require('config.php');
session_start();  
if(!isset($_SESSION["user"]))
:
 header("location:login.php");

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Amusement Park Portal </title>
    <link rel="stylesheet" href="CSS/style.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
    <header>
        <div id="preloader">
        </div>
        <div class="container-fluid text-center pt-3 pb-1 fw-bolder" id="offerHeadings">
            <p>
                Grab Your Offers Now..!<span><button onclick="window.location.href='book.php'"
                        class="btn btn-sm btn-dark ms-3">Book Now</button></span>
            </p>
        </div>

        <div class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">Aquatica</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-items">
                        <a href="home.php" class="nav-link px-4">Home</a>
                    </li>
                    <li class="nav-items">
                        <a href="about.php" class="nav-link px-4">About</a>
                    </li>
                    <li class="nav-items">
                        <a href="offers.php" class="nav-link px-4">Offers</a>
                    </li>
                    <li class="nav-items">
                        <a href="book.php" class="nav-link px-4">Book now</a>
                    </li>
                    <li class="nav-items">
                        <a href="logout.php" class="nav-link px-4">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div class="row gx-0">
            <div class="col col-md-6 col-sm-3 pt-1" id="bgImage">
                <h2 class="text-center fw-bolder m-auto mt-5" id="headText">
                    Hello
                </h2>
                <p class="text-center fw-bolder m-auto mt-3" id="titleText">
                    Step into the world of magic, where joy springs to life..!
                </p>
            </div>

        </div>

        <div class="container text-center about">
            <div class="row gx-0">
                <div class="col-md-7 col-sm-12">
                    <div class="aboutDesign ms-auto"></div>
                    <p class="py-1" id="aboutHeading">About us</p>
                    <p class="" id="aboutTitle">Exciting adventures</p>
                    <p class="aboutDesc">
                        We are so much more than an amusement park - a world where
                        everyone comes together and enjoys the little moments.
                    </p>
                    <p class="aboutDesc">
                        A life of fun is what everyone deserves, so come on down to the
                        Wonderla closest to you!
                        <span><a href="about.php" class="btn-light text-decoration-none">...read more</a></span>
                    </p>
                    <div class="aboutDesign1"></div>
                </div>

                <div class="col-md-5 col-sm-12">
                    <img src="assets/aboutImage1.jpg" id="aboutImage1" alt="" />
                </div>
            </div>
        </div>

        <div class="container offers text-center">
            <p class="py-1 fw-bolder" id="offerHeading">Offers</p>
            <div class="row gx-0">
                <div class="col-md-4 col-sm-6">
                    <div class="card" style="width: 18rem">
                        <img src="assets/img1.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title fw-bolder">Wonder Wednesday</h5>
                            <p class="card-text">
                                Aquatica offers 35% off on Wednesday for all..!
                            </p>
                            <a href="book.php" class="btn btn-outline-light">Book now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card" style="width: 18rem">
                        <img src="assets/img2.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title fw-bolder">Student Offer</h5>
                            <p class="card-text">
                                Discounted rates for college students. Go all out and have fun
                                like never before!
                            </p>
                            <a href="book.php" class="btn btn-outline-light">Book now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card" style="width: 18rem">
                        <img src="assets/img3.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title fw-bolder">Early Bird Offers</h5>
                            <p class="card-text">
                                Plan your visit 5 days in advance and get a flat 10% off on
                                park tickets..!
                            </p>
                            <a href="book.php" class="btn btn-outline-light">Book now</a>
                        </div>
                    </div>
                </div>
                <div class="">
                    <br />
                    <hr />
                    <button class="btn-light btn-outline-dark p-2 rounded" onclick="window.location.href='offers.php'">
                        More offers
                    </button>
                </div>
            </div>
        </div>

        <div class="yourBookings text-center">
            <p class="">
                Would you like to cancel your booking..?
                <span><a href="bookingCancel.php" class="btn-light text-decoration-none">...click here</a></span>
            </p>
        </div>
    </main>

    <footer>
        <div class="container-fluid footerSection">
            <div class="row gx-0 flex-row">
                <div class="col-md-3 col-sm-3">
                    <ul>
                        <p class="footerHeading fw-bolder">Quick Links</p>
                        <li>
                            <a class="link-secondary text-decoration-none" href="index.php">Home</a>
                        </li>
                        <li>
                            <a class="link-secondary text-decoration-none" href="about.php">About us
                            </a>
                        </li>
                        <li>
                            <a class="link-secondary text-decoration-none links" href="offers.php">
                                Offers
                            </a>
                        </li>
                        <li>
                            <a class="link-secondary text-decoration-none links" href="book.php">
                                Book
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3">
                    <ul>
                        <p class="footerHeading fw-bolder">Extra Links</p>
                        <li>
                            <a class="link-secondary text-decoration-none links" href="index.php">
                                Ask questions
                            </a>
                        </li>
                        <li>
                            <a class="link-secondary text-decoration-none links" href="about.php">About us</a>
                        </li>
                        <li>
                            <a class="link-secondary text-decoration-none links" href="index.php">Privacy policy</a>
                        </li>
                        <li>
                            <a class="link-secondary text-decoration-none links" href="index.php">Terms of use</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3">
                    <ul>
                        <p class="footerHeading fw-bolder">Contact us</p>
                        <li>
                            <a class="link-secondary text-decoration-none links" href="index.php">
                                +91 9878987878
                            </a>
                        </li>
                        <li>
                            <a class="link-secondary text-decoration-none links" href="about.php">
                                +91 8989767878
                            </a>
                        </li>
                        <li>
                            <a class="link-secondary text-decoration-none links"
                                href="offers.php">aquatica@gmail.com</a>
                        </li>
                        <li>
                            <a class="link-secondary text-decoration-none links" href="book.php">
                                Bengaluru, India
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3">
                    <ul>
                        <p class="footerHeading fw-bolder">Follow us</p>
                        <li>
                            <a class="link-secondary text-decoration-none links" href="facebook.com">
                                Facebook
                            </a>
                        </li>
                        <li>
                            <a class="link-secondary text-decoration-none links" href="instagram.com">
                                Instagram
                            </a>
                        </li>
                        <li>
                            <a class="link-secondary text-decoration-none links" href="twitter.com">Twitter
                            </a>
                        </li>
                        <li>
                            <a class="link-secondary text-decoration-none links" href="linkedin.com">
                                Linkedin
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr />
            <p class="text-center"></p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="index.js"></script>

    <script>
    var loader = document.getElementById("preloader");
    window.addEventListener("load", function() {
        loader.style.display = "none";
    })
    </script>
</body>

</html>
