<?php
    class Animal {
        public $name = '';
        public $type = '';
        public $age = 0;

        function __construct($name, $type, $age) {
            $this->name = $name;
            $this->type = $type;
            $this->age = $age;

        }
        //animal name
        function set_name($name) {
            $this->name = $name;
        }
        function get_name() {
            return $this->name;
        }
        //animal type
        function set_type($type) {
            $this->type = $type;
        }
        function get_type() {
            return $this->type;
        }
        //animal age
        function set_age($age) {
            $this->age = $age;
        }
        function get_age() {
            return $this->age;
        }

        function introduce() {
            echo "$this->name the $this->type";
        }
    }

    class Dog extends Animal {
        public $trainingLevel = 0;

        function __construct($name, $type, $age) {
            parent::__construct($name, $type, $age);
            echo "Created instance of Dog, name: $this->name, type: $this->type, age: $this->age.";
        }

        function train() {
            $this->trainingLevel += 1;
            echo "$this->name now has a training level of: $this->trainingLevel ";
            echo "<br>";
        }

        function getTrainingLevel(){
            return $this->trainingLevel;
        }
    }

?>