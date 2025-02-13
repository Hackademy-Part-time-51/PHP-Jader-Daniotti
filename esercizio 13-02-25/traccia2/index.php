<?php
class Vertebrates {
    public function __construct() {
        $this->printVertebrated();
    }
    protected function printVertebrated(){
        echo "Sono un animale vertebrato";
    }
}

class WarmBlooded extends Vertebrates {
    public function __construct() {
        parent::__construct();
        $this->printWarmBlooded();
    }
    protected function printWarmBlooded() {
        echo "\n Sono un animale a sangue caldo";
    }
}

class Mammals extends WarmBlooded {
    public function __construct() {
        parent::__construct();
        $this->printMammals();
    }
    protected function printMammals() {
        echo "\n Sono un mammifero \n";
    }
}
class Bird extends WarmBlooded {
    public function __construct() {
        parent::__construct();
        $this->printBird();
    }
    protected function printBird() {
        echo "\n Sono un uccello \n";
    }
}

class ColdBlooded extends Vertebrates {
    public function __construct() {
        parent::__construct();
        $this->coldBlooded();
    }
    protected function coldBlooded() {
        echo "\n Sono un animale a sangue freddo";
    }
}

class Fish extends ColdBlooded {
    public function __construct() {
        parent::__construct();
        $this->printFish();
    }
    protected function printFish() {
        echo "\n Sono un pesce \n";
    }
}
class Reptiles extends ColdBlooded {
    public function __construct() {
        parent::__construct();
        $this->printReptiles();
    }
    protected function printReptiles() {
        echo "\n Sono un rettile \n";
    }
}
class Amphibians extends ColdBlooded {
    public function __construct() {
        parent::__construct();
        $this->printAmphibians();
    }
    protected function printAmphibians() {
        echo "\n Sono un anfibio ";
    }
}

$matteostorari = new Fish(); 



?>