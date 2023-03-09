<!DOCTYPE html>
<html>
    <head>Taking name as input and displaying it on the current page</head>
    <body>
        <form method = "GET" action = "1b.php" enctype="">
        <fieldset>
            <legend>NAME</legend>
            <input type = "text" name ="name" value=""><br>
            <hr>
            <input type = "submit" name = "" value="Submit">
        </fieldset>
        </form>
    <?php
        $name = $_GET['name'];
        echo $name;
    ?>
    </body>
</html>