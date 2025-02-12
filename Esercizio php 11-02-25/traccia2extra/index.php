<?php 

class Student {

    public $name;
    public $surname;
    public $age;
    public $grades = [];
    public $schoolName;
    public static $countOfStudents = 0;
    public function __construct($name, $surname, $age, $grades, $schoolName){
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->grades = $grades;
        $this->schoolName = $schoolName;
        self::$countOfStudents++;
    }
    public  function getMediaGrades() {
        if (count($this->grades) > 0) {
            $media = array_sum($this->grades) / count($this->grades);
            echo "Lo studente $this->name $this->surname ha " . $media ." come media dei voti! \n";
        } else {
            echo "Lo studente non ha voti \n";
        }
    }
    public static function countOfStudentsFunction(){
        echo self::$countOfStudents . " studenti creati \n";
    }
}

$student1 = new Student("Mario", "Rossi", 16, [8, 7, 9], "Liceo Classico Dante");
$student1->getMediaGrades();
Student::countOfStudentsFunction();

$student2 = new Student("Luca", "Bianchi", 17, [6, 8, 7], "Liceo Scientifico Galileo");
$student2->getMediaGrades();
Student::countOfStudentsFunction();

$student3 = new Student("Giulia", "Verdi", 15, [9, 9, 10], "Istituto Tecnico Leonardo");
$student3->getMediaGrades();
Student::countOfStudentsFunction();

$student4 = new Student("Anna", "Neri", 18, [7, 6, 8], "Liceo Artistico Van Gogh");
$student4->getMediaGrades();
Student::countOfStudentsFunction();

$student5 = new Student("Marco", "Gialli", 16, [5, 6, 7], "Istituto Alberghiero Escoffier");
$student5->getMediaGrades();
Student::countOfStudentsFunction();
