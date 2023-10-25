<?php
    class User {
        public $userID;
        public $email;
        public $phone;

        function __construct($userID,$email,$phone)
        {
            $this->userID = $userID;
            $this->email = $email;
            $this->phone = $phone;
        }
    }
?>