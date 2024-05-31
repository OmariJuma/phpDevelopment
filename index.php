<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doing Advanced Stuff</title>
</head>
<body>
    <h1>Let's Do Advanced Stuff </h1>
    <strong>Getting the output using switch block</strong>
    <p>switch statement is an alternative to multiple if else blocks, it performs loose comparisons such that 1 and '1' is equal and it requires a break statement to escape the current code execution block/ case </p> 
    <?php 
    $paymentStatus = 2;
    switch ($paymentStatus){
        case 1:
            echo "Paid";
            break;
        case 2:
        case 3:
            echo "Payment Declined";
            break;
        default:
        echo "Unknown Payment Status";
    }
    ?>
    <br/>
    <br/>

    <strong>Getting the output using match block</strong>
    <p>match it uses key - value pairs, it is used when we are searching for a specific key, it can return a value/ expression or a function <strong style="color: red;">You can't use echo inside its block</strong></p>
    <?php

    match($paymentStatus){
        1 => print ("Paid"),
        2,3 => print ("Payment Declined"),
        default => print("Unkown Payment Status")
    }
    ?>
</body>
</html>