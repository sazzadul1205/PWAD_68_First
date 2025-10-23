<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get Super Global</title>
</head>

<body>
    <a href="get_super_global.php?name=John&age=20">Click Here</a>

    <?php
    echo "<br>";
    if (isset($_GET['name'])) {
        print_r($_GET);
        // echo $_GET['name'];
        // echo "<br>";
        // echo $_GET['age'];
    }
    ?>
</body>

</html>