<?php
use App\HTTP\Controllers\BankController;
$total = 0;
if (Session::has('value')) {
    $total = BankController::countOrder();
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style3.css">
    {{-- <link rel="stylesheet" href="css/popup.css"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        .input-field input,
        select {
            outline: none;
            font-size: 14px;
            font-weight: 400;
            color: #333;
            border-radius: 5px;
            border: 1px solid #aaa;
            padding: 0 15px;
            height: 42px;
            width: 200px;
            margin: 4px 0;
        }

        .w-5 {
            display: none;
        }

        /* * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        } */

        body {
            min-height: 100vh;
            background: url("images/blood1.png") no-repeat;
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
        }


        a {
            text-decoration: none;

        }

        li {
            list-style: none;
        }

        h1,
        h2 {
            color: #444;
        }

        h3 {
            color: rgb(255 0 0);
        }



        table {
            padding: 10px;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
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
            background-color: white;
            position: relative;
            margin-top: 5vh;
            width: 100%;
            min-height: 95vh;
            /* height: auto; */
        }

        .c .content .cards {
            /* padding: 15px 10px; */
            display: inline-flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-top: -7px;
        }

        .c .content .cards .card {
            width: 170px;
            height: 130px;
            background: white;
            margin: 20px 10px;
            display: flex;
            align-items: center;
            justify-content: space-around;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-radius: 25px;
            justify-content: center;
        }



        @media screen and (max-width:536px) {
            .brand-name h1 {
                font-size: 16px;
            }

            .container .content .cards {
                justify-content: center;
            }
        }
    </style>
</head>
{{-- @if (Session::get('message'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
 {{Session::get('message')}}
 @else {{ "" }}
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>   
@endif --}}

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
                    <h6><i>{{ Session::get('value')['bank_name'] }}</i></h6>
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
                    <li><a href="message">Message</a></li>
                    <li><a href="/Logout">logout</a></li>
                </ul>
            </div>
        </div>
        {{-- <h4><i>Welcome {{ Session::get('value')['bank_name'] }}</i></h4> --}}
        <div class="c">
            <div class="content">

                {{-- < class="content"> --}}
                {{-- <div class="cards">
                        <div class="card">
                            <div class="box">
                                <h1>21</h1>
                                <h3>Uesrs</h3>
                            </div>
                        </div>
                        <div class="card">
                            <div class="box">
                                <h1>30</h1>
                                <h3>Income</h3>
                            </div>
                            <div class="icon-case">
                            </div>
                        </div>
                        
                    </div>  --}}

                <form action="/blood_details" method="post">
                    @csrf

                    <div class="fields">
                        <div class="input-field">
                            <input type="hidden" name="bank_id" value="{{ Session::get('value')['bank_id'] }}" readonly />
                        </div>
                        <div class="input-field">
                            <label> A POSITIVE</label>
                            <input type="number" name="APOS" required />
                        </div>

                        <div class="input-field">
                            <label>B POSITIVE</label>
                            <input type="number" name="BPOS" required />

                        </div>

                        <div class="input-field">
                            <label>O POSITIVE</label>
                            <input type="text" name="OPOS" required />
                        </div>
                        <div class="input-field">
                            <label>AB POSITIVE</label>
                            <input type="number" name="ABPOS" required />
                        </div>
                    </div>
                    <div class="fields1">
                        <div class="input-field">
                            <label> A NEGETIVE</label>
                            <input type="text" name="ANEG" required />
                        </div>

                        <div class="input-field">
                            <label>B NEGETIVE</label>
                            <input type="text" name="BNEG" required />
                        </div>

                        <div class="input-field">
                            <label> O NEGETIVE</label>
                            <input type="text" name="ONEG" required />
                        </div>
                        <div class="input-field">
                            <label> AB NEGETIVE</label>
                            <input type="text" name="ABNEG" required />
                        </div>
                    </div>

                    <div class="input-field1">
                        <label class="t1xt"> Write about rules and regulation </label>
                        <textarea class="tx" type="text" id="" name="message" required></textArea>
                    </div>
                    <button type="submit" class="submitBtn">Submit</button>

                </form>
            </div>
        </div>
    </div>






    </div>
</body>

</html>
