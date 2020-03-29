

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <title>PencilsPencilsPencils</title>
    <link rel="shortcut icon" href="../images/ppp-logo-favicon-20px.png">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="registration.css">
    
</head>
<body>
<header class="main-header">
    <div>
        <a href="../index.php" class="main-header__brand">
            <img src="../images/ppp-logo-75px.jpg" alt="Pencils Pencils Pencils logo">
        </a>
    </div>
    <nav class="main-nav">
        <ul class="main-nav__items">
            <li class="main-nav__item">
                <a href="../products/index.php">Products</a>
            </li>
            <li class="main-nav__item">
                <a href="../login/index.php">Login</a>
            </li>
            <li class="main-nav__item main-nav__item--cta">
                <a href="../registration/index.php">Registration</a>
            </li>
        </ul>
    </nav>
</header>

<main class="register-page">
    <h1 class="register-title">Please register to create your account.</h1>
    <form name="registerForm" action="./registration.php" class="register-form" onsubmit="return validateFields()" method="POST">
        <label for="first-name">First name</label>
        <input name="firstName" type="text" id="first-name" aria-label="First Name">
        <label for="last-name">Last name</label>
        <input name="lastName" type="text" id="last-name" aria-label="Last Name">
        <label for="user-name">User Name</label>
        <input name="userName" type="text" id="user-name" aria-label="User Name">
        <label for="email" aria-label="email">E-Mail</label>
        <input name="emailAddress" id="email" aria-label="Email">      
        <label for="password">Password</label>
        <input type="password" name="password" id="password" aria-label="password">
        <div class="agree-terms__div">
            <input class="agree-terms__checkbox" type="checkbox" id="agree-terms" aria-label="Agree Terms checkbox">
            <label id="agree-terms__label" for="agree-terms">Agree to
                <a href="#">Terms &amp; Conditions</a>
            </label>
        </div>
        <button type="submit" name="submit" class="button" aria-label="Sign up button">Sign Up</button>
    </form>
</main>
<div>

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

<script src="registration.js"></script>
</body>

</html>