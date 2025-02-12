<?php

// !Traccia 1
$utenti = [
    ["name"=>"Jader", "cognome"=>"Daniotti", "gender"=>"M",],
    ["name"=>"Giovanni", "cognome"=>"Bianchi","gender"=>"M"],
    ["name"=> "Francesca", "cognome"=>"Cargnelutti", "gender"=>"F",],
];
 print_r( $utenti );
foreach ($utenti as $key => $utente) {
    if ($utente["gender"]==="M") {
        echo "Buongiorno signor " . $utente["name"] . " " . $utente["cognome"] . "\n";
    } else {
        echo "Buongiorno signora " . $utente["name"] . " " . $utente["cognome"] . "\n";
    }
}

// !Traccia 1 Extra
//  Elettronica → 10% di sconto
//  Abbigliamento → 20% di sconto
//  Cibo → 5% di sconto
//  Altro → Nessuno sconto
$prodotti = [

    ["name"=> "Tablet", "category"=> "Electronics", "price"=> "200",],
    ["name"=> "Shoes", "category"=> "Clothing", "price"=> "120",],
    ["name"=> "Pasta", "category"=> "Food", "price"=> "1.99",],

];
$sconto;
foreach ($prodotti as $key => $prodotto) {
    if ($prodotto["category"]=== "Electronics") {
        $sconto = ($prodotti[0]["price"] - ($prodotti[0]["price"] * 10 / 100)). "\n";
        echo $prodotto["name"] . " riceve uno sconto del 10%, il suo prezzo passa da " . $prodotto["price"] . " a " . $sconto;
    } else if ($prodotto["category"]=== "Clothing") {
        $sconto = ($prodotti[1]["price"] - ($prodotti[1]["price"] * 20 / 100)). "\n";
        echo $prodotto["name"] . " riceve uno sconto del 20%, il suo prezzo passa da " . $prodotto["price"] . " a " . $sconto;
    } else if ($prodotto["category"]=== "Food") {
        $sconto = ($prodotti[2]["price"] - ($prodotti[2]["price"] * 5 / 100)). "\n";
        echo $prodotto["name"] . " riceve uno sconto del 5%, il suo prezzo passa da " . $prodotto["price"] . " a " . $sconto;
    }
}

// !Traccia 2
$numeripari = [];
$numeridispari = [];
$numeri = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 20, 55, 150, 41];
for ($i=0; $i < count($numeri); $i++) { 
    if ($numeri[$i]%2===0) {
        array_push($numeripari, $numeri[$i]);
    } else if ($numeri[$i]%2!== 0) {
        array_push($numeridispari, $numeri[$i]);
    }
}
$mediaNumeriPari = array_sum($numeripari) / count($numeripari);
$mediaNumeriDispari = array_sum($numeridispari) / count($numeridispari);
 echo "La media dei numeri pari è: " . $mediaNumeriPari . "\n";
 echo "La media dei numeri dispari è: " . $mediaNumeriDispari . "\n";

// !Traccia 2 Extra
$studenti = [
   "Marco" => 75,
   "Giulia" => 45,
   "Alessandro" => 90,
   "Francesca" => 55,
   "Luca" => 62
];

print_r($studenti);

foreach ($studenti as $key => $studente) {
    if ($studente >= 60) {
         echo $key . " è promosso con " . $studente . " punti" . "\n";
    } else {
         echo $key . " è bocciato con " . $studente . " punti" . "\n";
    }
}

// !Traccia 3
$numeroBasso = 0;
$numeroAlto = 20;

for ($i = $numeroBasso; $i < $numeroAlto; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo "HACKHADEMY\n";
    } else if ($i % 3 === 0) {
        echo "PHP\n";
    } else if ($i % 5 === 0) {
        echo "JAVASCRIPT\n";
    } else {
        echo $i . "\n";
    }
}

//! Traccia 4
$prodottiCarrello = [
    [
    "nome" => "Smartphone",
    "marca" => "Samsung",
    "prezzo" => 800,
    "quantità" => 10,
    "garanzia" => "2 anni"
    ],
    [
    "nome" => "Tablet",
    "marca" => "Apple",
    "prezzo" => 600,
    "quantità" => 7,
    "garanzia" => "1 anno"
    ],
    [
    "nome" => "Monitor",
    "marca" => "LG",
    "prezzo" => 300,
    "quantità" => 12,
    "garanzia" => "2 anni"
    ]
];
for ($i=0; $i < count($prodottiCarrello); $i++) { 
    echo $prodottiCarrello[$i]["nome"] . " " . $prodottiCarrello[$i]["prezzo"] . " " . $prodottiCarrello[$i]["quantità"] . "\n";  
}

//! Traccia 5
$max = 10;
$n = 0;
$arraySum = [];
while ($n < $max) {
    $n++;
    array_push($arraySum, $n);
    $sum = array_sum($arraySum);

}
echo $sum;

//! Traccia 6 
$a = 0;
while ($b !== 7) {
    
    readline("Premi invio");
    $b = rand(0,10);
    echo "il numero stampato è " . $b . "\n";
}











?>