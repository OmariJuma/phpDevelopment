<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP</title>
</head>
<body>
    <?php  $firstName = "Omar";    $secondName = "Juma";?>
    <h1>Hello PHP this is cool. My name is <?php echo $firstName ?></h1>
    <h3 backgroundColor="green">
    <?php $age=17;
     $BIRTH_YEAR=2000;
    define("DOB", 1990);
    define("GENDER", "Male");
    const STATUS_PAID="paid";
    
     
    if ($age<18){
       echo $firstName. " is a minor";
    }
    else{
        echo $firstName. " is an adult";
    }
    
    ?>
    </h3>
    <p>
        <?php 
        echo DOB;  
        
        ?>
        <br/>
         <?php 
        echo $BIRTH_YEAR;  
        
        ?>
        <br/>
         <?php 
        echo GENDER;  
        
        ?>
        <br/>
        <?php 
        echo STATUS_PAID;  
        
        ?>
    </p>
</body>
</html>
