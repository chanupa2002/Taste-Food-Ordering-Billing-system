<?php
    session_start(); 
    require_once('connection.php');
?>


<?php

    if (isset($_POST['submit'])) {
                
        $name = $_POST['name'];
        $phone = $_POST['phone'];


            $query = "INSERT INTO customer ( ";
            $query .= "name, phone";
            $query .= ") VALUES (";
            $query .= "'$name', '$phone'";
            $query .= ")";

            $result = mysqli_query($connection, $query);


            if ($result) {
                
                $_SESSION['customer'] = $name;

                // query successful... redirecting to users page
                header('Location: products.php?customer_added=true');
                $message[] = 'Customer added Successfully !';
            } else {
                echo "Failed to add the new food ! ";
                $message[] = 'Failed to add the new Customer ! ';
            }
            

        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Foods</title>
    <link rel="stylesheet" href="styleHome.css">
</head>
<body>
    
    <?php include 'headerHome.php'; ?>

    <div class="container">
            <section>
            <form enctype="multipart/form-data" action="" method="post" class="add-product-form">
                    <h3>Welcome</h3>
                    <p class="desc">Enter your Name : </p><input type="text" name="name" class="box" required><br>
                    <p class="desc">Contact Number : </p><input type="number" name="phone"class="box" required><br>
                    <input type="submit" value="Start Order" name="submit" class="btn">
                </form>
            </section>
    </div>


        <script src="main.js"></script>
</body>
</html>