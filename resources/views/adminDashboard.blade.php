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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
        <header>Admin Dashboard<br></header>
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
        {{-- <section class="section-1"> --}}

            <div class="container mt-5">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr class="table-primary">
                            <th scope="col">Bank</th>
                            <th scope="col">Address</th>
                            <th scope="col">Contact</th>
                            <th scope="col">User</th>
                            <th scope="col">User Contact</th>
                            <th scope="col">User Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->bank_name }}</td>
                            <td>{{ $item->Address }}</td>
                            <td>{{ $item->bank_ph_no }}</td>
                            <td>{{ $item->owen_name }}</td>
                            <td>{{ $item->owen_ph }}</td>
                            <td>{{ $item->Address }}</td>
                        </tr>
     
                        @endforeach
                    </tbody>
                </table>
                {{-- {{ $data->links() }} --}}
            </div>




        </section>

    </div>

</body>

</html>