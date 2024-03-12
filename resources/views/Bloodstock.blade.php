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
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="css/style2.css">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

    <style>
        .updateForm {
            margin-bottom: 50px;
        }
        /* * {
            text-align: center;
        } */

        body {
            min-height: 100vh;
            background: url("images/blood1.png") no-repeat;
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
        }

        h3{
            color: white;
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
                    <li><a href="message">Message</a></li>
                    <li><a href="/Logout">logout</a></li>
                </ul>
            </div>
        </div>

        <h1 class="h"> Blood Stocks </h1>
         
        <div class="container">
            <div class="row">
                @foreach($data as $item)
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="blood">
                                <h2>A+ <i class="fas fa-tint"></i></h2>
                            </div><br><br>
                            <div>
                                <h3>{{ $item->APOS }} (ml)</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card ">
                        <div class="card-body">
                            <div class="blood">
                                <h2>B+ <i class="fas fa-tint"></i></h2>
                            </div><br><br>
                            <div>
                                <h3>{{ $item->BPOS }} (ml)</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card ">
                        <div class="card-body">
                            <div class="blood">
                                <h2>O+ <i class="fas fa-tint"></i></h2>
                            </div><br><br>
                            <div>
                               <h3> {{ $item->OPOS }} (ml)</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card ">
                        <div class="card-body">
                            <div class="blood">
                                <h2>AB+ <i class="fas fa-tint"></i></h2>
                            </div><br><br>
                            <div>
                               <h3> {{ $item->ABPOS }} (ml)</h3>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <div class="card ">
                        <div class="card-body">
                            <div class="blood">
                                <h2>A- <i class="fas fa-tint"></i></h2>
                            </div><br><br>
                            <div>
                               <h3> {{ $item->ANEG }} (ml)</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card ">
                        <div class="card-body">
                            <div class="blood">
                                <h2>B- <i class="fas fa-tint"></i></h2>
                            </div><br><br>
                            <div>
                               <h3> {{ $item->BNEG }} (ml)</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card ">
                        <div class="card-body">
                            <div class="blood">
                                <h2>O- <i class="fas fa-tint"></i></h2>
                            </div><br><br>
                            <div>
                               <h3> {{ $item->ONEG }} (ml)</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card ">
                        <div class="card-body">
                            <div class="blood">
                                <h2>AB- <i class="fas fa-tint"></i></h2>
                            </div><br><br>
                            <div>
                                <h3>{{ $item->ABNEG }} (ml)</h3>
                            </div>
                        </div>
                    </div>
                </div>
                {{--  --}}
            </div>
            <hr>
            <h1 class="h"> Update Stocks </h1>

            <div class="updateForm justify-item-center">

                <form class="form-inline" action="/stockUpdate" method="POST">
                    @csrf
                    <div class="form-group mx-sm-3 mb-6">
                      <input type="hidden" name="blood_id" value="{{$item->blood_id }}" />
                        <select name="bloodgroup" class="form-control">
                            <option disabled="disabled" selected="selected">Choose Blood Group</option>
                            <option value="OPOS">O+</option>
                            <option value="ONEG">O-</option>
                            <option value="APOS">A+</option>
                            <option value="ANEG">A-</option>
                            <option value="BPOS">B+</option>
                            <option value="BNEG">B-</option>
                            <option value="ABPOS">AB+</option>
                            <option value="ABNEG">AB-</option>
                        </select>
                    </div>
                    <div class="form-group mx-sm-3 mb-6">

                        <input type="number" class="form-control" name="unit" placeholder="Unit" min="1" required>
                    </div>
                    <div class="bt"><button type="submit" class="btn btn-primary mb-2">Update</button></div>

                </form>
                @endforeach
            </div>
            <br>
            
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>