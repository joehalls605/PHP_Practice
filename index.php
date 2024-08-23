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
    for($i = 0; $i < count($ninjas); $i++){
        echo $ninjas[$i];
    }

    foreach($ninjas as $ninja){
        echo $ninja. "<br/>";
    }

    foreach($blogs as $blog){
        echo $blog[0]."-";
    }

    $i = 0;
    while($i < count($blogs)){
        echo $blogs[$i][0];
        $i++;
    }

    // Booleans
    // the comparison evalutes to 1 if true or "" if false.
    echo 5 < 10;
    echo 5 > 10;
    echo 5 != 10;

    echo 5 == "5"; // doesnt consider data type - true
    echo 5 === "5"; // does consider the data type - false


    //
    $price = 20;
    if($price < 30){
        echo "condition is met";
    }
    elseif($price < 20){
        echo "elseif condition is met";
    }
    else{
        echo "condition is not met!";
    }

    $blogs = [
        [
            "title" => "mario party",
            "author" => "mario",
            "content" => "lorem ipsum",
            "likes" => 30
        ],
        [
            "title" => "wario party",
            "author" => "wario",
            "content" => "lorem ipsum",
            "likes" => 10
        ],
        [
            "title" => "toad party",
            "author" => "toad",
            "content" => "lorem ipsum",
            "likes" => 20
        ]
    ];
    
    ob_start();

    foreach($blogs as $blog){
        if($blog["likes"] <= 20){
            echo $blog["title"]."<br/>";
        }
    }

    $renderedBlogs = ob_get_clean();

    // Break and continue
    // break - exits completely and breaks out of the loop, regardless of where we are in the loop.
    // continue - it stops the code for that loop, then begins the next loop

    foreach($blogs as $blog){
        if($blog["likes"] === 20){
            break;
        }
        if($blog["title"] === "wario party"){
           continue;
        }

        echo $blog["title"]."<br/>";
    }

    function sayHello($age){
        echo $age;
    }
    sayHello($age);

    function sayHelloDefault($age = 32){
        echo $age;
    }
    sayHelloDefault($age);

    function formatProduct($blog) {
        echo "{$blog['title']} has {$blog['likes']} likes.";
    }

    formatProduct(["title" => "wario party", "likes" => 30]);

    // scope
    // local scope - within the function

    // global variables - becaused declared outside of the function, I can use within the function
    $bonjour = "bonjour";

    function bonjour(){
        global $bonjour; // gives access to the global variable
        echo "$bonjour Joe";
    }

    // include and require
    include("weather.php"); // imports the other file into this file. Warning error shown if cannot load
    require("weather.php");  // requires the other file to be loaded into this file. Fatal error shown if cannot load
    echo "end of php";
    
    // classes
    class User{
        public $email;
        public $name;

        public function __construct($name, $email){
            $this->email = $email;
            $this->name = $name;
        }

        public function login(){
            echo $userOne->name;
        }

        public function getName(){
            return $this->name;
        }
        public function setName(){
            if(is_string($name) && strlen() > 1){
                $this->name = $name;
            }
            else{
                return "not a valid name";
            }
        }
    }

    $userOne = new User();

    $userOne->login();
    echo $userOne->name;

    $userTwo = new User("joe", "joebla@gmai.com");
    
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
    <h1><?php echo 5 < 10;?></h1>
    <h1><?php echo 5 > 10;?></h1>
    <h1><?php echo 5 == 10;?></h1>
    <h1><?php echo 5 != 10;?></h1>
    <h1><?php echo 5 <= 10;?></h1>
    <h1><?php echo "joe" > "Joe" ?></h1>
    <ul>
        <?php foreach($blogs as $blog){ ?>
            <?php if($blog["likes"] > 10){?>
                <li><?php echo $blog["title"] ?></li>
            <?php } ?>
        <?php } ?>
    </ul>
    <h1><?php echo $renderedBlogs ?></h1>
    </div>
    <?php include("content.php");?>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my first PHP file</title>
</head>
<body>
    <div id="variables">
    <h1></h1>
    <?php include("./templates.php/header.php")?>
    <?php include("./templates.php/footer.php")?>
</body>
</html>