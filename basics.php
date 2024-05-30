<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP</title>
</head>

<body>
    <?php $firstName = "Omar";
    $secondName = "Juma"; ?>
    <h1>Introduction to PHP</h1>
    <p>
        Hello PHP this is cool. My name is <strong>
            <?php echo $firstName ?>
</strong>
        </p>
    <h3 color="green">
        <?php $age = 17;
        $BIRTH_YEAR = 2020;
        define("DOB", 2006);
        define("GENDER", "Male");
        const STATUS_PAID = "paid";


        if ($age < 18) {
            echo $firstName . " is a minor";
        } else {
            echo $firstName . " is an adult";
        }

        ?>
    </h3>
    <p>
        <?php
        echo "DOB: ".DOB." type ".gettype(DOB);

        ?>
        <br />
        <?php
        echo "BIRTH_YEAR: ".$BIRTH_YEAR." type ".gettype($BIRTH_YEAR);

        ?>
        <br />
        <?php
        echo "GENDER: ".GENDER;

        ?>
        <br />
        <?php
        echo "STATUS_PAID: ".STATUS_PAID;

        ?>
        <br/>
        my php version is <?php echo PHP_VERSION?>

        <br/>
        <?php echo "I am on line number ".__LINE__?>
        <br/>
        <?php echo "This directory is called ".__DIR__?>
        <br/>
        <?php //using variable variable
            $candy="juicy";
            $$candy="fruit";
            echo $candy." ".$$candy;
        ?>
        <br/>
        <?php 
        function showAge($age){
            return $age;
        }
        ?>
        My daugther is <?php echo showAge($age)." years old"."<br/>"?> 
        <?php 
        $isTall = false;
        $price = 20_000_000;
        $length = 11.5e-2;
        echo var_dump($isTall)."<br/>";
        echo var_dump($price)."<br/>";
        echo var_dump($length)."<br/>";
        echo php_sapi_name();
        

        ?>
    </p>
</body>

</html>