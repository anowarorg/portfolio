<?php

include 'connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$query = "INSERT INTO lab05(name, email, phone, address, gender) VALUES('$name', '$email', '$phone', '$address', '$gender')";

$run = mysqli_query($con, $query);

if(!$run)
{
echo '<br>Submission Failed.';
}
else
{
echo '<br>Submission Successful.';
}

?>