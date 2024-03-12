<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bank Registration Page</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        h6 {
            color: rgb(255, 0, 30);
        }
    </style>
</head>

<body>
    {{-- <nav class="navbar navbar-expand-lg navbar-light bg-gray">
        <div class="container-fluid">
            <a class="navbar-brand" href="index"><img src="images/logo.png" width="80"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <h3> <a class="nav-link active" aria-current="page" href="index">Home</a></h3>
                    </li>

            </div>
        </div>
    </nav> --}}

    @if (Session::get('message'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ Session::get('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
   

        <!-- Sign up form -->
        <div class="container">
            <header>Bank Registration Details</header>
           
                <form method="POST" action="/BankRegister" class="register-form" id="register-form" enctype="multipart/form-data">
                    @csrf
                    <div class="wholeform">
                        <div class="details personal">
                            {{-- <span class="title"> Serial No {{ $item['id'] }}</span> --}}

                            <div class="fields">
                                <div class="input-field">
                                    <label>Blood Bank Name</label>
                                    <input type="text"  name="name" required/>
                                </div>
                                <div class="input-field">
                                    <label> Bank Email</label>
                                    <input type="email"  name="email" required/>
                                </div>

                                <div class="input-field">
                                    <label>Mobile Number</label>
                                    <input type="text" onkeyup="test(this)" name="contact" required/>
                                    
                                </div>

                                <div class="input-field">
                                    <label>Bank Address</label>
                                    <input type="text" name="address" required/>
                                </div>
                                <div class="input-field">
                                    <label>Pin Code Number</label>
                                    <input type="text"  name="pin" required/>
                                </div>
                                <div class="input-field">
                                    <label>Select Service Time</label>
                                    <select name="serv_time">
                                        <option disabled="disabled" selected="selected">Select One Of Them</option>
                                        <option value="24X7">24X7</option>
                                        <option value="12X7">12X7</option>
                                        <option value="8X7">8X7</option>
                                    </select>
                                </div>
                                {{-- <div class="input-field">
                                    <label> Bank Service Time</label>
                                    <input type="text" name="serv_time" required/>
                                </div> --}}

                                <div class="input-field">
                                    <label>Bank Registration No</label>
                                    <input type="text"  name="reg_no" required/>
                                </div>

                                <div class="input-field">
                                    <label>Owner Name</label>
                                    <input type="text" name="owner_name" required/>
                                </div>
                                <div class="input-field">
                                    <label>Owner Phone No</label>
                                    <input type="number" onkeyup="test(this)" name="owner_ph" required/>
                                </div>
                                 <div class="input-field">
                                    <label>Select Bank Type</label>
                                    <select name="category">
                                        <option disabled="disabled" selected="selected">Select One Of Them</option>
                                        <option value="Private">Private</option>
                                        <option value="Government">Government</option>
                                        <option value="Public Private Partnership">Public Private Partnership</option>
                                        
                                    </select>
                                </div>
                                <div class="input-field">
                                   <label>Password</label>
                                    <input type="password" id="password" name="password" required/>
                                </div>
                                <div class="input-field">
                                    <label>Confirm Password</label>
                                     <input type="password" onkeyup="check(this)" required/>
                                     <h6 id="res"></h6>
                                 </div>
                            </div>
                       
                        <h3>Upload Images</h3>
                        <div class="images">
                            <label>Bank Id:-</label>
                            <input type="file" name="bank_reg_id"/>
                        </div>
                        <div class="images">
                            <label>Bank Owner Id:-</label>
                            <input type="file" name="owen_gov_id"/>
                        </div>
                        <button type="submit" class="submitBtn">Submit</button>
                    </div>
                    </div>

                </form>
           


        </div>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="alert/dist/sweetalert.css">
     <script type="text/javascript">
	
	//  var obj=document.getElementById("status").value;
	//  if(obj=="success"){
	// 	 swal("Congratualation","Your Account Created","success");
	//  }
	 
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
	 
	</script>

</body>

</html>
