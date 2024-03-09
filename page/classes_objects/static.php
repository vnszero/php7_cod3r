<div class="title">Membros Estáticos</div>

<?php
    class Artefact {
        public $noStatic = "atributo de instância";
        public static $static = "atributo de classe (estático)";

        public function show()
        {
            echo "Não estática = {$this->noStatic}<br>";
            // echo "Estática = {$this->static}<br>"; // não funciona pois não pertence a instância this
            // echo "Estática = {$self::static}<br>"; // não funciona também
            echo "Estática = " . self::$static . "<br>";
        }

        public static function showStatic()
        {
            echo "chamada para função estática<br>";
        }
    }

    $object = new Artefact();
    $object->show();
    $object->showStatic(); // funciona mas não é recomendado

    Artefact::showStatic();
    echo Artefact::$static, "<br>";
    
    Artefact::$static = "alterando membro static";
    echo Artefact::$static, "<br>";
?>