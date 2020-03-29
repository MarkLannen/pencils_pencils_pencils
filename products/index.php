<!-- Used some of the logic in this page from this php tutorial on youtube: https://www.youtube.com/watch?v=msO37iodcw8&list=PL0eyrZgxdwhwBToawjm9faF1ixePexft-&index=63 -->

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
        <a href="../index.html" class="main-header__brand">
            <img src="../images/ppp-logo-75px.png" alt="Pencils Pencils Pencils logo">
        </a>
    </div>
    <nav class="main-nav">
        <ul class="main-nav__items">
            <li class="main-nav__item">
                <a href="index.html">Products</a>
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
            <li>
                <input type="checkbox" id="no2Pencil" />
                <label for="no2Pencil"><img class="thumbnail" src="images/PencilsThumbnails/colored1_thumbnail.jpg" alt="Picture of colored pencils in a horizontal row.">
                </label>
            </li>
            <li>
                <input type="checkbox" id="coloredPencils-1"/>
                <label for="coloredPencils-1">
                <img class="thumbnail" src="images/PencilsThumbnails/colored2_thumbnail.jpg" alt="Picture of colored pencils in a vertical row.">
                </label>
            </li>
            <li>
                <input type="checkbox" id="colored3"/>
                <label for="colored3">
                    <img class="thumbnail" src="images/PencilsThumbnails/colored3_thumbnail.jpg" alt="Picture of colored pencils in a box and a hand holding a colored pencil.">
                </label>
            </li>
            <li>
                <input type="checkbox" id="colored4"/>
                <label for="colored4">
                    <img class="thumbnail" src="images/PencilsThumbnails/colored4_thumbnail.jpg" alt="Picture of colored pencils in a haphazard row.">
                </label>
            </li>
            <li>
                <input type="checkbox" id="colored5"/>
                <label for="colored5">
                    <img class="thumbnail" src="images/PencilsThumbnails/colored5_thumbnail.jpg" alt="Picture of colored pencils in a diagonal row.">
                </label>
            </li>
            <li>
                <input type="checkbox" id="colored6"/>
                <label for="colored6">
                    <img class="thumbnail" src="images/PencilsThumbnails/colored6_thumbnail.jpg" alt="Picture of colored pencils arranged in a circle.">
                </label>
            </li>
            <li>
                <input type="checkbox" id="colored7"/>
                <label for="colored7">
                    <img class="thumbnail" src="images/PencilsThumbnails/gray1_thumbnail.jpg" alt="Picture of 2 gray pencils on a yellow background.">
                </label>
            </li>
            <li>
                <input type="checkbox" id="colored8"/>
                <label for="colored8">
                    <img class="thumbnail" src="images/PencilsThumbnails/No2_1_thumbnail.jpg" alt="Picture of five number 2 pencils.">
                </label>
            </li>
            <li>
                <input type="checkbox" id="colored9"/>
                <label for="colored9">
                    <img class="thumbnail" src="images/PencilsThumbnails/No2_2_thumbnail.jpg" alt="Picture of number 2 pencils in a diagonal row.">
                </label>
            </li>
            <li>
                <input type="checkbox" id="colored10"/>
                <label for="colored10">
                    <img class="thumbnail" src="images/PencilsThumbnails/white1_thumbnail.jpg" alt="Picture of white pencil on a gray background.">
                </label>
            </li>
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