<?php
    use App\HTTP\Controllers\BankController;
    $total=0;
    if(Session::has('value')){
        $total=BankController::countOrder();
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
    <style>
        /* * {
            text-align: 0px;
        } */

        body {
            background-image: url(images/blood1.png);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            margin: 0;
        }
        input[type="text"]{
            width: 50%;
            padding: 5px;
            font-size: 20px;
            border: none;
            background: transparent;
        }
       a{
        text-decoration: none;
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
                <a href="#"><h6>{{ Session::get('value')['bank_name'] }}</h6></a>
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
                    <li><a href="/showorder">Blood Orders</a></li>
                    <li><a href="#">Notification({{ $total }})</a></li>
                    <li><a href="/message"> Message </a></li>
                    <li><a href="/Logout">logout</a></li>
                </ul>
            </div>
        </div>

        <h1 class="h">All Orders </h1>
        <section id="order">
            @foreach($data as $item)
            <form method="POST" action="/confirmOrder" >
                @csrf
            <div class="order-box"> 
                <div class="order-details">
                    <input type="hidden"  name="order_id" value="{{$item->order_id }}" readonly>
                   <input type="hidden"  name="user_id" value="{{$item->user_id }}" readonly>
                    <input type="hidden" name="bank_id" value="{{$item->bank_id }}" readonly>
                    <p> <strong>Name:</strong><b><input type="text" name="name" value="{{ $item->name }}" readonly></b></p>
                    <p> <strong>Mobile No:</strong><input type="text" name="ph_no" value="{{ $item->ph_no }}" readonly></p>
                    <p> <strong>Full Address:</strong><input type="text" name="address" value="{{ $item->address }}" readonly></p>
                    <p> <strong>Blood Group:</strong> <input type="text" name="group" value="{{ $item->group }}" readonly></p>
                    <p> <strong>Unit:</strong> <input type="text" name="quantity" value="{{ $item->quantity }}" readonly></p>
                    <p> <strong>Card:</strong> <input type="text" name="card" value="{{ $item->card }}" readonly></p>
                    <p> <strong>price:</strong><input type="text" name="price" value="{{ $item->price }}" readonly></p>
                </div>
                <button type="submit" class="btn-order">Take Order</button>
                <button class="btn-order" style="background-color: #fb0909"><a href="/ordercancel{{ $item->order_id }}">Cancel Order</a></button>
                
            </div>
            </form>
            @endforeach
        </section>
</body>

</html>