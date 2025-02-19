<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice_3: Array of Even Numbers</title>
</head>
<body>

    <h2>List of Even Numbers</h2>

    <?php

    $matrix = [
        [12, 23, 34],
        [45, 55, 62],
        [71, 84, 90],
    ];
    
    echo "<ul>";
    $x = 0;
    while ($x < count($matrix)) {
        $y = 0;
        while ($y < count($matrix[$x])) {
            if ($matrix[$x][$y] % 2 == 0) {
                echo "<li>" . $matrix[$x][$y] . "</li>";
            }
            $y++;
        }
        $x++;
    }
    echo "</ul>";


    ?>




</body>
</html>