<?php namespace intdiv; ?>
<div class="title">Desafio intdiv</div>

<?php
    class FloatDivisionResultException extends \Exception {
        function __construct($message, $code=0, $previous=null)
        {
            parent::__construct($message, $code, $previous);            
        }
    }

    function intdiv(int $dividend, int $divisor)
    {
        if ($divisor == 0)
        {
            throw new \DivisionByZeroError("Encontrado Divisão por zero");
        }
        elseif ($dividend%$divisor != 0)
        {
            throw new FloatDivisionResultException("Divisão entre $dividend e $divisor não é inteira");
        }
        else
        {
            return $dividend / $divisor;
        }
    }

    $dividend = 8;
    $divisors = [2,3,0];
    foreach ($divisors as $divisor)
    {
        try
        {
            echo "$dividend / $divisor = " . intdiv($dividend, $divisor) . "<br>";
        } 
        catch (\DivisionByZeroError $e)
        {
            echo "Erro encontrado: {$e->getMessage()}.<br>";
        }
        catch (FloatDivisionResultException $e)
        {
            echo "Erro encontrado: {$e->getMessage()}.<br>";
        }
    }

    echo "<br>";
    echo "chamda da função intdiv original do PHP<br>";
    echo "$dividend / 3 = " . \intdiv($dividend,3) . PHP_EOL;
?>