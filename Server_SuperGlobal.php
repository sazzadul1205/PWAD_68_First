<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Super Global</title>
</head>

<body>
    <?php
    echo "<pre>";
    print_r($_SERVER);
    echo $_SERVER['HTTP_HOST'];

    
    echo "</pre>";
    ?>
</body>

</html>