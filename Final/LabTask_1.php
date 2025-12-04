<!DOCTYPE html>
<html>
<body>

    <h2>PHP Lab Task 1 Output</h2>

    <?php
    // --- PART 1: Variable Declaration ---
    // Declare and initialize variables of various data types
    $textVariable = "Hello, PHP!";      // String
    $intVariable = 42;                  // Integer
    $floatVariable = 10.5;              // Float
    $boolVariable = true;               // Boolean

    // --- PART 2: Arithmetic Operations ---
    echo "<h3>Arithmetic Operations:</h3>";
    
    // We will use the integer and float variables declared above
    $num1 = 50;     // Integer
    $num2 = 12.5;   // Float

    // Addition
    $sum = $num1 + $num2;
    echo "Addition ($num1 + $num2): " . $sum . "<br>";

    // Subtraction
    $diff = $num1 - $num2;
    echo "Subtraction ($num1 - $num2): " . $diff . "<br>";

    // Multiplication
    $prod = $num1 * $num2;
    echo "Multiplication ($num1 * $num2): " . $prod . "<br>";

    // Division
    $div = $num1 / $num2;
    echo "Division ($num1 / $num2): " . $div . "<br>";

    echo "<hr>"; // Drawing a horizontal line for neatness

    // --- PART 3: Echo vs Print ---
    echo "<h3>Echo vs Print Statement:</h3>";
    
    $numberA = 100;
    $numberB = 200;
    $total = $numberA + $numberB;

    // Output using ECHO
    echo "The sum of $numberA and $numberB using <b>echo</b> is: " . $total . "<br>";

    // Output using PRINT
    print "The sum of $numberA and $numberB using <b>print</b> is: " . $total . "<br>";

    echo "<hr>";

    // --- PART 4: Using var_dump() ---
    // Modify the script to display type and value
    echo "<h3>Variable Details (var_dump):</h3>";

    echo "String variable: ";
    var_dump($textVariable);
    echo "<br>";

    echo "Integer variable: ";
    var_dump($intVariable);
    echo "<br>";

    echo "Float variable: ";
    var_dump($floatVariable);
    echo "<br>";

    echo "Boolean variable: ";
    var_dump($boolVariable);
    echo "<br>";
    ?>

</body>
</html>