
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Rangya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="stylerangya.css">

</head>
<body>
    <div class="row">
        <div class="col">

        </div>
        <div class="col">
        <form class="" action="registrationrangya.php" method="post" enctype="multipart/form-data">
    <div class="container form-container p-5 w-55 border border-dark rounded m-5">
    <div class="row">
        <div class="col text-center">
            <h1 class="display-1 mb-4">Register</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <div class="form-outline">
                <label class="form-label" for="fullname"><b>Full Name</b></label>
                <input type="text" id="fullname" name="fullname" class="form-control" />
            </div>
        </div>
        <div class="col-4">
                <label for="" class="mb-2"><b>Role</b></label>
                <select name="role" id="" class="form-control">
                    <option selected disabled value="">Choose your role</option>
                    <option value="Customer">Customer</option>
                    <option value="Employee">Employee</option>
                    <option value="Admin">Admin</option>
                </select>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-outline">
                <label class="form-label" for="email"><b>Email</b></label>
                <input type="text" id="email" name="email" class="form-control" />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-outline">
                <label class="form-label mt-2" for="username"><b>Username</b></label>
                <input type="text" id="username" name="username" class="form-control" />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-outline">
                <label class="form-label mt-2" for="password"><b>Password</b></label>
                <input type="password" id="password" name="password" class="form-control" />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col mt-3">   
            <input type="submit" name="sub" id="sub" class="btn btn-primary btn-block w-100 register-btn" value="Register!">
        </div>
    </div>
  </div>
</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>

<?php

    require_once "dbconnectionrangya.php";

    //debug connection
    if($conn->connect_error){
        die("Connection Error!");
    }else{
        echo"Connected";
    }

    if(isset($_POST['sub'])){
        //user inputs
        $ryfullname = $_POST['fullname'];
        $ryrole = $_POST['role'];
        $ryemail = $_POST['email'];
        $ryusername = $_POST['username'];
        $rypassword = $_POST['password'];
        
        $insertsql = "Insert into 
        table_user (full_name,role,email,username,password)
        values('$ryfullname','$ryrole','$ryemail','$ryusername','$rypassword')";

        $ryresult = $conn->query($insertsql);

        if($ryresult == TRUE){
        ?>

        <script>

        Swal.fire({
        position: "center",
        icon: "success",
        title: "Account Successfully Created",
        showConfirmButton: false,
        timer: 1500
        });
        </script>

        <?php
        }else{
            echo $echo->error;
        }

    }

?>