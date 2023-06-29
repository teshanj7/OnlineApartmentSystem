<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'apartmentfilterlist';

$con=mysqli_connect($host,$user,$pass,$db);
if($con)
    echo'connected successfully to apartmentfiltedlist';

$sql="insert into apartments(id,Name,City,Rooms,Washrooms,Kitchens,Area,Description,Price) values(001,'447 Luna Tower-Union Place, Colombo 02','Colombo',2,1,1,1679,'',75200000.00)";
$query = mysqli_query($con,$sql);
if($query)
    echo 'data inserted successfully';

?>