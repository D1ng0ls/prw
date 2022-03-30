<?php
    $link="rb.ude.psfi.www";
    $nova = " ";
    $tamanhoP = strlen($link);

    for ($i=1; $i <= $tamanhoP; $i++) {
        $nova[$i-1] = substr($link,-$i,1); 
    }

    echo "Link: <a href='https://".$nova."'>".$nova."<a>";
?>