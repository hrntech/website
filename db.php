<?php 

    // $user = "root";
    // $password = "";
    // $host = "localhost";
    // $database = "hrn_tech";


    $password = "ramesh@1234";
    $user = "hrntechs_ramesh";
    $host = "localhost";
    $database = "hrntechs_hrn";

    $conn = new mySqli($host, $user, $password, $database);

    if($conn->connect_error)
    {
        die("connection Failed ". $conn->connect_error );
    }
    else{
        echo("connect successfully");
    }

    return ($conn);

?>