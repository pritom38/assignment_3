<?php
function countVowels($inputString) {
    $inputString = preg_replace("/[^a-zA-Z]/", "", $inputString); 
    $inputString = strtolower($inputString);
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;

    for ($i = 0; $i < strlen($inputString); $i++) {
        if (in_array($inputString[$i], $vowels)) {
            $count++;
        }
    }

    return $count;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = $_POST["input_string"];
    $vowelCount = countVowels($inputString);
    echo "Number of vowels in the input string: " . $vowelCount;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count Vowels</title>
</head>
<body>
    <h1>Count Vowels in a String</h1>
    <form method="post" action="">
        <label for="input_string">Enter a string:</label>
        <input type="text" name="input_string" id="input_string" required>
        <button type="submit">Count Vowels</button>
    </form>
</body>
</html>