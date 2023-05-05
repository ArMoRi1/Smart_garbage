<?php
session_start();
include("include/database.php");
global $conn;
$login = $_POST['email'];
$password=$_POST['password'];
if (isset($login)) {
    if ($login == '') {
        unset($login);
    }
}
if (isset($password)) {

    if ($password =='') {
        unset($password);
    }
}
if (empty($login) or empty($password))
{
    exit ("You did not fill in all the fields!");
}

$login = stripslashes($login);
$login = htmlspecialchars($login);
$login = trim($login);

$password = stripslashes($password);
$password = htmlspecialchars($password);
$password = trim($password);

$result = mysqli_query($conn,"SELECT * FROM users WHERE login='$login'");
$myRow = mysqli_fetch_array($result);
if (empty($myRow['password']))
{
    exit ("The login or password you entered is incorrect.");
} else {
    if ($myRow['password']==$password)
    {
        $_SESSION['login'] = $myRow['login'];
        $_SESSION['id'] = $myRow['id'];
        echo "You have successfully entered the site! <a href='index.php'>Home</a>";
    }else {
        exit ("The login or password you entered is incorrect!");
    }
}
?>
