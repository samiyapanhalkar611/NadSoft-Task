<?php
    //Making DB Connectivity
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "member_db";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $db); 

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $username = $_POST['username'];
        $optionalemail = $_POST['optionalemail'];
        $address = $_POST['address'];
        $address2 = $_POST['address2'];
        $countryId = $_POST['countryId'];
        $stateId = $_POST['stateId'];
        $zip = $_POST['zip'];
        // $checkshipping = $_POST['checkshipping'];
        // $infosave = $_POST['infosave'];
        $cardType = $_POST['cardType'];
        $nameoncard = $_POST['nameoncard'];
        $cardnumber = $_POST['cardnumber'];
        $expiry = $_POST['expiry'];
        $cvv = $_POST['cvv'];

        $query = "INSERT INTO member(FirstName, LastName, usernm, AddressOne, AddressTwo, Countries, States, ZipNumbers, Payment, Cardname, CardNumber, Expdate, CvvNo) VALUES($fname, $lname,$username, $address, $address2, $countryId, $stateId, $zip, $cardType, $nameoncard,$cardnumber,$expiry,$cvv)";

        if (mysqli_query($conn, $query)) {
            echo "Data added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Test | Round 2</title>
</head>
<body>
    <h1 class="text-center">Checkout Form</h1>
    <p class="p-5 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates ad ea labore dolor a sunt eligendi nobis laudantium! Deleniti excepturi eius totam voluptatibus necessitatibus ab distinctio reiciendis aliquid laudantium sed.</p>

    <section class="form">
        <div class="row">
            <div class="col-lg-8">
                <h3>Billing Address</h3>

                <form method="POST" action="index.php">
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="fname" class="form-label">First Name:</label>
                            <input type="text" class="form-control" name="fname" id="fname">
                        </div>

                        <div class="col-lg-6">
                            <label for="lname" class="form-label">Last Name:</label>
                            <input type="text" class="form-control" name="lname" id="lname">
                        </div>
                    </div>

                    <label for="username" class="form-label">Username:</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" class="form-control" name="username" placeholder="Username" >
                    </div>

                    <label for="optionalemail" class="form-label">Email(Optional):</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="optionalemail" placeholder="you@example.com" >
                    </div>

                    <label for="username" class="form-label">Address:</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="address" placeholder="1234 Main St" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <label for="username" class="form-label">Address2 (Optional):</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="address2" placeholder="Appartment or suite" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="row">
                        <div class="col-lg-5">
                            <label for="countryId" class="form-label">Country:</label>
                            <select name="countryId" class="countries form-control" id="countryId">
                                <option value="">Select Country</option>
                            </select>
                        </div>

                        <div class="col-lg-4">  
                            <label for="stateId" class="form-label">State:</label>
                            <select name="stateId" class="states form-control" id="stateId">
                                <option value="">Select State</option>
                            </select>
                        </div>

                        <div class="col-lg-3">
                            <label for="zip" class="form-label">Zip:</label>
                            <input type="number" class="form-control" name="zip" id="zip">
                        </div>
                    </div>

                    <hr>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="Credit Card" name="cardType" id="creditCard" checked>
                        <label class="form-check-label" for="creditCard">
                            Credit Card
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="Debit Card" name="cardType" id="debitCard">
                        <label class="form-check-label" for="debitCard">
                            Debit Card
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="PayPal" name="cardType" id="paypal">
                        <label class="form-check-label" for="paypal">
                            PayPal
                        </label>
                    </div>


                    <div class="row">
                        <div class="col-lg-6">
                            <label for="nameoncard" class="form-label">Name on Card:</label>
                            <input type="text" class="form-control" name="nameoncard" id="nameoncard">
                            <div id="emailHelp" class="form-text">Full name as displayed on Card</div>
                        </div>
                        <div class="col-lg-6">
                            <label for="lname" class="form-label">Credit Card Number:</label>
                            <input type="text" class="form-control" name="cardnumber" id="cardnumber">
                        </div>
                    </div>

                    <div class="row pb-5">
                        <div class="col-lg-4">
                            <label for="expiry" class="form-label">Expiration:</label>
                            <input type="month" class="form-control" id="expiry" name="expiry">
                        </div>
                        <div class="col-lg-4">
                            <label for="lname" class="form-label">CVV:</label>
                            <input type="text" class="form-control" id="cvv" name="cvv">
                        </div>
                    </div>

                    <hr>

                    <button type="submit" class="btn btn-primary submit-btn">Continue to Checkout</button>
                </form>
            </div>

            <div class="col-lg-4">
                <h3>Your Cart</h3>
                <div class="box">
                    <div class="row">
                        <div class="col-lg-10">
                            <h5>Product Name</h5>
                            <p>Brief Description: Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam incidunt ut enim dignissimos magni ab quasi earum fugiat eum. Quasi neque vitae voluptate id, soluta iusto illum iste libero doloremque!</p>
                        </div>
                        <div class="col-lg-2 price">
                            $20
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="row">
                        <div class="col-lg-10">
                            <h5>Total (USD)</h5>
                        </div>
                        <div class="col-lg-2 price">
                            $20
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149371669-1"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/countrystatecity.js?v2"></script>

</body>
</html>