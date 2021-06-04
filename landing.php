<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "tac_db";
try {
	$Custom_ID = uniqid();
    $fname= $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
	$message = $_POST['message'];
	
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
   $sql = "INSERT INTO visitor_contactus (Custom_ID, Visitor_Firstname, Visitor_Lastname, Visitor_Email, Visitor_Messages)
    VALUES ('$Custom_ID', '$fname', '$lname','$email','$message')";
    $conn->exec($sql);
    echo "";
    }
catch(PDOException $e)
    {
    	echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>

<head>
<link href="css/landingstyle.css" rel="stylesheet">
</head>

<div id="reserve" class="content-wrapper-lg text-center astonish" data-animation="zoomIn">

<h2> Thank you for your respond !!<br>
Click to go back to the page.</h2>
<a href = "index.php" class="btn btn-outline-purple">TORI ANIME COLLECTIBLES</a>

<div>