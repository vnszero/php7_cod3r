<div class="title">Variables</div>

<?php 
    // Binet's Formula to calculate the Fibonacci number at a specific position "n".
    function Fibonacci($n)
    {
        // F(n) = (1/sqrt(5)) * [ ((1+sqrt(5))/2)^n - ((1-sqrt(5))/2)^n ] 
        $external = (1/sqrt(5));
        $left = ((1+sqrt(5))/2)**$n;
        $right = ((1-sqrt(5))/2)**$n;
        $fn = $external * ($left - $right);
        return $fn;
    }
    echo "Fibonacci(16) = ";
    echo Fibonacci(16) . "<br>";
?>