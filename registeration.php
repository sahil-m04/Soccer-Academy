<?php

$con = mysqli_connect('localhost', 'root');

if($con)
{
    echo "Connection successful";
}
else{
    echo "Connection Unsuccessful";
}

mysqli_select_db($con, 'soccerclub');

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$position = $_POST['position'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];


$query = "insert into dataa (name,age,gender,position,email,mobile) values('$name','$age','$gender','$position','$email','$mobile')";

echo "$query";

mysqli_query($con,$query);

header('location:index.php');
?>