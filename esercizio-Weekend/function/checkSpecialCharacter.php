<?php

function checkSpecialCaracter($password) {
    return preg_match('/[^a-zA-Z0-9\s]/', $password);
  }

?>