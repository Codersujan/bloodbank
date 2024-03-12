<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password</title>
</head>
<body>
    <form action="/forgotPassword" method="post">
        @csrf
        <input type="email" name="email" placeholder="Enter Your Registered Mail Id" required>
        <button type="submit">Send OTP</button>
    </form>
</body>
</html>