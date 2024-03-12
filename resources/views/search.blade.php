<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Searching</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS
    ============================================ -->

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!-- <link rel="stylesheet" href="style.min.css"> -->
    <link rel="stylesheet" href="css/search_style.css">

    <style>
        .axil-signin-form {
            max-width: 452px;
            width: 100%;
            padding: 20px;
            /* border: 5px solid #0097ff; */
            height: 573px;
            margin-left: -1px;
            border-radius: 5px;
            background: linear-gradient(45deg, #bad7cb, transparent);
        }

        .axil-signin-banner {
            min-height: 900px;
            height: 100vh;
            padding: 63px 0px 0 34px;
        }

        .row>[class*=col] {
            padding-left: 0px;
            padding-right: 15px;
        }

        p.b2 {
            font-size: var(--font-size-b2);
            line-height: var(--line-height-b2);
            border-bottom: 2px solid;
            text-align: center;
            font-size: 19px;
        }

        .axil-signin-form p {
            color: #040404;
            font-weight: var(--s-bold);
        }

        .mb--55 {
            margin-bottom: 42px;
        }
        button{
            background-color:#7690DA;
        }
        .home-logout{
            margin-top: 5px;
            margin-left: 25px;
        }

        /*  */
        
    </style>

</head>


<body>



    <div class="axil-signin-area">

        <div class="row">
            <div class="col-xl-4 col-lg-6">
                <div class="axil-signin-banner bg_image bg_image--10">
                  <div class="home-logout">  <a href="index">Home</a> <a href="/logout">Logout</a></div>
                 <h4>Welcome {{ Session::get('user')['name'] }} </h4>
                    <h3 class="title">We Will Direct You To The Nearest Blood Bank</h3>
                </div>
            </div>
            <div class="col-lg-6 offset-xl-2">
                <div class="axil-signin-form-wrap">
                    <div class="axil-signin-form">
                        <h3 class="title"></h3>
                        <p class="b2 mb--55">To Find Nearest Blood Bank & View Details</p>
                        <div class="des">
                            <p>1. You have to enter your area pin-code. </p>
                            <p>2. Each and every registered blood bank will appear.</p>
                            <p>3. then you will see blood bank's sshort details.</p>
                            <p>4. Select one blood bank and click "View Details".</p>
                            <p>3. By clickig "View Details" option you can see blood bank's all details.</p>
                            <p>6. you can direct contact to blood bank or you can book.</p>
                        </div>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="container">
            <div class="search_wrap search_wrap_3">
                <form action="/search" method="post">
                    @csrf
                <div class="search_box">
                    <input type="text" class="input" name="pin" placeholder="search...">
                    <div class="btn btn_common">
                        {{-- <a href="search" class="fas fa-search"></a> --}}
                        {{-- <input type="submit" class="fas fa-search" /> --}}
                        <button type="submit" class="fas fa-search"></button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>

    
</body>

</html>