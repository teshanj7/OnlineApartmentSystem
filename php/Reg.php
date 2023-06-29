<?php
    $first_name=$_POST['Firstname'];
    $sur_name=$_POST['Surname'];
    $email=$_POST['Email'];
    $address=$_POST['Address'];
    $password=$_POST['pass1'];
    $password2=$_POST['pass2'];
    $phone=$_POST['telephone'];
    $gender=$_POST['Gender'];

//connect database
    $conn= new mysqli('localhost','root','','registration');

    if($conn->connect_error)
    {
        die('Connection Failed : '.$conn->conect_errror);
    }
    else
    {
        $stmt=$conn->prepare("insert into reg_details(first_name,sur_name,email,address,password,password2,phone,gender)values(?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssis",$first_name,$sur_name,$email,$address,$password,$password2,$phone,$gender);
        $stmt->execute();
        echo"Registration Successfully!";
        $stmt->close();
        $conn->close();
    }

?>