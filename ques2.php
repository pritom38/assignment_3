<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Even Numbers</title>
</head>
<body>
    <h1>Sum of Even Numbers Calculator</h1>
    <form method="post" action="">
        <label for="numbers">Enter numbers (comma-separated):</label>
        <input type="text" name="numbers" id="numbers" required>
        <button type="submit">Calculate</button>
    </form>

    <?php
    function sumEvenNumbers($arr) {
        $numbersArray = explode(",", $arr);
        $numbersArray = array_map('trim', $numbersArray);
        $sum = 0;
        foreach ($numbersArray as $number) {
            if (is_numeric($number) && $number % 2 === 0) {
                $sum += (int)$number;
            }
        }
        return $sum;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputNumbers = $_POST["numbers"];
        $evenSum = sumEvenNumbers($inputNumbers);
        echo "<h2>Result:</h2>";
        echo "Sum of even numbers in the input array: " . $evenSum;
    }
    ?>
</body>
</html>
