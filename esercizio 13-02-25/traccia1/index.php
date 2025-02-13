<?php 
class Continent {
    public $nameContinent;
	public function __construct($continent)
	{
		$this->nameContinent = $continent;
	}
}

class Country extends Continent {
    public $nameCountry;

    public function __construct($country, $continent) {
        $this->nameCountry = $country;
        parent::__construct($continent);
    }

} 

class Region extends Country {
    public $nameRegion;
    public function __construct($region, $country, $continent){
        $this->nameRegion = $region;
        parent::__construct($country, $continent);
    }
}

class Province extends Region {
    public $nameProvince;
    public function __construct($province, $region, $country, $continent) {
        $this->nameProvince = $province;
        parent::__construct($region, $country, $continent);
    }
}

class City extends Province {
    public $nameCity;
    public function __construct($city, $province, $region, $country, $continent){
        $this->nameCity = $city;
        parent::__construct($province, $region, $country, $continent);
    }
}

class Street extends City {
    public $nameStreet;
    public function __construct($street, $city, $province, $region, $country, $continent) {
        $this->nameStreet = $street;
        parent::__construct($city, $province, $region, $country, $continent);
    }
    public function getLocation(){
        echo "Mi trovo in $this->nameContinent, $this->nameCountry, $this->nameRegion, $this->nameProvince, $this->nameCity, $this->nameStreet \n"; 
    }
}

$position = new Street ("Via Volontari del sangue", "Solaro", "MI-CONNEXION", "Lombardia", "Italia", "Europa");
$position->getLocation();














