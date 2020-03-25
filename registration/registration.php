

<!-- <!DOCTYPE html>
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
        <a href="../index.html" class="main-header__brand">
            <img src="../images/ppp-logo-75px.jpg" alt="Pencils Pencils Pencils logo">
        </a>
    </div>
    <nav class="main-nav">
        <ul class="main-nav__items">
            <li class="main-nav__item">
                <a href="../products/index.html">Products</a>
            </li>
            <li class="main-nav__item">
                <a href="../login/index.php">Login</a>
            </li>
            <li class="main-nav__item main-nav__item--cta">
                <a href="../registration/index.php">Registration</a>
            </li>
        </ul>
    </nav>
</header> -->

<?php  

// I learned most of the logic below re: a youtube tutorial here: https://www.youtube.com/watch?v=LC9GaXkdxF8

if(isset($_POST['submit'])) {
   
    echo "Went here". "<br/>";
    require '../dbConnection.php';
   
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $emailAddress = $_POST['emailAddress'];
    $userName = $_POST['userName'];
    $password = $_POST['password'];
   
    $sql = "SELECT userName from users WHERE userName=?";

    $stmt = mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql)) {
    echo "database connection failed";
} else {
    echo "Statement Prepared". "<br/>";
    mysqli_stmt_bind_param($stmt, "s", $userName);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $resultCheck = mysqli_stmt_num_rows($stmt);
    echo "resultCheck = ". $resultCheck. "<br/>";
};

    if($resultCheck > 0) {
        echo "User name is already taken";
        exit();
    } else {
        
        $sql = "INSERT INTO users (firstName, lastName, emailAddress, userName, password) VALUES(?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
            echo "database connection failed";
            exit();
    }else {
        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "sssss", $firstName, $lastName, $emailAddress, $userName, $hashedPwd);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        echo "You have successfully registered!";
        exit();
        }
    }
    
}
?>


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