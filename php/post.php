<?php
//connection attributes
    $Apart_Name=$_POST['apartName'];
    $Apart_City=$_POST['apartCity'];
    $Rooms=$_POST['rooms'];
    $Washrooms=$_POST['washrooms'];
    $Kitchens=$_POST['kitchens'];
    $Area=$_POST['area'];
    $Description=$_POST['des'];
    $Price=$_POST['price'];


//connect database
    $conn = new mysqli('localhost','root','','add_apartment');

    if($conn->connect_error)
    {
        die('Connection Failed : '.$conn->conect_errror);
    }
    else
    {
        $stmt=$conn->prepare("insert into apart_details(Apart_Name,Apart_City,Rooms,Washrooms,Kitchens,Area,Description)values(?,?,?,?,?,?,?)");
        $stmt->bind_param("ssiiids",$Apart_Name,$Apart_City,$Rooms,$Washrooms,$Kitchens,$Area,$Description);
        $stmt->execute();
        echo"Apartment Added Successfully!";
        $stmt->close();
        $conn->close();
    }

?>