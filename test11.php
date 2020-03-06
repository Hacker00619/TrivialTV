
<form method="Post" action="test11.php">

    <input type="submit" name="ln" value="Login">

</form>

<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$id = "rishi";



if (isset($_POST['ln'])) {
//$email = $_POST['emid'];
//$pasw = base64_encode($_POST['pas']);
//$femail;F
//$fpass;
//$conn = new mysqli("localhost", "root", "", "trivial") or die("Connect failed: %s\n" . $conn->error);
    $qu = mysqli_query($conn, "select pass,email from loinfo where uname='$id'")or die(mysqli_error($conn));
    while ($loginfo = mysqli_fetch_array($qu)) {
//$query1 = mysql_query("select * from employee where employee_id=$id", $connection);
//while ($row1 = mysql_fetch_array($query1)) {
//$femail = $loginfo['email'];
//$fpass = base64_decode($loginfo['pass']);

        echo $loginfo['email'];
        echo $loginfo['pass'];
    }
}
?>