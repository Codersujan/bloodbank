<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <div class="main">

		<!-- Sign up form -->
		<section class="signup">
			<div class="container">
				<div class="signup-content">
					<div class="signup-form">
						<h2 class="form-title">User Registration</h2>
					
						<form method="POST" action="/UserRegister" class="register-form" id="register-form">
							@csrf
							<div class="form-group">
								<label for="name"><i
									class="zmdi zmdi-account material-icons-name"></i></label> <input
									type="text" name="name" id="name" placeholder="Your Name"  required/>
							</div>
							<div class="form-group">
								<label for="contact"><i class="zmdi zmdi-lock-outline"></i></label>
								<input type="number" name="ph_no" id="contact"
									onkeyup="test(this)" placeholder="Contact no" maxlength="10" required/>
							</div>
                            <div class="form-group">
								<label for="contact"><i class="zmdi zmdi-lock-outline"></i></label>
								<input type="text" name="email" id="contact"
									 placeholder="Email" required/>
							</div>
							<div class="form-group">
								<label for="pass"><i class="zmdi zmdi-lock"></i></label> <input
									type="text" name="address" id="" placeholder="Address(optional)" />
							</div>
							<div class="form-group">
								<label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
								<input type="text"  name="district" id=""
									placeholder="District" required/>
									
							</div>
							<div class="form-group">
								<label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
								<input type="text"  name="blood_group" id=""
									placeholder="Blood Group" />
									
							</div>
                            <div class="form-group">
								<label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
								<input type="password" name="pass" id="password"
									placeholder="Password" />
							</div>
                            <div class="form-group">
								<label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
								<input type="password" onkeyup="check(this)" name="Re_password" 
									placeholder="Re-password" />
									<h4 id="res"></h4>
							</div>
							<div class="form-group form-button">
								<input type="submit" name="signup" id="signup"
									class="form-submit" value="Register" />
							</div>
						</form>
					</div>
					<div class="signup-image">
						<figure>
							<img src="images/signup-image.jpg" alt="sing up image">
						</figure>
						<a href="/userLogin" class="signup-image-link">I have already
							joined</a>
					</div>
				</div>
			</div>
		</section>


	</div>
</body>
<script type="text/javascript">
    function test(ele){

if(isNaN(ele.value)){
  document.getElementById('res').style.color="red";
   //document.getElementById('result').innerText="Enter Only Number";
   alert("Enter Only Number");
}
else
{
    document.getElementById('res').innerText="";

    if(ele.value.length >10){
       // document.getElementById('result').innerText="mobile number only will be 10 digit ";
     alert("mobile number only will be 10 digit");
     
    }
    
}
  
}
var password=document.getElementById('password');
	  function check(ele){
	        if(ele.value.length>0){
	            if(ele.value != password.value){
	              document.getElementById('res').innerText="password does't mach";
	            }else{
	                document.getElementById('res').innerText="";

	            }
	        }else{
	            document.getElementById('res').innerText="Enter confirm password";

	        }
	    }
</script>
</html>