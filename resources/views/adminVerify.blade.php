<?php
    use App\HTTP\Controllers\BankController;
    $total=0;
    if(Session::has('admin')){
        $total=BankController::countBank();
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/style1.css">
<style>
    .w-5{
        display: none;
    }
    </style>
</head>

<body>
    <input type="checkbox" id="checkbox">
    <header class="header">
        <h2 class="u-name">
            <label for="checkbox">

                <i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
            </label>
        </h2>
        <header>Bank Verification <br></header>
        <i class="fa fa-user" aria-hidden="true"></i>
    </header>
    <div class="body">
        <nav class="side-bar">
            <div class="user-p">
                <img src="images/user.png">
                <h4>ADMIN</h4>
            </div>
            <ul>
                <li>
                    <a href="/adminDashboard">
                        <i class="fa fa-desktop" aria-hidden="true"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/adminVerify">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <span>Verify Bank{{ $total>0 ? "($total) ":" "}}</span>
                    </a>
                </li>
                <li>
                    <a href="/adminShowBank">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                        <span>All Bank</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-comment-o" aria-hidden="true"></i>
                        <span>Message</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-power-off" aria-hidden="true"></i>
                        <span><a href="/adminLogout"> Logout </a></span>
                    </a>
                </li>
            </ul>
        </nav>

        {{--  --}}
        <section class="section-1">
            @foreach ($values as $item)
                <form method="POST" action="/adminVerify">
                    @csrf
                    <div class="wholeform">
                        <div class="details personal">
                            <span class="title"> Serial No {{ $item['id'] }}</span>
                            <input type="hidden" name="id" value="{{ $item['id'] }}">
                            <div class="fields">
                                <div class="input-field">
                                    <label>Bank Name</label>
                                    <input type="text" name="bank_name" value="{{ $item['bank_name'] }}" readonly />
                                </div>
                                <div class="input-field">
                                    <label>Email</label>
                                    <input type="email" name="bank_email" value="{{ $item['bank_email'] }}"
                                        readonly />
                                </div>

                                <div class="input-field">
                                    <label>Mobile Number</label>
                                    <input type="number" name="bank_ph_no" value="{{ $item['bank_ph_no'] }}"
                                        readonly />
                                </div>

                                <div class="input-field">
                                    <label>Bank Address</label>
                                    <input type="text" name="address" value="{{ $item['Address'] }}" readonly>
                                </div>
                                <div class="input-field">
                                    <label>PIN Number</label>
                                    <input type="number" name="pin" value="{{ $item['pin'] }}" readonly />
                                </div>
                                <div class="input-field">
                                    <label>Service Time</label>
                                    <input type="text" name="service_time" value="{{ $item['service_time'] }}"
                                        readonly />
                                </div>

                                <div class="input-field">
                                    <label>Bank Registration No</label>
                                    <input type="email" name="reg_no" value="{{ $item['reg_no'] }}" readonly />
                                </div>

                                <div class="input-field">
                                    <label>Owner Name</label>
                                    <input type="text" name="owen_name" value="{{ $item['owen_name'] }}" readonly />
                                </div>
                                <div class="input-field">
                                    <label>Owner Phone No</label>
                                    <input type="text" name="owen_ph" value="{{ $item['owen_ph'] }}" readonly />
                                </div>
                                <div class="input-field">
                                    <label>Bank Category</label>
                                    <input type="text" name="category" value="{{ $item['category'] }}" readonly />
                                </div>

                                <div class="input-field">

                                    <input type="hidden" name="password" value="{{ $item['password'] }}" readonly />
                                </div>
                                <div class="input-field">

                                    <input type="hidden" name="bank_reg_id" value="{{ $item['bank_reg_id'] }}"
                                        readonly />
                                </div>
                                <div class="input-field">

                                    <input type="hidden" name="owner_gov_id" value="{{ $item['owen_gov_id'] }}"
                                        readonly />
                                </div>
                            </div>
                        </div>
                        <h3>Verification Images</h3>
                        <div class="images">
                            <label>Bank Id:-</label>
                            <div class="img">
                                <img class="img-thumbnail ms-6"
                                    src="{{ asset('storage/images/' . $item['bank_reg_id']) }}" width="480" />
                            </div>
                            <label>Owner Id:-</label>
                            <div class="img">
                                <img class="img-thumbnail ms-6"
                                    src="{{ asset('storage/images/' . $item['owen_gov_id']) }}"width="480" />
                            </div>

                        </div>
                        <div class="col-ms-25">
                            <button type="submit" id="btn1" class="submitBtn">Verify</button>
                            <button id="btn2" class="submitBtn"><a
                                    href="/cancel{{ $item['id'] }}">Cancel</a></button>
                        </div>

                    </div>

                </form>
                {{ $values->links() }}
            @endforeach

        </section>
        
    </div>

</body>

</html>
