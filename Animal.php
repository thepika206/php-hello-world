<?php
    class Animal {
        public $name = '';
        public $type = '';
        
        function set_name($name) {
            $this->name = $name;
        }
        function set_type($type) {
            $this->type = $type;
        }

        function get_name() {
            return $this->name;
        }

        function speak(){
            echo "$this->name says hi";
        }

        function introduce() {
            echo "$this->name the $this->type";
        }
    }

?>