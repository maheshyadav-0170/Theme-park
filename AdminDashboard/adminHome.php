<?php
require "config.php";
session_start();
if (!isset($_SESSION["admin"])) {
    header("location:index.php");
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>

    <meta charset='utf-8' />
    <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css' rel='stylesheet' />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js'></script>

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
                        <a href="home.php" class="nav-link px-4">Home</a>
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
                    <img src="../assets/gabriel-valdez-PaFEcOj8Kqo-unsplash.jpg" id="aboutImage1" alt="" />
                </div>
            </div>
        </div>

        <div class="container text-center rounded  ">
            <div class="table-responsive ">
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
                            echo "<td><button onclick=\"sendConfirmationEmail('" .
                                $row["BookingId"] .
                                "', '" .
                                $row["custEmail"] .
                                "')\">Confirm</button></td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>

            </div>

        </div>
        <br>

        <?php
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Execute the SQL query to get the data
$sql = "SELECT plans, COUNT(*) AS bookings
        FROM customerbookings
        GROUP BY plans";
$result = $conn->query($sql);

// Create two arrays to store the plan names and their corresponding bookings
$plans = array();
$bookings = array();

// Loop through the result set and populate the arrays
while ($row = $result->fetch_assoc()) {
  array_push($plans, $row["plans"]);
  array_push($bookings, $row["bookings"]);
}

// Close the database connection
$conn->close();

// Create a pie chart using Chart.js
?>


        <div class="container text-center about">
            <p class="py-1" id="aboutHeading">Stats</p>
            <canvas id="myChart"></canvas>
        </div>

        </div>
        <br>
        <div id='calendar'></div>


        <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: [
                    <?php
          $sql = "SELECT * FROM customerbookings";
          $result = mysqli_query($conn, $sql);

          while($row = mysqli_fetch_assoc($result)) {
            $date = $row['cDate'];
            $year = substr($date, 0, 4);
            $month = substr($date, 5, 2) - 1;
            $day = substr($date, 8, 2);
            $title = $row['custFname'] . ' ' . $row['custLname'];
            echo "{title: '$title', start: new Date($year, $month, $day)},";
          }
        ?>
                ]
            });
            calendar.render();
        });
        </script>


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
    <script>
    function sendConfirmationEmail(bookingId, customerEmail) {
        // Send an AJAX request to the server to send the confirmation email
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Display a success message
                alert('Confirmation email sent to ' + customerEmail);
            }
        };
        xhr.open('POST', 'send_confirmation_email.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.send('booking_id=' + bookingId + '&customer_email=' + customerEmail);
    }
    </script>
    <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: <?php echo json_encode($plans); ?>,
            datasets: [{
                label: 'Number of bookings',
                data: <?php echo json_encode($bookings); ?>,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: false,
            plugins: {
                legend: {
                    position: 'bottom'
                },
                title: {
                    display: true,
                    text: 'Number of bookings by plan'
                }
            }
        }
    });
    </script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            events: [
                <?php
          $sql = "SELECT * FROM customerbookings";
          $result = mysqli_query($conn, $sql);

          while($row = mysqli_fetch_assoc($result)) {
            $date = $row['cDate'];
            $year = substr($date, 0, 4);
            $month = substr($date, 5, 2) - 1;
            $day = substr($date, 8, 2);
            $title = $row['custFname'] . ' ' . $row['custLname'];
            echo "{title: '$title', start: new Date($year, $month, $day)},";
          }
        ?>
            ]
        });
        calendar.render();
    });
    </script>

</body>

</html>