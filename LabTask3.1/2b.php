<!DOCTYPE html>
<html>
    <head>
        Taking EMAIL as input and displaying it on the current page
    </head>
    <body>
        <form method = "GET" action="2b.php" enctype="">
        <fieldset>
            <legend>EMAIL</legend>
                <input type = "email" name = "email" value = ""><br>
                <hr>
                <input type = "submit" name = "" value = "Submit">
        </fieldset>
        </form>
    <?php
    $email = $_GET['email'];
    echo $email;
    ?>
    </body>
</html>