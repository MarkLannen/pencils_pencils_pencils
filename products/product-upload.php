<!-- The php logic in this page from this php tutorial on youtube: https://www.youtube.com/watch?v=msO37iodcw8&list=PL0eyrZgxdwhwBToawjm9faF1ixePexft-&index=63 -->

<?php 

if(isset($_POST['submit'])) {

    $newFileName = $_POST['fileName'];
    if($_POST['fileName']) {
        $newFileName = "product";  
    } else {
        $newFileName = strtolower(str_replace(" ", "-", $newFileName)); 
    }
    $imageTitle = $_POST['fileTitle'];
    $imageDesc = $_POST['fileDesc'];

    $file = $_FILES['file'];

    print_r($file);

    $fileName = $file["name"];
    $fileType = $file["type"];
    $fileTempName = $file["tmp_name"];
    $fileError = $file["error"];
    $fileSize = $file["size"];

    $fileExt = explode(".",$fileName);
    $fileActualExt = strtolower(end($fileExt));
    echo $fileActualExt;

    $allowed = array("jpg", "jpeg", "png");

    if(in_array($fileActualExt, $allowed)) {
        if($fileError === 0) {
           if($fileSize > 20000) {
                $imageFullName = $newFileName . "." . uniqid("", true) . "." . $fileActualExt;
                echo "<br>" . $imageFullName;
                $fileDestination = "../images/products" . $imageFullName;

                include_once '../dbConnection.php';

                if(empty($imageTitle) || empty($imageDesc)) {
                    header("Location: ./index.php?upload=empty");
                    exit();
                } else {
                    $sql = "SELECT * FROM products";
                    $stmt = mysqli_stmt_init($conn);

                    if(!mysqli_stmt_prepare($stmt, $sql)) {
                        echo "SQL statement failed";
                    } else {
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        $rowCount = mysqli_num_rows($result);
                        $setImageOrder = $rowCount + 1;

                        $sql = "INSERT INTO products (titleProduct, descProduct, imgFullNameProduct, orderProducts) 
                        VALUES (?, ?, ?, ?);";

                        if(!mysqli_stmt_prepare($stmt, $sql)) {
                            echo "SQL statement failed";
                        } else {
                            mysqli_stmt_bind_param($stmt, "ssss", $imageTitle, $imageDesc, $imageFullName, $setImageOrder);
                            mysqli_stmt_execute($stmt);

                            move_uploaded_file($fileTempName, $fileDestination);

                            header("Location: ./index.php?upload=success");
                        }
                    }
                }

           } else {
               echo "Max file size is 20mb.";
               exit();
           }
        } else {
            echo "Unfortunately an error has occurred.";
            exit();
        }

    } else {
        echo "Please upload either a file only with extension 'jpg' 'jpeg' or 'png' ";
        exit();
    }

}

?>