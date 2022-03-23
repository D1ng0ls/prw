<?php
    for($i=0;$i<200;$i++) {
        for($j=1;$j<$i;$j++){
            if($i%$j==0) {
                echo $i."<br>";
            }
        }
    }
?>