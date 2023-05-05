<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new garbage</title>
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
</head>
<body>
<section class="registr">
    <div class="registr_container">
        <a href="index.php" class="registr_head">
            <i class="fas fa-trash-alt"></i>
            <h2>SmartGarbage</h2>
        </a>
        <form action="add_new_garbage.php" method="post" class="registr_frm">
            <input name = 'id'type="text" placeholder="Enter garbage id">
            <input name = 'name' type="text" placeholder="Enter garbage name">
            <input name = 'location' type="text" placeholder="Enter garbage location">
            <button class="btn cta_btn">Sign In</button>
        </form>
        <div class="registr_restore">
            <a href="#">Forgot your password?</a>
            Don`t have an account? <a href="registration.php"><span>Sign Up</span></a>
        </div>
    </div>
</section>
</body>
</html>