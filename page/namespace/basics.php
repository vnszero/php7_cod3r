<?php namespace context; ?>
<div class="title">Fundamentos</div>

<?php
    echo __NAMESPACE__ . "<br>";
    const ZERO = 0;
    define('context\ONE', 1); // usando o define é necessário passar o namespace
    define('TWO', 'II'); // constante em namespace global
    echo TWO . "<br>";
    define(__NAMESPACE__ . '\TWO', 2); // constante estabelecida em namespace context passa a ter prioridade
    echo TWO . "<br>";
    echo \TWO . "<br>"; // recuperando o namespace global depois de estabelecer um constante local
    define('other_context\THREE', 3);
    echo \context\ZERO . "<br>";
    echo \other_context\THREE . "<br>"; // caminho absoluto de namespace
    // echo other_context\THREE . "<br>"; // não funciona pois está tentando buscar um subnamespace de context

    function strpos($str, $text)
    {
        echo "Buscando o texto {$text} em {$str}<br>";
        return "bait<br>";
    }

    echo strpos('uma string qualquer de busca', 'busca'); // chamou a função definida no contexto
    echo \strpos('uma string qualquer de busca', 'busca'); // chamou a função do PHP

?>