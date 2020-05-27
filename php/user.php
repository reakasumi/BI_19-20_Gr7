<?php

    class User{
        //private $uniqid=uniqid();

        private $ID=0;
        private $userName;
        private $password;
        private $email;
        private $gender;

        



        // Methods
        function set_ID($ID) {
            $this->ID = $ID;
        }
        function get_ID() {
            return $this->ID;
        }

        // Methods
        function set_name($userName) {
            $this->userName = $userName;
        }
        function get_name() {
            return $this->userName;
        }

        // Methods
        function set_password($password) {
            $this->password = $passwrod;
        }
        function get_password() {
            return $this->password;
        }

        // Methods
        function set_email($email) {
            $this->email = $email;
        }
        function get_email() {
            return $this->email;
        }

        // Methods
        function set_gender($gender) {
            $this->gender = $gender;
        }
        function get_gender() {
            return $this->gender;
        }

        
    }


?>