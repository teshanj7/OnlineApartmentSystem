<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "matter";
$con = new mysqli($host, $user, $pass, $db);
if (!$con)
{
    echo "There are some problems while connecting to the Database";
}

if(isset($_POST['submit']))
{
    $userType = $_POST['userType'];
    $subject = $_POST['subject'];
    $userEmail = $_POST['userEmail'];
    $userMatter = $_POST['userMatter'];
  
        
        $sql = "INSERT INTO customer(userType, subject, userEmail, userMatter) VALUES ('$userType', '$subject', '$userEmail', '$userMatter')";

        if ($con->query($sql) === TRUE) 
                {
                  echo "Success!";
                } 
                else 
                {
                    echo "Error: " . $sql . "<br>" . $con->error;
                }
    }
    else
    {
        die(mysqli_error($con));
    }

?>