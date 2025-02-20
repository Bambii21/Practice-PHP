<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Improve Title</title>
</head>
<body>
    <?php

    $items = [
        ['name' => 'Widget A', 'price' => 10],
        ['name' => 'Widget B', 'price' => 15],
        ['name' => 'Widget C', 'price' => 20],
    ];

    function calculateTotalPrice(array $items): float {
        $total = 0;
        foreach ($items as $item) {
            $total += $item['price'];
        }
        return $total;
    }


    $string = "This is a poorly written program with little structure and readability.";

    function modifyString(string $input): string {
        return strtolower(str_replace(' ', '', $input));
    }


    $number = 42;

    function checkEvenOrOdd(int $number): string {
        return $number % 2 === 0 ? "The number $number is even." : "The number $number is odd.";
    }
    
    
    echo "Total Price: $" . calculateTotalPrice($items) . "\n";
    echo "Modified String: " . modifyString($string) . "\n";
    echo checkEvenOrOdd($number) . "\n";
    
    ?>
</body>
</html>