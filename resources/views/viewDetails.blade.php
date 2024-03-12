<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Details</title>
    <link rel="stylesheet" href="css/view_style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <!-- css for all details-->
    <link rel="stylesheet" href="css/alldetails.css">
</head>
<body>
    @foreach($data as $item)
    <h1 class="head1"> Details of Blood Bank</h1>
    <section id="single-bank-details">
        <div class="container2">
             
             <div id="bank-name">
                <h2><strong> {{ $item->bank_name }}</strong> </h2>
                <h4><b>Mobile No: </b>{{ $item->bank_ph_no }}</h4>
                <h4><b>Email Id: </b>{{ $item->bank_email }}</h4>
                <h4><b>Address: </b>{{$item->Address}}</h4>
                {{-- {{ $item->bank_id }} --}}
             </div>
            <div class="rules">
                <h4>Rules And Regulation</h4>
                {{ $item->message }}
            </div>
                
             
        </div>
    </section>
    <section id="all-details">
       
        <h1 class="head2"> Available Blood Groups </h1>
        <div class="container">
            <div class="row">
                
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="blood">
                                <h2>A+ <i class="fas fa-tint"></i></h2>
                            </div><br><br>
                            <div>
                                {{ $item->APOS.'(ML)' }}
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
                                {{ $item->BPOS.'(ML)' }}
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
                                {{ $item->OPOS.'(ML)' }}
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
                                {{ $item->ABPOS.'(ML)' }}
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
                                <h2>A-<i class="fas fa-tint"></i></h2>
                            </div><br><br>
                            <div>
                                {{ $item->ANEG.'(ML)' }}
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
                                {{ $item->BNEG.'(ML)' }}
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
                                {{ $item->ONEG.'(ML)' }}
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
                                {{ $item->ABNEG.'(ML)' }}   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <br>

     
    </section>
    <div class="btn_container">
       <button id="btn1" type="button" onclick="window.location.href = '/search'">Back</button>
       <button id="btn2" type="button" onclick="window.location.href = '/booknow{{ $item->bank_id }}'">Order Blood</button> 
    </div>  
    @endforeach
</body>
</html>