<!DOCTYPE html>
<html>
    <head>
        Selecting Blood Group and displaying it on handler page
    </head>
    <body>
        <form method="GET" actions="6a.html" enctype="">
        <fieldset>
            <legend>BLOOD GROUP</legend>
            <select option="">
            <option value = "A+">A+</option>
            <option value = "B+">B+</option>
            <option value = "O+">O+</option>
            <option value = "AB+">AB+</option>
            <option value = "A-">A-</option>
            <option value = "B-">B-</option>
            <option value = "O-">O-</option>
            <option value = "AB-">AB-</option>
            </select>
            <br><hr>
            <input type="submit" name="" value="Submit">
        </fieldset>
        </form>
        <?php
        $bloodgroup = $_GET['bloodgroup'];
        echo $bloodgroup;
        ?>
    </body>
</html>