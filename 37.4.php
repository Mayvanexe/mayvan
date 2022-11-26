<?php
    $age = ['12'];
    if ($age >= 10){
        if($age <= 99){
            $z = $age[0] + $age[1];
        }
        else {
            echo 'Число больше 99';
        }
    }
    else {
        echo 'Число меньше 10';
    }
    echo $z
?>