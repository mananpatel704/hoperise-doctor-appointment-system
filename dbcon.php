<?php
// Enter your Host, username, password, database below.
$conn = mysqli_connect("localhost","root","","hoperise");
if(!$conn){
	die("Connection Error !!".mysqli_connect_error());
}
 ?>