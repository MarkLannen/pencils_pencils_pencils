<?php 
require '../dbConnection.php';

if(isset($_POST['login-submit'])) {
   
   echo "Went here". "<br/>";
   require '../dbConnection.php';

   $userName = $_POST['userName'];
   $password = $_POST['password'];

   if(empty($userName) || empty($password)) {
    header("Location: ./index.php?error=emptyfields");
    echo "Empty userName or password". "</br>";
    // exit(); 
    

   } else {
       $sql = "SELECT * FROM users WHERE userName=?";
       $stmt = mysqli_stmt_init($conn);

       if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ./index.php?error=sqlerror");  
       } else {
           mysqli_stmt_bind_param($stmt, "s", $userName);
           mysqli_stmt_execute($stmt);
           $results = mysqli_stmt_get_result($stmt);

           if($row = mysqli_fetch_assoc($results)) {
               $passwordCheck = password_verify($password, $row['$password']);
               

               if($passwordCheck == false)  {
                    header("Location: ./index.php?error=wrongpassword");
                    echo $userName;
                    echo $password;
                    exit();
               } else if ($passwordCheck == true) {
                    session_start();
                    $_SESSION['userLoggedIn'] = $row['userName'];

                    header("Location: ./index.php?login=success"); 
                    exit();

               } else {

               }

           } else {

           }
       }
   }

} else {
    header("Location ./index.php");
    exit();
}

