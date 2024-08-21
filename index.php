<?php 
    // echo 'hello ninjas!'; // takes a string and echos it to the browser.

    // Variables
    $name = "Joe";
    echo $name;
    $age = 23;
    $name = "James";

    //constant variable
    define("NAME", "Elena");

    //Strings
    $stringOne = "my email is ";
    $stringTwo = "joebloggs.com";

    // echo 'Hey, my name is '.$name  
    echo "the ninja screamed \" whaaa\"";

    echo $name[0]; // "J"

    //String functions

    echo strlen($name);

    //Floats
    $radius = 25;
    $pi = 3.14;

    //Basic Operators - *, /, ~, -, **;

    echo $pi * $radius**2;

    // Order of operation ( B I D M A S) brackets, indicies - power of, division, multiplication, addition, subtraction

    echo 2 * 4 * (4 + 9) / 3;

    // Increment and decrement operators
    echo $radius++;
    echo $radius--;

    // Shorthand operators
    $age = 25;
    echo $age += 10;
    echo $age -= 10;
    echo $age *= 2;

    echo floor($pi);
    echo ceil($pi); // ceiling
    echo pi(); // actually gets value for pi
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my first PHP file</title>
</head>
<body>
    <div id="variables">
    <h1><?php echo "Hello ninjas!"?></h1>
    <h1><?php echo $name;?></h1>
    <h1><?php echo $age;?></h1>
    <h1><?php echo NAME;?></h1>
    </div>
    <div id="strings">
    <h1><?php echo $stringOne.$stringTwo;?></h1>
    <h1><?php echo "hello my name is ".$name;?></h1>
    <h1><?php echo strlen($name);?></h1>
    <h1><?php echo str_replace("J", "L", $name)?></h1>
    </div>
</body>
</html>