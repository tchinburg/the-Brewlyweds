<html>
<body>
 
 
<?php
define('DB_NAME', 'thebrewlyweds_net');
define('DB_USER', 'thebrewlyweds_net');
define('DB_PASS', 'tLd4wPjX');
define('DB_HOST', 'thebrewlyweds.net.mysql');

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS);

if(!$link)
{
    die('Could not connect to database: ' . mysqli_error());
}

$db_select = mysqli_select_db($link,DB_NAME);

if(!$db_select)
{
    die('Can\'t use ' . DB_NAME . ': ' . mysqli_error());
}

echo "HOLY EFF";
$fname = mysqli_real_escape_string($link,$_POST['fname']);
$lname = mysqli_real_escape_string($link,$_POST['lname']);
$address = mysqli_real_escape_string($link,$_POST['address']);
$aptnum = mysqli_real_escape_string($link,$_POST['aptnum']);
$city = mysqli_real_escape_string($link,$_POST['city']);
$state = mysqli_real_escape_string($link,$_POST['state']);
$zipcode = mysqli_real_escape_string($link,$_POST['zipcode']);
$email =  mysqli_real_escape_string($link,$_POST['email']);
$attending =  mysqli_real_escape_string($link,$_POST['attending']);
$numadults =  mysqli_real_escape_string($link,$_POST['numadults']);
$numkids =  mysqli_real_escape_string($link,$_POST['numkids']);
$drinks = mysqli_real_escape_string($link,$_POST['drinks']);
$meal  =  mysqli_real_escape_string($link,$_POST['meal']);
$message =  mysqli_real_escape_string($link,$_POST['message']);


{
$query = "INSERT INTO rsvp (fname, lname, address, aptnum, city, state, zipcode, email, attending, numadults, numkids, drinks, meal, message) VALUES ('$fname', '$lname', '$address', '$aptnum', '$city', '$state', '$zipcode', '$email', '$attending', '$numadults', '$numkids', '$drinks', '$meal', '$message')";

if(!mysqli_query($link,$query))
{
    die("DAMMIT");
}
else{ echo "Success"; }

mysqli_close($link);

}


		
?>
<a href="index.html">Go Back</a>


</body>
</html>

