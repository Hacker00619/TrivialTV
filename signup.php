<!DOCTYPE html>
<html>
    <head>
        <title>Log In</title>
        <link rel="stylesheet" type="text/css" href="Data/css/signup.css">
    </head>
    <body>
        <div class="signupbox">
            <div class="head">
                <h1>Sign up Here</h1>
            </div>    
            <form method="Post" action="signup.php">
                <p>username</p>
                <input type="text" name="usern" placeholder="Enter username">
                <p>Phone Number</p>
                <input type="number" name="phonen" placeholder="Enter Phone number">
                <p>Email id</p>
                <input type="text" name="emid" placeholder="Enter Email id">
                <p>Enter password</p>
                <input type="password" name="pass" placeholder="Enter Password"><br>
                <p>Confirm password</p>
                <input type="password" name="passc" placeholder="Enter Password"><br>
                <input type="submit" name="s" value="sum">
            </form>
        </div>        

    </body>
</html>

<?php
if (isset($_POST['s'])) {
    $uname = $_POST['usern'];
    $pnum = $_POST['phonen'];
    $em = $_POST['emid'];
    $pas = $_POST['pass'];
    $pasc = $_POST['passc'];

    if ($pas == $pasc) {
        $conn = new mysqli("localhost", "root", "", "trivial") or die("Connect failed: %s\n" . $conn->error);
        
        $ep = base64_encode($pas);
        
        $q = "INSERT INTO loinfo VALUES ('$uname','$pnum','$em','$ep')";
        mysqli_query($conn, $q);
    } else {
        echo '<center><h1>Confermation password failed</h1></center>';
    }
}
?>
 




