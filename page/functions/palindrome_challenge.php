<div class="title">Desafio Palindromo</div>

<?php
    function palindrome($word)
    {
        $last = strlen($word) - 1;
        for ($i = 0; $i <= $last; $i++)
        {
            if ($word[$i] != $word[$last - $i])
            {
                return "Não";
            }

            if ($i == $last - $i)
            {
                break;
            }
        }
        return "Sim";
    }

    function palindromeWithLibrary($word)
    {
        return $word === strrev($word) ? "sim" : "não";
    }

    echo palindrome("arara") . "<br>";
    echo palindrome("bola") . "<br>";
    echo palindrome("ana") . "<br>";
    echo palindrome("abcdedcba") . "<br>";

    echo "<br>using library<br><br>";

    echo palindromeWithLibrary("arara") . "<br>";
    echo palindromeWithLibrary("bola") . "<br>";
    echo palindromeWithLibrary("ana") . "<br>";
    echo palindromeWithLibrary("abcdedcba") . "<br>";
?>