<?php 

class subjects{

    private $subject1;
    private $subject2;
 

    public function setSubject1($subject1) {
        return $this->subject1 = $subject1;
    }
    public function getSubject1(){
        return $this->subject1;
    }
     public function getSubject2(){
        return $this->subject2;
     }

     public function setSubject2($subject2){
        return $this->subject2 = $subject2;
     }

}

$subject1 = new subjects();
$subject2 = new subjects();

$subject1->setSubject1("Physics");
$subject2->setSubject2("Chemistry");

$physics = $subject1->getSubject1();
$chemistry = $subject2->getSubject2();

echo $physics;
echo "\n";
echo $chemistry;


?>