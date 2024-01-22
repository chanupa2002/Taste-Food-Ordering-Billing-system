
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="styleHome.css">
    <script src="adminLog.js"></script>
</head>
<body>
    
    <?php include 'headerAdminLog.php'; ?>

    <div class="container">
            <section>
            <div class="add-product-form">
                    <h3>Welcome - Admin</h3>
                    <p class="desc">Admin Name : </p><input type="text" id="adminName" class="box" requried><br>
                    <p class="desc">Admin Password : </p><input type="password" id="adminPassword" class="box" requried><br>
                    <input type="submit" value="Log In" onclick="validate()" class="btn" >
            </div>
            </section>
    </div>


</body>
</html>