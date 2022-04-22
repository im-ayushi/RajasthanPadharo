<?php
$con = mysqli_connect('localhost', 'root');
if($con){
    echo "Connection Successful";
}
else{
    echo "Not connected";
}

mysqli_select_db($con, 'userdata1');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$country = $_POST['country'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$query = "insert into userinfodata (firstname, lastname, country, email, comment) values ('$firstname', '$lastname', '$country', '$email','$comment')";

echo "$query";

mysqli_query($con, $query);

header('location:index.php');
?>