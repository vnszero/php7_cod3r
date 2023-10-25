<div class="title">Integration HTML</div>
<h1 center>
<?php 
    echo "ola";
    echo "<small>";
    echo " mundo";
    echo "<small>";
?>
</h1>

<?= "<div center blue> Outra forma de me expressar </div>" ?>

<div center><button double><?= 'legal' ?></button></div>

<style>
    button {
        padding: 5px <?= 2*10 ?>px;
        background-color: #4286f4;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
    }

    [center] {
        display: flex;
        justify-content: center;
    }

    <?= '[blue]' ?>  {
        color:blue;
    }

    [double] {
        font-size: 2rem;
    }
</style>
