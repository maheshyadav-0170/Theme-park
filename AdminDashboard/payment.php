<?php
require "config.php";
session_start();
if (!isset($_SESSION["user"])) {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Amusement Park Portal</title>
    <link rel="stylesheet" href="../CSS/style.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
</head>

<body>
    <header>
        <div class="container-fluid text-center pt-3 pb-1 fw-bolder" id="offerHeadings">
            <p>Aquatica - Admin Handlers Portal
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
                        <a href="adminHome.php" class="nav-link px-4">Home</a>
                    </li>
                    <li class="nav-items">
                        <a href="payment.php" class="nav-link px-4">Payments</a>
                    </li>
                    <li class="nav-items">
                        <a href="Manage.php" class="nav-link px-4">Manage</a>
                    </li>
                    <li class="nav-items">
                        <a href="logout.php" class="nav-link px-4">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div class="container text-center rounded ">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Booking ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Booking Date</th>
                            <th>Guests</th>
                            <th>Plan</th>
                            <th>Confirmation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Fetch customer bookings data from the database
                        $sql = "SELECT * FROM customerbookings";
                        $result = mysqli_query($conn, $sql);
                        
                        // Loop through the results and display them in the table
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row["BookingId"];
                            echo "<tr>";
                            echo "<td>" . $row["BookingId"] . "</td>";
                            echo "<td>" . $row["custFname"] . "</td>";
                            echo "<td>" . $row["custLname"] . "</td>";
                            echo "<td>" . $row["custEmail"] . "</td>";
                            echo "<td>" . $row["custPhone"] . "</td>";
                            echo "<td>" . $row["custCity"] . "</td>";
                            echo "<td>" . $row["custState"] . "</td>";
                            echo "<td>" . $row["cDate"] . "</td>";
                            echo "<td>" . $row["cGuestNo"] . "</td>";
                            echo "<td>" . $row["plans"] . "</td>";
                            echo "<td><button><a href='paymentDone.php?did=$id.'>PaymentDone</a></button></td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
        <br>
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
</body>

</html>