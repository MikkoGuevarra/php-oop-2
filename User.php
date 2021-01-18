<?php

class User {
    public $name;
    public $lastname;
    protected $age;
    public $email;

    function __construct($_name, $_lastname) {
        $this->name = $_name;
        $this->lastname = $_lastname;
    }

    public function ageControl($_age){
        if (is_numeric($_age) && $_age > 0 && $_age < 110) {
            if ($_age < 18) {
                throw new Exception ('underage');
            }
            $this->age = $_age;
        } else {
            throw new Exception("Error Processing Request", 1);

        }
    }

    public function emailControl($_email){
        if (!filter_var($_email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Error: Invalid Email");
        } else {
            $this->email = $_email;
        }
    }

    public function getAge(){
        return $this->age ;
    }
}
?>
