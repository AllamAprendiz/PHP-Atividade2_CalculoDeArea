<?php
    $Base = filter_input(INPUT_POST,'Base_name');
    $Altura = filter_input(INPUT_POST,'Altura_name');
    $Area = $Base * $Altura;
    echo $Area;
?>