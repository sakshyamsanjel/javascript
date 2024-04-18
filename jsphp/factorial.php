<!DOCTYPE html>
<html>
<head>
    <title>Factorial Calculator</title>
</head>
<body>
    <h1>Factorial Calculator</h1>
    <form method="post">
        Enter a number: <input type="number" name="number">
        <input type="submit" value="Calculate Factorial">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["number"])) {
        $number = intval($_POST["number"]);

        echo "<h2>Result:</h2>";
        if ($number < 0) {
            echo "Factorial of negative numbers cannot be calculated.";
        } else {
            echo "The factorial of " . $number . " is " . factorial($number) . ".";
        }
    }

    // Function to calculate factorial
    function factorial($n) {
        if ($n == 0) {
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }
    ?>
</body>
</html>
