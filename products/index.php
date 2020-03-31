<!-- The php logic in this page from this php tutorial on youtube: https://www.youtube.com/watch?v=msO37iodcw8&list=PL0eyrZgxdwhwBToawjm9faF1ixePexft-&index=63 -->

<php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CSCI411 Homework 1-15-2020 Home Page</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="products.css">
</head>
<body>
<header class="main-header">
    <div>
        <a href="../index.php" class="main-header__brand">
            <img src="../images/ppp-logo-75px.png" alt="Pencils Pencils Pencils logo">
        </a>
    </div>
    <nav class="main-nav">
        <ul class="main-nav__items">
            <li class="main-nav__item">
                <a href="./index.php">Products</a>
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
<div>
    <main class="thumbnails__main">
        <section class="thumbnails">
            <h1>Select from our wide variety of pencil products</h1>
            <ul>
            

            <?php 
            include_once '../dbConnection.php';

            $sql = "SELECT * FROM products ORDER BY orderProducts DESC";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)) {
                echo "SQL statement failed";
            } else {
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                // <input type="checkbox" id="colored10">
                // <label for="colored10">
                // </label>
                // <div style="background-image: url("images/final-images/'.$row["imgFullNameProduct"].'");">placeholder text</div>
               
                $ul = "<ul>";
                while($row = mysqli_fetch_assoc($result)) {
                    $ul = $ul.'<li>
                    
                    <label for="colored10">    
                    <input type="checkbox" id="colored10"/>                    
                    <img src="./images/final-images/'.$row["imgFullNameProduct"].'">
                    </label>     
                             
                
                    <h2>'. $row["titleProduct"] . '</h2>
                    <p>' . $row["descProduct"] . '</p>
                </li>';
                }
                $ul = $ul."</ul>";

                echo $ul;
            }
          
            ?>

            </ul>
        </section>
       

       
          <div class="imgUpload">
            <section class="">
                <h2>Upload new products</h2>
                <form action="./product-upload.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="fileName" placeholder="File Name...">
                    <input type="text" name="fileTitle" placeholder="Image Title...">
                    <input type="text" name="fileDesc" placeholder="Image Description...">
                    <input type="file" name="file">
                    <button type="submit" name="submit">Upload</button>

                </form>

            </section>
        </div>
    </main>
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