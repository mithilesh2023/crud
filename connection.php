<!-- link connection to database start -->
<?php
error_reporting(0);
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="curdform";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if($conn){
    //    echo "Connection ok";
    }
    else{
        echo "Connection failed".mysqli_connect_error();
    }
?> 
<!-- link connection to database end -->
