<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable</title>
</head>

<body>
    <h3>Variables</h3>

    <p>
        <?php
        $x = 5;
        $name = "John";
        $_Age = 20;
        $_10Age = 30;
        $full_name = "John Doe";
        $z = null;

        $commission =  15.4;
        $is_active = true;
        $fruits = ["apple", "banana", "cherry"];


        class Person
        {
            public $name = "John";
            public $age = 30;
        }

        $person = new Person();

        // var_dump($x);
        // var_dump($name);
        // var_dump($_Age);
        // var_dump($_10Age);
        // var_dump($full_name);
        // var_dump($z);
        // var_dump($commission);
        // var_dump($is_active);

        echo "<pre>";
        var_dump($person);
        echo "</pre>";
        ?>
    </p>
</body>

</html>