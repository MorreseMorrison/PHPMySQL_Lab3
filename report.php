<!DOCTYPE html>
<html>
    <head>
        <title>Alien Abducted Me - Report an Abduction</title>
        </head>
<body>
    <h2>Aliens Abducted Me - Report an Abduction</h2>

<!-- Utilized Variables for Each Text Answer Boxes --->
<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$when = $_POST['when'];
$long = $_POST['long'];
$how = $_POST['how'];
$description = $_POST['description'];
$add = $_POST['add'];


//Utilized the Print Statement coupled With The Text Box Variables
echo "Thanks for Submitting the form <b>$fname</b> <b>$lname</b>.";
echo "<br>";
echo "Your were abducted on <b>$when</b> and gone for <b>$long</b>.";
echo "<br>";
echo "You said there were <b>$how</b> of them.";
echo "<br>";
echo "You described them as <b>$description</b>.";
echo "<br>";
//Radio Button Answer, how?
echo "We will contact you at <b>$email</b> if we have any relevant news.";
echo "<br>";
echo "You other comments were: <b>$add</b>.";






?>