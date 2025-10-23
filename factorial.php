<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>

<body>
    <h3>Factorial</h3>
    <form action="">
        <label for="number">Number</label>
        <input type="number" name="number" id="number">

        <input type="submit" value="submit" name="submit">
    </form>

    <?php
    if (isset($_REQUEST['submit'])) {
        $number = $_REQUEST['number'];
        $factorial = 1;
        for ($i = 1; $i <= $number; $i++) {
            $factorial *= $i;
        }
        echo "Factorial of $number is $factorial";
    }

    ?>
</body>

</html>