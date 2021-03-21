<?php
session_start();
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "blog"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
else
{
    echo("all good");
}
$firstname = mysqli_real_escape_string($con, $_POST['fname']);
$lastname = mysqli_real_escape_string($con, $_POST['lname']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$age = mysqli_real_escape_string($con, $POST['age']);
if (strlen($firstname) < 1) {
    echo 'fe';
} elseif (strlen($lastname) < 1) {
    echo 'le';
} elseif (strlen($password) < 1) {
    echo 'pe';
} else if(strlen($age)<1)
{
    echo 'ae';
}

$query = "SELECT * FROM members WHERE First='$firstname'";
$result = mysqli_query($con, $query) or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($num_row < 1) {

    $insert_row = $con->query("INSERT INTO members (First, Last, Password, Age) VALUES ('$firstname', '$lastname', '$password', '$age')");

    if ($insert_row) {

        $_SESSION['login'] = $con->insert_id;
        $_SESSION['firstname'] = $firstname;
        $_SESSION['lastname'] = $lastname;

        echo 'true';

    }

} else {

    echo 'false';

}





	

