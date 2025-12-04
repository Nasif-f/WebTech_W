<!DOCTYPE html>
<html>
<body>

    <h2>PHP Lab Task 1 Output</h2>

    <?php
    
   

    echo "<h3>Arithmetic Operations:</h3>";
    
   
    $num1 = 50;     
    $num2 = 12.5;  

    
    $sum = $num1 + $num2;
    echo "Addition ($num1 + $num2): " . $sum . "<br>";

    
    $diff = $num1 - $num2;
    echo "Subtraction ($num1 - $num2): " . $diff . "<br>";

    
    $prod = $num1 * $num2;
    echo "Multiplication ($num1 * $num2): " . $prod . "<br>";

    
    $div = $num1 / $num2;
    echo "Division ($num1 / $num2): " . $div . "<br>";

    echo "<hr>"; 

   
    echo "<h3>Echo vs Print Statement:</h3>";
    
    $numberA = 100;
    $numberB = 200;
    $total = $numberA + $numberB;

    
    echo "The sum of $numberA and $numberB using <b>echo</b> is: " . $total . "<br>";

    
    print "The sum of $numberA and $numberB using <b>print</b> is: " . $total . "<br>";

    echo "<hr>";


    
    ?>

</body>
</html>