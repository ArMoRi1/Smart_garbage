<?php
include("include/database.php");
global $conn;
$name = $_POST['name'];
$surname = $_POST['surname'];
$login = $_POST['email'];
$password = $_POST['password'];
if (isset($_POST['name'])) {

    if ($name == ''){
        unset($name);
    }
}
if (isset($_POST['surname'])) {

    if ($surname == '')
    {
        unset($surname);
    }
}
if (isset($_POST['email'])) {

    if ($login == '')
    {
        unset($login);
    }
}

if (isset($_POST['password'])) {

    if ($password == ''){
        unset($password);
    }
}

if ($name==false or $surname==false or $login==false or $password==false)
{
    echo "<div>"."Please be attentive. You did not fill in all the fields!"."</div>";
}

$name = stripslashes($name);
$surname= stripslashes($surname);
$login = stripslashes($login);
$password = stripslashes($password);

$name = htmlspecialchars($name);
$surname = htmlspecialchars($surname);
$login = htmlspecialchars($login);
$password = htmlspecialchars($password);

$name = trim($name);
$surname = trim($surname);
$login = trim($login);
$password = trim($password);


$result = mysqli_query( $conn,"SELECT id FROM users WHERE login='$login'");
$myRow = mysqli_fetch_array($result);
if (!empty($myRow['id'])) {
    exit ("The login you entered is already in use, please enter another login");
}
$result2 = mysqli_query ($conn,"INSERT INTO users (login,password,name,surname) VALUES('$login','$password','$name', '$surname')");
if ($result2=='TRUE')
{
    echo "Registration was successful! Now you can sign in to the site.<a href='login.php'>Sign In</a>";
} else {
    echo "Error! You are not a user of our site.";
}

?>