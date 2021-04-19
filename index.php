<?php
session_start();
$server = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($server, $username, $password, "tsf");
if (!$conn) {
    die(mysqli_connect_error());
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#fafafa">

    <title>The sparks foundation</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Rubik:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="data:image/png;base64,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" type="image/x-icon">
</head>

<body style="background: url('https://images.pexels.com/photos/3255761/pexels-photo-3255761.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500');">

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">

            <a class="navbar-brand" href="index.php">
                <i class="fa fa-university" aria-hidden="true"></i> TSF </a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-angle-double-down"></i>
            </button>

            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link ">Home</a></li>
                    <li class="nav-item"><a href="https://www.linkedin.com/in/vaishnavi-pandey-8687391b0/" class="nav-link ">Contact-us</a></li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="index.php?info=view" class="nav-link ">View-Customers</a></li>
                    <li class="nav-item"><a href="index.php?info=transfer" class="nav-link ">Transfer-Money</a></li>
                    <li class="nav-item"><a href="index.php?info=history" class="nav-link">Transaction-History</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <?php
    @$info = $_GET['info'];
    if ($info != "") {
        if ($info == "view") {
            include('view.php');
        } else if ($info == "transfer") {
            include('transfer.php');
        } else if ($info == "history") {
            include('history.php');
        }
    } else {
    ?>

        <div class="page-title-area col-lg-12 col-md-12 col-sm-12">
            <div class="photo-bg"></div>
        </div>

        <section class="services-area bg-color pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span style="font-weight:bold;font-size: 22px;">Welcome to</span>
                    <h2>"The Spark Foundation Bank"</h2>
                    <p style="font-family:stylish; font-size: 18px;">A local bank that serve the world. We build relationship beyond Banking. </p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="services-item">
                            <a href="index.php?info=view" style="color:black;">
                                <div class="icon">
                                    <i class="fa fa-list"></i>
                                </div>
                                <h3>Customer list</h3>
                                <p>You can view the list of all customers with their email id and available balance.</p>
                            </a>
                        </div>


                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="services-item">
                            <a href="index.php?info=transfer" style="color:black;">

                                <div class="icon">
                                    <i class="fa fa-rupee"></i>
                                </div>
                                <h3>Transfer Money</h3>
                                <p>You can transfer money from here.We ensure that transaction is safe and secure.</p>
                            </a>
                        </div>

                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="services-item">
                            <a href="index.php?info=history" style="color:black;">
                                <div class="icon">
                                    <i class="fa fa-history"></i>
                                </div>
                                <h3>Transaction History</h3>
                                <p>We keep record of all the transactions that took place.You can view them here.</p>
                            </a>
                        </div>
                    </div>
                </div>

        </section>
        <footer style="background-color: black; width:100%">
            <center>
                <p style="color: white;">Designed by: <strong>Vaishnavi Pandey</strong></p>
                <p style="color: white;">&copy; Copyright - The Spark Foundation@2021</p>
            </center>
        </footer>
    <?php
    }
    ?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>