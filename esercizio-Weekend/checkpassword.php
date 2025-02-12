<?php 
require './function/checkNumber.php';
require './function/checkMaiuscolo.php';
require './function/checkSpecialCharacter.php';
require 'C:/Users/jader/OneDrive/Desktop/AULAB/Esercizi PHP/esercizio-Weekend/function/checkPasswordLength.php';
function startPassword($password) {
    $password = readline("Inserisci la password:");
    return $password;
}
startPassword($password);
$controlNumber = checkTheNumber($password);
$controlMaiuscolo = checkMaiuscolo($password);
$controlLenght = checkTheLenght($password);
$controlSpecialCharacter = checkSpecialCaracter($password);

if ($controlNumber and $controlMaiuscolo and $controlSpecialCharacter and $controlLenght) {
    echo "Password corretta";
} else if (!$controlNumber and $controlMaiuscolo and $controlSpecialCharacter and $controlLenght) {
    echo "Password non corretta, manca un numero, rifai: ";
    startPassword($password);
    
} else if ($controlNumber and !$controlMaiuscolo and $controlSpecialCharacter and $controlLenght) {
    echo "Password non corretta, manca una lettera maiuscola, rifai: ";
    startPassword($password);
} else if ($controlNumber and $controlMaiuscolo and !$controlSpecialCharacter and $controlLenght) {
    echo "Password non corretta, manca un carattere speciale, rifai: ";
    startPassword($password);
} else if ($controlNumber and $controlMaiuscolo and $controlSpecialCharacter and !$controlLenght) {
    echo "Password non corretta, la lunghezza deve essere almeno di 8 caratteri,rifai: ";
    startPassword($password);
} else {
    echo "Password non corretta, controlla i requisiti, rifai: ";
    startPassword($password);
}

?>
