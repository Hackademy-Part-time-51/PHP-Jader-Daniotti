<?php 
class Company {
    public $name;
    public $location;
    public $tot_employees;
    public $avg_salary;
    public static $counterCompany = 0;
    public static $totalDepense = [];
    public static $totalExpense = 0;

    public function __construct($name, $location, $avg_salary, $tot_employees=0) {
        $this->name = $name;
        $this->location = $location;
        $this->avg_salary = $avg_salary;
        $this->tot_employees = $tot_employees;
        self::$counterCompany++;
        self::$totalDepense[] = $avg_salary * $tot_employees * 12;
    }

    public function fraseDitta() {
        if ($this->tot_employees == 0) {
            $fraseDitta = "L'azienda $this->name con sede in $this->location non ha dipendenti \n";
        } else {
            $fraseDitta = "L'azienda $this->name con sede in $this->location ha ben $this->tot_employees dipendenti \n";
        }
        echo $fraseDitta;
    }

    public function calcoloSpese($n) {
        $totaleSpesaMensile = $this->avg_salary * $this->tot_employees;
        $spesaTotale = $totaleSpesaMensile * $n;
        return $spesaTotale;
    }  

    public function calcoloSpesaTotale($n) {
        $spesaTotale = $this->calcoloSpese($n);
        echo "La spesa per $n mesi dell'azienda $this->name ammonta a $spesaTotale euro \n";
    }

    public static function getCounterCompany() {
        return self::$counterCompany;
    }

    public static function printCounterCompany() {
        echo "In questo momento sono state create " . self::$counterCompany . " aziende \n";
    }

    public static function printCounterSpesa() {
        self::$totalExpense = array_sum(self::$totalDepense);
        echo "Company annualmente spende " . self::$totalExpense . " euro \n";
    }
}

$azienda1 = new Company("TechCorp", "Milano", 2300, 5);
Company::printCounterCompany();
$azienda1->fraseDitta();
$azienda1->calcoloSpesaTotale(5);

$azienda2 = new Company("GreenEnergy", "Roma", 2300, 2);
Company::printCounterCompany();
$azienda2->fraseDitta();
$azienda2->calcoloSpesaTotale(8);

$azienda3 = new Company("Foodies", "Napoli", 1400);
Company::printCounterCompany();
$azienda3->fraseDitta();
$azienda3->calcoloSpesaTotale(4);

$azienda4 = new Company("AutoFuture", "Torino", 2100, 4);
Company::printCounterCompany();
$azienda4->fraseDitta();
$azienda4->calcoloSpesaTotale(6);

$azienda5 = new Company("SoftWareHouse", "Firenze", 1600, 2);
Company::printCounterCompany();
$azienda5->fraseDitta();
$azienda5->calcoloSpesaTotale(10);

Company::printCounterSpesa();




















