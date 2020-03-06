<html>
<head>
<title>Log In</title>
<link rel="stylesheet" type="text/css" href="Data/css/fyp.css">
</head>
<body>
	<div class="forgetyourpassword">
        <div class="head">
		<h1>Forget Your Password</h1>
        </div>    
            <form method="POST" action="Fypass.php">
			<p>User Name</p>
			<input type="number" name="un" placeholder="Enter Phone number">
			<p>Phone Number</p>
			<input type="number" name="pn" placeholder="Enter 4 digit OTP">
                        <input type="submit" name="s" value="sum">
        </form>
        </div>        

</body>
</html>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
<?php
if (isset($_POST['s'])) {
    $uname = $_POST['un'];
    $pnum = $_POST['pn'];

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