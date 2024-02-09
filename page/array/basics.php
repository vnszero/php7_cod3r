<div class="title">Fundamentos</div>

<?php
    $list = array(1, 2, 3.4, "texto");
    echo "$list[0]<br>";
    echo "$list<br>";
    var_dump($list);
    echo "<br>";
    $list[0] = 1234;
    print_r($list);
    echo "<br>";

    $message = "Esse é uma frase de exemplo";
    echo "$message[0]<br>";
    echo "$message[1]<br>";
    echo "$message[12]<br>"; // warning, unknow behavior in UTF8 characters
    echo mb_substr($message, 11, 1) . "<br>"; // better solution
?>