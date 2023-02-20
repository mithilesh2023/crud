<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-info">
    <div class="container border border-secondary bg-white mt-4  col-5">
        <label for="" class="fs-1 mx-auto text-primary">Registration Form</label>
    <form action="#" method="post">
        <div class="mb-3 mt-3 row d-flex">
            <label for="" class=" col-4 form-label">First Name</label>
            <input type="text" class="form-control w-50 " name="fname" placeholder="Enter Your First Name ">
        </div>

        <div class="mb-3 row  d-flex">
            <label for="" class=" col-4 form-label">second Name</label>
            <input type="text" class="form-control w-50" name="lname" placeholder="Enter Your second Name ">
        </div>

        <div class=" row mb-3 d-flex">
            <label for="" class=" col-4 form-label">Email</label>
            <input type="email" class="form-control w-50" name="email" placeholder="name@example.com">
        </div>

        <div class="mb-3 row d-flex">
            <label for="" class=" col-4 form-label">Password</label>
            <input type="password" class="form-control w-50" name="password" placeholder="Enter Your password">
        </div>
        <div class="d-flex row mb-2">
        <label for="" class="col-4">Gender</label>
        <select class="form-select w-50" name="gender" >
            <option value="not selected">Select</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
        </div>
        <div class=" row mb-3 d-flex">
            <label for="" class="form-label col-4">Mobile Number</label>
            <input type="number" class="form-control  w-50" name="number" placeholder="Enter Your number">
        </div>

        <div class="mb-3 row d-flex">
            <label for="" class="form-label col-4">Address</label>
            <textarea class="form-control w-50 "name="address"  rows="2"></textarea>
        </div>

        <button class="btn btn-success w-100 mb-2 fs-4" type="submit" name="submit">Submit</button>
    </form>
    </div>

</body>
</html>

<?php
if(isset($_POST['submit'])){
    $first_name = $_POST['fname'];
    $last_name  = $_POST['lname'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];
    $gender     = $_POST['gender'];
    $number     = $_POST['number'];
    $address    = $_POST['address'];

    $query="INSERT INTO form VALUES('$first_name','$last_name','$email','$password','$gender','$number','$address')";

    $data=mysqli_query($conn,$query);

    if($data)
    {
        echo "Data inserted successfully";
    }
    else
    {
        echo "Failed";
    }
 }
?>
