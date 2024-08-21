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


    // Arrays
    // Indexed arrays
    $peopleOne = ["Joe", "Jack", "Phil", "Lucy"];
    $peopleOne[0]; // "Joe"
    $peopleOne[0] = "Ken";

    // Pushing values
    $peopleOne[] = 60;
    // or
    array_push($peopleOne, "Lewis");


    // Associcative arrays
    // Are key value pairs, unlike normal arrays that use indexes. So we use keys instead. (key & value pairs)

    $ninjasOne = ["shaun" => "black", "joe" => "white"];
    echo $ninjasOne["shaun"];// I use the key to access the value.

    // another way of creating

    $ninjasTwo = array("boris" => "green", "gerald" => "brown");

    $ninjasThree = array_merge($ninjasOne, $ninjasTwo);

    // Multidimensional arrays
    $blogs = [
        ["mario party", "mario", "lorem ipsum", 30],
        ["wario party", "wario", "lorem ipsum", 10],
        ["toad party", "toad", "lorem ipsum", 20]
    ];

    print($blogs[1][0]); // wario party

    $ninjas = ["Jeff", "Phil", "John"];
    for($i = 0; $i < count($ninjas); i++;){
        echo $ninjas[$i];
    }

    foreach($ninjas as $ninja){
        echo $ninjas "<br/>"
    }

    foreach($blogs as $blog){
        echo $blog[0]."-";
    }

    $i = 0;
    while($i < count($blogs)){
        echo $products$[i]["name"];
        $i++;
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
    <h1><?php echo $peopleOne[0]?></h1>
    <h1><?php echo print_r($peopleOne)?></h1>


    </div>
</body>
</html>