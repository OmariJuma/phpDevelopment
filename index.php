<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let's Learn Php</title>
</head>
<body>
    <h1>Let's explore Arrays in PHP</h1>
    <pre>
<?php
    $programmingLanguages = ["PHP", "JavaScript", "Python"];

    $programmingLanguages[3] = "C";
    array_push($programmingLanguages, "Ruby","DotNet");
    print_r($programmingLanguages);

    $objectsArray = ['a'=>'A', 'b'=>'B', 'c'=>"C" ];
    print_r($objectsArray);
    echo $objectsArray["b"]."<br/>";

    $authors = [
        "name"=>"Eugene",
        "age"=> 27,
        "books" =>[
            "The Color of Love",
            "A trip to Paris",
            "The richest man in Babylon"
        ],
        "isMarried"=>true
    ];

   print_r($authors["books"][1]);
?>
    </pre>
    
</body>
</html>