<?php
    $cont=0;

    for($i=1;$i<200;$i++) {
        for($j=1;$j<$i;$j++){

            if($i%$j==0) {
                $cont++;
            }

        }
        if($cont==1) {
            echo $i."<br>";
        }

        $cont=0;
    }
?>