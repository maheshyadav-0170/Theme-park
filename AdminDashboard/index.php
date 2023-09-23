<?php
require "config.php";
session_start();
ob_start();
if (isset($_SESSION["admin"])) {
    header("location:Adminhome.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aquatica - Admin dashboard</title>
    <link rel="stylesheet" href="../CSS/style.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
    <header>
        <div id="preloader">

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
                        <a href="payments.php" class="nav-link px-4">Payments</a>
                    </li>
                    <li class="nav-items">
                        <a href="logout.php" class="nav-link px-4">Logout</a>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div class="row gx-0">
            <div class="col col-md-6 col-sm-3 pt-1" id="adminLogin">
                <h2 class="text-center fw-bolder m-auto mt-5" id="headText">
                    Admin Dashboard
                </h2>
                <p class="text-center fw-bolder m-auto mt-3" id="titleText">
                    Step into the world of magic, where joy springs to life..!
                </p>
            </div>

        </div>

        <div class="container text-center about">
            <div class="row gx-0">
                <div class="col-md-12 col-sm-12">
                    <p class="py-1 fw-bolder" id="offerHeading">Login to continue</p>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <input type="text" class="form-control" placeholder="Username" name="email" />
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <input type="password" class="form-control" placeholder="Password" name="password" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-6">
                                <input type="submit" name="Adminlogin" class="form-control btn-outline-dark  mb-2 "
                                    value="Log in" />
                            </div>
                        </div>
                        <br />
                    </form>
                    <div>
                    </div>
                </div>
            </div>
        </div>

    </main>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
    var loader = document.getElementById("preloader");
    window.addEventListener("load", function() {
        loader.style.display = "none";
    })
    </script>
</body>

</html>
<?php
require "config.php";
$conn = mysqli_connect("localhost", "root", "", "aquatica");
if (isset($_POST["Adminlogin"])) {
    $myusername = mysqli_real_escape_string($conn, $_POST["email"]);
    $mypassword = mysqli_real_escape_string($conn, $_POST["password"]);

    $sql = "SELECT `adminId` FROM `adminlogindetails` WHERE adminusername = '$myusername' and adminPassword = '$mypassword'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {
        $_SESSION["admin"] = $myusername;
        header("location:adminHome.php");
    } else {
        echo "<div class='alert-info alert text-center' role='alert'>Login name or Password is incorrect..!</div>";
    }
}
ob_end_flush();

?>