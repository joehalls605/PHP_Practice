<?php
// using the GET method to receive data via URL parameters
if (isset($_GET["submit"])) { 
    // $_GET is a global array in PHP that stores data sent via the URL query string
    // displaying the 'email' value from the $_GET array
    echo $_GET["email"]; 
    // displaying the 'title' value from the $_GET array
    echo $_GET["title"];
}

// using the POST method to send data to the server
if (isset($_POST["submit"])) { 
   
    // check email
    if(empty($_POST["email"])){
        echo "An email is required";
    }else{
    // $_POST is a global array in PHP that stores data sent via an HTTP POST request
    // displaying the 'email' value from the $_POST array
    $email = $_POST["email"];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "email must be a valid email address";
    }

    if(empty($_POST["title"])){
        echo "title is required";
    }else{
    // $_POST is a global array in PHP that stores data sent via an HTTP POST request
    // displaying the 'email' value from the $_POST array
   }
}
}
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