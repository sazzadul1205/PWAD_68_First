<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number PHP</title>

</head>

<body>

    <h3>Check Prime Number</h3>
    <form action="">
        <label for="number">Number</label>
        <input type="number" name="number" id="number">

        <input type="submit" value="submit" name="submit">
    </form>
    <?php
    if (isset($_REQUEST['submit'])) {
        $number = $_REQUEST['number'];

        if ($number == 1) {
            echo "$number is not a prime number";
            exit;
        }

        if ($number == 2) {
            echo "$number is a prime number";
            exit;
        }

        if ($number > 2) {
            for ($i = 2; $i < $number; $i++) {
                if ($number % $i == 0) {
                    echo "$number is not a prime number";
                    exit;
                }
            }
            echo "$number is a prime number";
        }
    }


    ?>
</body>

</html>