<?php 
    $conn = require 'db.php';

    if(isset($_POST["form-1"]))
    {
        $name = $_POST['first_name'] . $_POST['last_name'] ;
        $email = $_POST['email'];
        $phoneno = $_POST['phoneNo'];
        $message = $_POST['message'];
        $query = "insert into formData ( name, phoneNo, email, message) values(?,?,?,?)";


        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssss", $name ,$phoneno, $email, $message );

        if($stmt->execute())
        {
            header("Location: contact.php?status=success");
            exit();
        }
        else{
            header("Location: contact.php?status=false");
            exit();
        }
    }

    else if(isset($_POST["form-2"]))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phoneno = $_POST['mobile'];
        $message = $_POST['message'];
        $services = $_POST['services'];
        $budget = $_POST['budget'];
        $query = "insert into form2data ( name, mobile, email, message, services, budget) values(?,?,?,?,?,?)";


        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssssss", $name ,$phoneno, $email, $message, $services, $message );

        if($stmt->execute())
        {
            header("Location: contact.php?status=success");
            exit();
        }
        else{
            header("Location: contact.php?status=false");
            exit();
        }
    }

    $conn->close();
    $stmt->close();

?>