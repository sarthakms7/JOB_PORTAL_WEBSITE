<?php
session_start();

//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost:3308', 'root', '', 'jobs');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
$phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$password = mysqli_real_escape_string($mysqli, $_POST['password']);
$cpassword = mysqli_real_escape_string($mysqli, $_POST['cpassword']);

//VALIDATION

if (strlen($fname) < 2) {
    echo 'fname';
} elseif (strlen($phone) < 2) {
    echo 'phone';
} elseif (strlen($email) <= 4) {
    echo 'eshort';
} elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo 'eformat';
} elseif (strlen($password) < 4) {
    echo 'pshort';
} elseif ($password != $cpassword) {
    echo 'nomatch';
	
//VALIDATION
	
} else {
	

	
	$query = "SELECT * FROM members WHERE email='$email'";
	$result = mysqli_query($mysqli, $query) or die(mysqli_error());
	$num_row = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
	
		if ($num_row < 1) {

			$insert_row = $mysqli->query("INSERT INTO members (fname, phone, email, password) VALUES ('$fname', '$phone', '$email', '$password')");

			if ($insert_row) {

				$_SESSION['login'] = $mysqli->insert_id;
				$_SESSION['fname'] = $fname;
				$_SESSION['phone'] = $phone;

				echo 'true';

			}

		} else {

			echo 'false';

		}
		
}

mysqli_close($mysqli);

?>