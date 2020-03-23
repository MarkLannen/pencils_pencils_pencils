<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <title>PencilsPencilsPencils</title>
    <link rel="shortcut icon" href="images/ppp-logo-favicon-20px.png">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="login.css">


</head>
<body>
<header class="main-header">
    <div>
        <a href="../index.html" class="main-header__brand">
            <img src="../images/ppp-logo-75px.png" alt="Pencils Pencils Pencils logo">
        </a>
    </div>
    <nav class="main-nav">
        <ul class="main-nav__items">
            <li class="main-nav__item">
                <a href="../products/index.html">Products</a>
            </li>
            <li class="main-nav__item">
                <a href="login/index.php">Login</a>
            </li>
            <li class="main-nav__item main-nav__item--cta">
                <a href="../registration/index.php">Registration</a>
            </li>
        </ul>
    </nav>
</header>
<main class="register-page">
    <h1 class="register-title">Please login your account.</h1>
    <form name="registerForm" action="../index.html" class="register-form" onsubmit="return validateFields()" method="POST">
        <label for="user-name">User Name</label>
        <input name="userName" type="text" id="user-name" aria-label="User Name">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" aria-label="password">

        <button type="submit" name="submit" class="button" aria-label="Login button">Login</button>
    </form>
</main>

<div>
<?php  

if(isset($_POST['submit'])) {

    require '../dbConnection.php';

    echo $_POST['userName']. "</br>";
    echo $_POST['password']. "</br>";
}

?>
</div>

<footer class="main-footer">
    <nav>
        <ul class="main-footer__links">
            <li class="main-footer__link">
                <a href="#">Contact</a>
            </li>
            <li class="main-footer__link">
                <a href="#">Privacy Policy</a>
            </li>
        </ul>
    </nav>
</footer>


</body>
</html>