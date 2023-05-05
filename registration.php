<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
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
        <form action="save_user.php" class="registr_frm" method="post" >
            <input name = "name" type="text" placeholder="Enter your name">
            <input name = "surname" type="text" placeholder="Enter your surname">
            <input name = "email" type="email" placeholder="Enter your email">
            <input name = "password" type="password" placeholder="Enter your password">
            <button class="btn cta_btn">Sign In</button>
        </form>
<!--        <div class="registr_restore">-->
<!--            <a href="#">Forgot your password?</a>-->
<!--            Don`t have an account? <a href="#"><span>Sign Up</span></a>-->
<!--        </div>-->
    </div>
</section>
</body>
</html>