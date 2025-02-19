<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice_1: Triangle Area Calculator</title>
</head>
<body>
    <h2>Calculate the Area of a Triangle</h2>
    <form method="POST">
        Side 1: <input type="number" step="any" name="side1" required><br>
        Side 2: <input type="number" step="any" name="side2" required><br>
        Side 3: <input type="number" step="any" name="side3" required><br>
        <input type="submit" name="submit" value="Calculate Area">
    </form>

    <?php



    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $s1 = $_POST['side1'];
        $s2 = $_POST['side2'];
        $s3 = $_POST['side3'];
        
        $s = ($s1 + $s2 + $s3) / 2;

        $areaSquared = $s * ($s - $s1) * ($s - $s2) * ($s - $s3);

        if ($areaSquared > 0) {
            $area1 = $areaSquared;
            $x = 1;
            for ($i = 0; $i < 10; $i++) {
                $x = ($x + $area1 / $x) / 2;
            }
            
            echo "<h3>Triangle Area: " . number_format($x, 2) . " square units</h3>";
        } else {
            echo "<h3>Please input valid values</h3>";
        }
    }


    ?>




</body>
</html>