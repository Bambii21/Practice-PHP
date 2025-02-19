<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice_2: Array of Fruits</title>
</head>
<body>

    <h2>List of Fruits</h2>
    
    <?php
    $fruits = array("Watermelon", "Papaya", "Banana", "Mango", "Apple");
    echo "<ol>";
        for ($x = 0; $x < count($fruits); $x++) {
            echo "<li>" . $fruits[$x] . "</li>";
        }
    echo "</ol>";


    


    ?>



</body>
</html>