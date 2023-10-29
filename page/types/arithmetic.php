<div class="title">Aritiméticas</div>

<?php
echo 1 + 1, '<br>';
var_dump(1+1);
echo '<br>';
echo 1 + 2.5, '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7/4, '<br>';
echo intdiv(7,4), '<br>';
echo round(7/4), '<br>';
echo 7%2, '<br>';
echo 8%2, '<br>';
// echo 7/0, '<br>';
// echo intdiv(7,0);
echo 4 ** 2, '<br>';

// operators order
echo '<p>Precedencia<p>';
echo 2 + 4 * 3, '<br>';
echo (2 + 4) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2+3)*4) ** 2, '<br>';
?>