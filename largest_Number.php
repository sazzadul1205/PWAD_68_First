<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Largest Number</title>
</head>

<body>
    <?php
    // Array
    $Numbers = [22, 78, 121, 212, 19];


    $max = $Numbers[0]; // 22

    // Loop until the last element
    for ($i = 1; $i < count($Numbers); $i++) {
        if ($Numbers[$i] > $max) {
            $max = $Numbers[$i];
        }
    }

    echo "Largest Number is " . $max
    ?>
</body>

</html>