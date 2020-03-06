<!DOCTYPE html>
<html>
    <head>
        <title>Log In</title>
        <link rel="stylesheet" type="text/css" href="Data/css/login.css">
    </head>
    <div class="loginpage">
        <h1>log in Here</h1>
    </div>	
    <div class="content">
        <form method="Post" action="Login.php">
            <p>Email id</p>
            <input type="email" name="emid" placeholder="Enter username">
            <p>password</p>
            <input type="password" name="pas" placeholder="Enter Password"><br>
            <input type="submit" name="ln" value="Login">
            <a href="forgetyourpassword.html">Forgot Your Password?</a><br>
        </form>
    </div>
</body>
</html>
<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$conn = new mysqli("localhost", "root", "", "trivial") or die("Connect failed: %s\n" . $conn->error);
$femail;
$fpass;
$emailid;
$pasw;
if (isset($_POST['ln'])) {

    $emailid = $_POST['emid'];
    $pasw = $_POST['pas'];
    $qu = mysqli_query($conn, "select email, pass from loinfo where email = '$emailid'")or die(mysqli_error($conn));
    while ($reguser = mysqli_fetch_array($qu)) {

        $femail = $reguser['email'];
        $fpass = base64_decode($reguser['pass']);
    }
     if ($emailid == $femail && $pasw == $fpass) {
      echo 'Success';
      header('Location: index.php');
      } else {
      echo 'Incorrect Email and password';
      }

   
}
?>