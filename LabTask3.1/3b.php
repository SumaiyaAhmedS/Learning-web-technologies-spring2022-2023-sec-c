<!DOCTYPE html>
<html>
    <head>
        Taking DOB as input and displaying it on the handler page
    </head>
    <body>
        <form method = "GET" action="3b.php" enctype="">
        <fieldset>
            <legend>DATE OF BIRTH</legend>
                dd: <input type="text" name="" value=""> /
                mm: <input type="text" name="" value=""> /
                yyyy: <input type="text" name="" value=""><br>
                <hr>
        <input type="submit" name="" value="Submit">
        </fieldset>
        </form>
        <?php
            $date_of_birth = $_GET['date_of_birth'];
            echo $date_of_birth;
        ?>
    </body>
</html>