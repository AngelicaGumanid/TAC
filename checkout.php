<?php
//session_start();
?>

<?php 

$server = "localhost";
$username = "root";
$password = "";
$DB = "tac_db";

$connection = new mysqli($server,$username,$password,$DB);

if(isset($_POST['Submit']))
{
    $_SESSION['checkout'] = array ("firstname"=>$_POST["firstname"],"lastname"=>$_POST["lastname"],"Checkout_ID"=>$_POST["Checkout_ID"],"home_add"=> $_POST["home_add"],"phone"=>$_POST["phone"],"email"=>$_POST["email"]);
    header("Location: home.php");

    //$firstname = $_POST["firstname"];
    //$lastname = $_POST["lastname"];
    //$Checkout_ID = $_POST["Checkout_ID"];
    //$home_add = $_POST["home_add"];

    //$sqlvar = "INSERT INTO checkout(firstname,lastname,Checkout_ID,home_add) VALUES
    //('{$firstname}','{$lastname}','{$Checkout_ID}','{$home_add}') ,'{$phone}','{$email}')";

    //var_dump($connection->query($sqlvar));
    //var_dump($sqlvar);
}
?>

<DOCTYPE! html>

<html>

<head>

<link type="text/css" rel="stylesheet" href="css/checkout.css"/>

</head>

</body>

<div class="container">
  <div class="title">
      <h2>FORM</h2>
  </div>
<div class="d-flex">
  <form action="" method="">
    <label>
      <span class="fname">First Name <span class="required">*</span></span>
      <input type="text" name="firstname">
    </label>
    <label>
      <span class="lname">Last Name <span class="required">*</span></span>
      <input type="text" name="lastname">
    </label>

    <label>
      <span>Address <span class="required">*</span></span>
      <input type="text" name="houseadd" placeholder="Address" required>
    </label>
      <span>Country <span class="required">*</span></span>
      <input type="text" name="country"> 
    </label>
    <label>
      <span>Phone <span class="required">*</span></span>
      <input type="tel" name="phone"> 
    </label>
    <label>
      <span>Email Address <span class="required">*</span></span>
      <input type="email" name="email_add"> 
    </label>
    <div class="form-group">
                <button type="submit" name="Submit" class="btn btn-primary btn-lg btn-block">Procedd</button><br><br>
            </div>
            <a href="home.php" class="ca">Go back to Homepage</a>
          
  </form>
 </div>
</div>

</body>

</html>