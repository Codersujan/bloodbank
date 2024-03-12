<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fill out this form</title>
    <link rel="stylesheet" href="css/order_form.css">
</head>

<body>

    <div class="container">
        <div class="title">
            <h2>Blood Order Form</h2>
        </div>
        <form action="/order" method="post">
            @csrf
            <div class="group">
                <label>
               
                    {{-- <span class="name">Name <span class="required">*</span></span> --}}
                    <input type="hidden" name="email" value="{{ Session::get('user')['email'] }}" readonly/>
                    <input type="hidden" name="bank_id" value="{{ $id}}" />
                    <input type="text" name="name" placeholder="Enter Name" required>
                </label>
                <label>
                    {{-- <span>Address <span class="required">*</span></span> --}}
                    <input type="text" name="address" placeholder="Enter full address" required>
                </label>
                <label>
                    {{-- <span>Pincode<span class="required">*</span></span> --}}
                    <input type="text" name="pin" placeholder="Enter Pin Code" required>
                </label>
                <label>
                    {{-- <span>Phone <span class="required">*</span></span> --}}
                    <input type="tel" name="ph_no" placeholder="Enter Phone Number" required> 
                </label>
                <h3>Select blood groups</h3>
                <div class="input-field">
                    <label>Select Blood Group</label>
                    <select name="group"  required>
                        <option  value="">Select One Of Them</option>
                        <option value="APOS">A+</option>
                        <option value="BPOS">B+</option>
                        <option value="ABPOS">AB+</option>
                        <option value="OPOS">O+</option>
                        <option value="ANEG">A-</option>
                        <option value="BNEG">B-</option>
                        <option value="ONEG">O-</option>
                        <option value="ABNEG">AB-</option>
                    </select>
                    <label>

                        <input type="number" name="quantity" placeholder="Enter Quantity(ml)" required>
                    </label>
                    <label>Do You Have Our Blood Bank Card ?</label>
                    <select name="card" required> 
                        <option value="">Select One Of Them</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>

                    </select>

                </div>


                <button type="submit">Place Order</button>
        </form>
        {{-- <button type="submit" onclick="window.location.href = 'payment.html';">Place Order</button>             --}}

    </div>
    <script>
      document.getElementById("mySelect").required=true;
      </script>
</body>

</html>
