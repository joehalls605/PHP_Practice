<?php
if(isset($_GET["submit"])){
    echo $_GET["email"]; 
    echo $_GET["title"];
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my first PHP file</title>
</head>
<body>
    <section class="container grey-text">
        <h4 class="center">Add a pizza</h4>
        <form action="" method="GET" action="add.php">
            <label>Your email:</label>
            <input type="text" name="email">
            <label>Pizza title</label>
            <input type="text" name="title">
            <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>
    <?php include("./templates.php/header.php");?>
    <?php include("./templates.php/footer.php");?>
</body>
</html>