<?php
use App\HTTP\Controllers\BankController;
$total = 0;
if (Session::has('value')) {
    $total = BankController::countOrder();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>make order</title>
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="css/notice.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <style>
        /* * {
            text-align: center;
        } */

        body {
            background-image: url(images/blood1.png);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            margin: 0;
        }

        a {
            text-decoration: none;
        }

        .c {
            position: absolute;
            right: 0;
            width: 75%;
            margin-left: 30%;
            /* height: 100vh; */
            height: auto;
        }

        .c .content {
            /* background-color: white; */
            position: relative;
            margin-top: 5vh;
            width: 90%;
            /* min-height: 95vh; */
            height: auto;
        }
    </style>
</head>

<body>
    <div class="main_box">
        <input type="checkbox" id="check">
        <div class="btn_one">
            <label for="check">
                <i class="fas fa-bars"></i>
            </label>
        </div>
        <div class="sidebar_menu">
            <div class="first">
                <a href="#">
                    <h6>{{ Session::get('value')['bank_name'] }}</h6>
                </a>
            </div>
            <div class="btn_two">
                <label for="check">
                    <i class="fas fa-times"></i>
                </label>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="Dashboard">Dashboard</a></li>
                    <li><a href="/addStock">AddStock</a></li>
                    <li><a href="/bloodstock">Blood Stock</a></li>
                    <li><a href="showorder">Blood Orders</a></li>
                    <li><a href="#">Notification({{ $total }})</a></li>
                    <li><a href="#"> Message </a></li>
                    <li><a href="/Logout">logout</a></li>
                </ul>
            </div>
        </div>

        <h1 class="h">Notice </h1>
        <div class="container">
            <h2>Blood Donation Camp Notice</h2>
            <form action="" method="post" enctype="multipart/form-data">
                <label for="campName">Camp Name:</label>
                <input type="text" id="campName" name="campName" required />

                <label for="campDate">Camp Date:</label>
                <input type="date" id="campDate" name="campDate" required />

                <label for="campLocation">Camp Location:</label>
                <input type="text" id="campLocation" name="campLocation" required />

                <label for="notification">Upload Notification:</label>
                <input type="file" id="notification" name="notification" accept=".pdf" required />

                <label for="message">Short Message:</label>
                <textarea name="message" id="msg" cols="30" rows="10" required>
          </textarea>

                <input type="submit" value="Submit" />
            </form>

        </div>
</body>

</html>
