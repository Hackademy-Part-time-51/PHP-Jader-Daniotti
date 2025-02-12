<?php

$checkTheLenght = false;
function checkTheLenght($password){
    if (strlen($password) >= 8) {
        $checkTheLenght = true;
        return $checkTheLenght;
    }   
}

?>