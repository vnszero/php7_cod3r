<div class="title">Desafio Data</div>

<?php
    class Date {
        public $day = 1;
        public $month = 1;
        public $year = 1970;

        public function show() {
            $output = sprintf("%02d/%02d/%04d", $this->day, $this->month, $this->year);
            // echo "{$this->day}/{$this->month}/{$this->year}<br>";
            echo $output . "<br>";
        }
    }

    $register = new Date();
    $register->show();
?>