<?php 


function checkTheNumber($password){
    $checkNumber = false;
    for ($i=0; $i <strlen($password); $i++) { 
        if (is_numeric($password[$i])) {
            $checkNumber = true;
            break;
        }
    }   return $checkNumber;
}

?>
