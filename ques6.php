<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Operations</title>
</head>
<body>
    <?php
    $numbers = array(2, 4, 6, 8, 10);

    echo "<h3>First Element:</h3>";
    echo "First element of the array: " . $numbers[0] . "<br>";

    echo "<h3>Last Element:</h3>";
    echo "Last element of the array: " . end($numbers) . "<br>";

    $numbers[] = 12;

    echo "<h3>Updated Array:</h3>";
    echo "<pre>";
    print_r($numbers);
    echo "</pre>";

    $sum = array_sum($numbers);
    echo "<h3>Array Sum:</h3>";
    echo "Sum of all elements in the array: " . $sum . "<br>";

    
    ?>
</body>
</html>
