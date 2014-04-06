<?php
$db_conx = mysqli_connect("localhost", "kelvine2_kelvin", "Checkme1", "kelvine2_social");
// Evaluate the connection
if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit();
} else {
	echo "Successful database connection, happy coding!!!";
}
?>