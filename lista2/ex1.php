<?php
    $soma=0;

    for($i=0;$i<100;$i++) {
        if($i%2==0) {
            $soma=$soma+$i;
        }
    }

    echo "Soma: ".$soma;
?>