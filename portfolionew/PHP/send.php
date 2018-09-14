<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$websait = $_POST['websait'];
$request = $_POST['request'];

$to = "mnikolov00@gmail.com";
$subject = "Request from Mnikolov.net";
$body = "This is messagge from \n\n $name \n phone number: $phone \n Email: $email \n Website: $websait \n\n Message: \n $request";

mail ($to, $subject, $body);

echo "Message send! Please <a href='home.html'>click here</a> to start over."

?>