<?php
    require_once('connection.php');
?>


<?php

    if (isset($_POST['submit'])) {
                
        $name = $_POST['name'];
        $price = $_POST['price'];
        $totalFiles = count($_FILES['fileImg']['name']);
        $filesArray = array();

        for($i=0; $i<$totalFiles; $i++){
            $imageName = $_FILES['fileImg']['name'][$i];
            $tmpName = $_FILES["fileImg"]["tmp_name"][$i];
    
            $imageExtension = explode('.', $imageName);
            $imageExtension = strtolower(end($imageExtension));
    
            $newImageName = uniqid() . '.' . $imageExtension;
    
            move_uploaded_file($tmpName, 'uploads/'. $newImageName);
            $filesArray[] = $newImageName;
        }

        $filesArray = json_encode($filesArray);

            $query = "INSERT INTO food ( ";
            $query .= "name, image, price";
            $query .= ") VALUES (";
            $query .= "'$name', '$filesArray', $price";
            $query .= ")";

            $result = mysqli_query($connection, $query);


            if ($result) {
                // query successful... redirecting to users page
                header('Location: addFood.php?user_added=true');
                $message[] = 'Food added Successfully !';
            } else {
                echo "Failed to add the new food ! ";
                $message[] = 'Failed to add the new food ! ';
            }

        }

        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Foods</title>
    <link rel="stylesheet" href="styleAddFood.css">
</head>
<body>
    
    <?php include 'header.php'; ?>

    <div class="container">
            <section>
            <form enctype="multipart/form-data" action="" method="post" class="add-product-form">
                    <h3>Add a New Food</h3>
                    <p class="desc">Food Name : </p><input type="text" name="name" class="box" required><br>
                    <p class="desc">Price : </p><input type="number" name="price" min="0" class="box" required><br>
                    <p class="desc">Images : <input type="file" name="fileImg[]" accept=".jpg, .jpeg, .png" required multiple></p><br>
                    <input type="submit" value="Add" name="submit" class="btn">
                </form>
            </section>
    </div>




</body>
</html>