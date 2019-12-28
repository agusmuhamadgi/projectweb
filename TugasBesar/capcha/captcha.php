<?php

    $start = rand(1, 11);
    $end = rand(1, 11);
    

    $count = $start + $end;

    if ($count >= 15) {
        $count -= 5;
    } else {
        $count -=  2;
    }
    
    // mencari nilai benar 
    for ($i=0; $i < 15; $i++) { 
        if ($count != $i) {
            echo "salah \n";
        } else {
            echo "Benar: ". $count ." \n";
        }
    }

?>