<!DOCTYPE html>
<head>
    Searching an element from an array
</head>
<body>
    <?php
        $element = array(16, 98, 50, 32, 74);
        $searchElement = 72;
        foreach ($element as $value) {
            if ($value == $searchElement) {
                echo "<br>";
                echo "<em>Element is found in the array<em>";
                break;
            }
        }
        if($value !== $searchElement){
            echo "<br>";
            echo "<em>Element is not found in the array<em>";
        }
    ?>
</body>