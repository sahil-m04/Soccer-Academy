<?php

$con = mysqli_connect('localhost', 'root');

if($con)
{
    echo "Connection successful";
}
else{
    echo "Connection Unsuccessful";
}

mysqli_select_db($con, 'contactus');

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = "insert into userinfodata (name,email,mobile,comments) values('$name','$email','$mobile','$comments')";

echo "$query";

mysqli_query($con,$query);

header('location:index.php');
?>