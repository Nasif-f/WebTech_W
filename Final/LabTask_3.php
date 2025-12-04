<!DOCTYPE html>
<html>
<body>

    <h2>PHP Lab Task 3 Output</h2>

    <?php
    echo "<div class='output-box'>";
    echo "<h3>Output using FOR Loop (1 to 20):</h3>";
    for ($i = 1; $i <= 20; $i++) {
        
        echo $i . " - ";
    }
    echo "</div>";
    
    
    echo "<div class='output-box'>";
    echo "<h3> Output using WHILE Loop (Even Numbers 1 to 20):</h3>";
    
    $j = 2; 
    
    while ($j <= 20) {
       
        echo $j . " | ";
        
       
        $j += 2;
    }
    echo "</div>";

    
    $fruits = [
        "apple" => "red",
        "banana" => "yellow",
        "grape" => "purple",
        "lime" => "green",
        "orange" => "orange",
        "strawberry" => "red"
    ];

    
    echo "<div class='output-box'>";
    echo "<h3>Output using FOREACH Loop (With BREAK after 5 items):</h3>";
    
    $count = 0; 
    foreach ($fruits as $name => $color) {
        
        
        echo "The $name is $color.<br>";
        
       
        $count++;
        
        
        if ($count >= 5) {
            break; 
        }
    }
    echo "</div>";
    ?>

</body>
</html>