<!DOCTYPE html>
<html>
    <head>
        Selecting GENDER as input and displaying it on the current page
    </head>
    <body>
        <form method = "GET" action="4b.php" enctype="">
        <fieldset>
            <legend>GENDER</legend>
                <input type="radio" name="gender" value=""> Male
                <input type="radio" name="gender" value=""> Female
                <input type="radio" name="gender" value=""> Other
                <br>
                <hr>
        <input type="submit" name="" value="Submit">
        </fieldset>
        </form>
        <?php
        $gender = $_GET['gender'];
        echo $gender;
        ?>
    </body>
</html>