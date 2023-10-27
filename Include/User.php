<?php
    class User {
        public $userID;
        public $email;
        public $firstname;
        public $lastname;
        public $address;
        public $city;
        public $zipcode;
        public $country;
        public $phone;

        function __construct($userID,$email,$firstname,$lastname,$address,$city,$zipcode,$country,$phone)
        {
            $this->userID = $userID;
            $this->email = $email;
            $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->address = $address;
            $this->city = $city;
            $this->zipcode = $zipcode;
            $this->country = $country;
            $this->phone = $phone;
        }
    }
?>