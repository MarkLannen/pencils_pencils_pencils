<?php  

// I learned most of the logic below re: a youtube tutorial here: https://www.youtube.com/watch?v=LC9GaXkdxF8

if(isset($_POST['submit'])) {
   
    echo "Went here";
    require '../dbConnection.php';
   
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $emailAddress = $_POST['emailAddress'];
    $userName = $_POST['userName'];
    $password = $_POST['password'];
        /*
    $firstName = "Addison";
    $lastName = "Boyer";
    $emailAddress = "Addison.Boyer@UMontana.edu";
    $userName = "AddiBoyer24";
    $password = "test123";
    */
    
    // echo $conn;
    
    $sql = "SELECT userID from users WHERE userID=?";

    $stmt = mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql)) {
    echo "database connection failed";
} else {
    echo "Statement Prepared";
    mysqli_stmt_bind_param($stmt, "s", $firstName);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $resultCheck = mysqli_stmt_num_rows(stmt);
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
        // mysqli_stmt_store_result($stmt);
        echo "You have successfully registered!";
        exit();
    }
    }
    
}



?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
    </head>

<body>
    
</body>

</html>