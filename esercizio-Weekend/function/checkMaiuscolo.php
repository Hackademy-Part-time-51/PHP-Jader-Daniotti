<?php


function checkMaiuscolo($password){
    $checkMaiuscolo = false; 

    for ($i = 0; $i < strlen($password); $i++) {
        if (ctype_upper($password[$i])) {
            $checkMaiuscolo = true;
            break; 
        }
    }

    return $checkMaiuscolo;
}

?>