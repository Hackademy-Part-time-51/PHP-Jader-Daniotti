<?php 

class Car {
	private $num_telaio;

    public function __construct($telaio){
        $this->num_telaio = $telaio;
        $this->getTelaio();
    }
    protected function getTelaio(){
        return $this->num_telaio;
    }
}
class Fiat extends Car {
    protected $license;
	protected $name;
    public function __construct($license, $name, $telaio) {
        $this->license = $license;
        $this->name = $name;
        parent::__construct($telaio);
        parent::getTelaio();
        $this->printFiat();
    }
    protected function printFiat(){
        echo "La mia macchina è $this->name, con targa $this->license e il telaio è: " . $this->getTelaio() . "\n";
    }
}

$testmacchina = new Fiat("AB123CD", "FIAT PANDA", "123456789");


