<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Put OTP</title>
</head>
<body>
    <form action="/otpVerify" method="post">
        @csrf
        <input type="hidden" name="email" value="{{ $email }}" readonly/>
        <input type="text" name="otp" placeholder="Enter Yoyur OTP">
        <input type="text" name="password" placeholder="SetNew Password">
        <button type="submit">Reset</button>
    </form>
</body>
</html>