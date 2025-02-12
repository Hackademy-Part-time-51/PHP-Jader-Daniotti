<?php
//!Traccia uno
//* const NUMEROINTERO = 1;
//* const NUMEROFLOAT = 1.1;
//* const STRINGA = "aulab";
//* const BOOLEANO = true;

//* var_dump(NUMEROINTERO);
//* var_dump(NUMEROFLOAT);
//* var_dump(STRINGA);
//* var_dump(BOOLEANO);

//!Traccia due
//* $text1 = "Marco ";
//* $text2 = "hai ";
//* $text3 = "sete ";
//* $text4 = "?\n";
//* $text5 = "Perchè ";
//* $text6 = 'hai ';
//* $text7 = 'bevuto ';
//* $text8 = "tutto";

//* echo $text1.$text2.$text3.$text4.$text5.$text6.$text7.$text8;

//!Traccia tre
$words1 = [

    'vostro', 67, 'essere', 'colle', 'mi', 'sempre', [

    'oscura', 'era', 89, ['mezzo', 'E'],

    'ritrovai', 'per'

    ],

'diritta'

];

$words2 = [

    'elemento1' => 25.89,

    'elemento2' => 'possa',

    'elemento3' => [

    'Virgilio',

    'Favore',

    'favore',

    ['Fortuna']

],

'fine'=>'!'

];

$words1[] = "la";
$words2[] = "a";
print_r($words1);
print_r($words2);

$frase = $words1[6][3][1] . " " . $words2['elemento2'] . " ". $words1[8] . " " . $words2['elemento3'][3][0] . " " . $words1[2] . " " . $words1[5] . " " . $words2[0] . " " . $words1[0] . " " . $words2['elemento3'][2] . $words2['fine'];
echo $frase;
//*RISULTATO =  “E possa la Fortuna essere sempre a vostro favore!“.
?>