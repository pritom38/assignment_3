<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h1>Calculator</h1>
    <form method="post" action="">
        <label for="number1">Enter first number:</label>
        <input type="number" name="number1" id="number1" required>
        <br>
        <label for="number2">Enter second number:</label>
        <input type="number" name="number2" id="number2" required>
        <br>
        <button type="submit">Calculate</button>
    </form>

    <br><br>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];

    $sum = $number1 + $number2;
    $difference = $number1 - $number2;
    $product = $number1 * $number2;
    $quotient = $number1 / $number2;

    echo "Calculation<br>";
    echo "Sum: $sum<br>";
    echo "Difference: $difference<br>";
    echo "Product: $product<br>";
    echo "Quotient: $quotient<br>";
}
?>