<!DOCTYPE html>
<html>
<body>

    <h2>PHP Lab Task 4 Output</h2>

    <?php
    
   
    function sum($a, $b) {
        return $a + $b;
    }

    echo "<div class='output-box'>";
    echo "<h3> Summation Function Output:</h3>";
    
    
    $sum1 = sum(15, 7);
    echo "Sum of 15 and 7 is: $sum1 <br>"; 
    
    $sum2 = sum(10.5, 2.5);
    echo "Sum of 10.5 and 2.5 is: $sum2 <br>";
    echo "</div>";

    
    function factorial($n) {
     
        if ($n <= 1) {
            return 1;
        } else {
          
            return $n * factorial($n - 1);
        }
    }

    echo "<div class='output-box'>";
    echo "<h3>Recursive Factorial Function Output:</h3>";
   
    $num = 5;
    $fact_result = factorial($num);
    echo "The factorial of $num  is: $fact_result <br>"; 
    
    $num2 = 7;
    echo "The factorial of $num2  is: "  .factorial($num2). "<br>";
    echo "</div>";

    
    function is_prime($n) {
        
        if ($n <= 1) {
            return false;
        }
        
        for ($i = 2; $i * $i <= $n; $i++) {
            if ($n % $i == 0) {
                
                return false;
            }
        }
        
        return true;
    }

    echo "<div class='output-box'>";
    echo "<h3>3. Primality Test Function Output:</h3>";

    
    $test_numbers = [17, 9, 2, 1, 101, 100];
    
    foreach ($test_numbers as $number) {
        $result = is_prime($number);
        $status = $result ? "is prime" : "is not prime";
        
        echo "The number $number $status.<br>";
    }
    echo "</div>";
    ?>

</body>
</html>