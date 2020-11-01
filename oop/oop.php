<?php
    class Person{
        private $name;
        private $email;
        private static $ageLimit = 40;

        public function __construct($name, $email) {
            $this->name = $name;
            $this->email = $email;

            echo __CLASS__ .' created <br>';
        }

        public function __destruct() {
            echo __CLASS__ .' destroyed <br>';
        }

        public function getName() {
            return $this->name;
        }

        public function setName($name) {
            return $this->name = $name;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            return $this->email = $email;
        }

        public static function getAgeLimit() {
            // Use self instead of this when static
            return self::$ageLimit;
        }
    }

    $person1 = new Person('Bob', 'bob@gmail.com');

    echo $person1->getName();
    echo '<br>';
    echo $person1->getEmail();
    echo '<br>';

    class Customer extends Person {
        private $balance;

        public function __construct($name, $email, $balance) {
            parent::__construct($name, $email, $balance);
            $this->balance = $balance;
            echo 'A new ' . __CLASS__ . ' has been created.<br>';
            
        }    

        public function setBalance($balance) {
            $this->balance = $balance;
        }

        public function getBalance() {
            return $this->balance;
        }
    }

    $customer1 = new Customer('Hank', 'hank@gmail.com', 300); 

    echo $customer1->getBalance();

    // Static method
    echo Person::getAgeLimit();
?>