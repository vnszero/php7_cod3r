<div class="title">Erros personalizados</div>

<?php
    class AgeGroupException extends Exception {
        public function __construct($message, $code = 0, $previous = null)
        {
            echo "Erro personalizado: $message<br>";

            parent::__construct($message, $code, $previous);
        }
    }

    function calculateRemainingTime($age)
    {
        if ($age < 18)
        {
            throw new AgeGroupException("Ainda está muito longe");
        }
        elseif ($age > 70)
        {
            throw new AgeGroupException("Já deveria estar aposentado");
        }

        return 70 - $age;
    }

    $input_ages = [15, 34, 47, 80];

    foreach ($input_ages as $age)
    {
        try
        {
            $remainingTime = calculateRemainingTime($age);
            echo "Idade: $age, Tempo restante: $remainingTime em anos.<br>";
        }
        catch (AgeGroupException $e)
        {
            echo "Não foi possível calcular o tempo restante para a idade $age.<br>";
            echo "Motivo: {$e->getMessage()}";
        }
    }
?>