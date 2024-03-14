<div class="title">Try & Catch</div>

<?php
    // echo intdiv(7,0);

    try 
    {
        echo intdiv(7, 0);
    } 
    catch (Error $e)
    {
        echo "Ocorreu um erro aqui<br>";
    }

    try 
    {
        echo intdiv(7, 0); // inverter a ordem vai modificar o resultado final
        throw new Exception("Um erro do sistema aqui");
        echo "trecho de código redondo chama finally também<br>";
    }
    catch (DivisionByZeroError $e) // erro mais específico precisa aparecer primeiro
    {
        echo "Divisão por zero";
    }
    catch (Throwable $e) // erro genérico por último
    {
        echo "Erro encontrado: " . $e->getMessage() . "<br>";
    }
    finally
    {
        echo "Sempre executado <br>";
    }
?>