<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <h3>Login Form</h3>

    <div>

        <?php
        // $_GET
        // $_POST
        // $_REQUEST

        // echo "<pre>";
        // print_r($_GET);
        // echo "</pre>";

        // $NAME = $_GET['name'];
        // $EMAIL = $_GET['email'];
        // $PHONE = $_GET['phone'];
        // echo "Name: $NAME <br>";
        // echo "Email: $EMAIL <br>";
        // echo "Phone: $PHONE <br>";

        if (isset($_GET['submit'])) {
            $NAME = $_GET['name'];
            $EMAIL = $_GET['email'];
            $PHONE = $_GET['phone'];

            echo "Name: $NAME <br>";
            echo "Email: $EMAIL <br>";
            echo "Phone: $PHONE <br>";
        }

        ?>
        <form action="" method="get">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <br><br>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <br><br>
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" placeholder="Enter your phone">
            <br><br>
            <input type="submit" value="submit" name="submit">
        </form>
    </div>


</body>

</html>