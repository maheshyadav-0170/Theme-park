<?php
require "config.php"; ?>

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
        <div class="container-fluid text-center pt-3 pb-1 fw-bolder" id="offerHeadings">
            <p>
                Grab Your Offers Now..!<span><button class="btn btn-sm btn-dark ms-3">Book Now</button></span>
            </p>
        </div>

        <div class="navbar navbar-expand-lg navbar-light bg-light">;
            <a class=" navbar-brand" href="index.php">Aquatica</a>
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
                        <a href="login.php" class="nav-link px-4">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <main>

        <div class="container text-center signup">
            <div class="row gx-0">
                <div class="col-md-12 col-sm-12">

                    <p class="py-1 fw-bolder" id="signupHeading">Sign up to book now..!</p>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <input type="text" class="form-control" placeholder="First name" name="firstName"
                                    required />
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <input type="text" class="form-control" placeholder="Last name" name="lastName"
                                    required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <input type="email" class="form-control" placeholder="Email" name="email" required />
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <input type="password" class="form-control" placeholder="Password" name="password"
                                    required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <input type="tel" class="form-control" name="phone" placeholder="Phone No"
                                    pattern="[0-9]{10}" required />
                                <div class="invalid-feedback">Please enter a valid 10 digit phone number</div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <input type="text" class="form-control" placeholder="City" name="city" required />
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <select name="state" placeholder="State" class="form-control" required>
                                    <option>Select state</option>
                                    <option>Andhra Pradesh</option>
                                    <option>Arunach Pradesh</option>
                                    <option>Assam</option>
                                    <option>Chattisgarh</option>
                                    <option>Goa</option>
                                    <option>Gujarat</option>
                                    <option>Haryana</option>
                                    <option>Himachal Pradesh</option>
                                    <option>Jharkhand</option>
                                    <option>Karnataka</option>
                                    <option>Kerala</option>
                                    <option>Madhya Pradesh</option>
                                    <option>Manipur</option>
                                    <option>Meghalaya</option>
                                    <option>Mizoram</option>
                                    <option>Nagaland</option>
                                    <option>Odisha</option>
                                    <option>Punjab</option>
                                    <option>Rajasthan</option>
                                    <option>Sikkim</option>
                                    <option>Tamil Nadu</option>
                                    <option>Telangana</option>
                                    <option>Tripura</option>
                                    <option>Uttarakhand</option>
                                    <option>Utta Pradesh</option>
                                    <option>West Bengal</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <input type="submit" name="signUp" class="form-control btn-outline-dark  mb-2 "
                                    value="Sign Up" />
                            </div>
                        </div>
                        <br />
                        <?php if (isset($_POST["signUp"])) {
                            $newUser = "INSERT INTO `customerinfo`(`cfname`,`clname`,`cemail`,`cpassword`,`cphone`,`ccity`,`cstate`) 
                            VALUES ('$_POST[firstName]','$_POST[lastName]','$_POST[email]','$_POST[password]','$_POST[phone]','$_POST[city]','$_POST[state]')";
                            $cEmail = $_POST["email"];
                            $duplicate = mysqli_query(
                                $conn,
                                "Select * from customerinfo where cemail = '$cEmail'"
                            );
                            if (mysqli_num_rows($duplicate) > 0) {
                                echo "<script class='alert-danger alert' role='alert'>There was an error while signing up..! try again.!</script>";
                            }

                            if (mysqli_query($conn, $newUser)) {
                                echo "<div class='alert-info alert' role='alert'>Your have been successfully registered with Aquatica! Please login to continue...<span><a href='login.php' class='btn-sm btn-outline-dark'>login</a></span></div>";
                            } else {
                                echo "<script>alert('There was an error while signing up..! try again.!')</script>";
                            }
                        } ?>
                    </form>
                </div>
            </div>
        </div>
        <hr
            style="width:100%; height: 2%; background-color: #4158D0;background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);">
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>