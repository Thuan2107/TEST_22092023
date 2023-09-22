<?php
    class Person{
        protected $name;
        protected $age;

        public function __construct($name, $age)
        {
            $this->name = $name;
            $this->age = $age;
        }

        public function introduce(){
            echo "Hi, my name is $this->name and I am $this->age years old";
        }
    }

    class Student extends Person {
        protected $major;

        public function __construct($major)
	{
		$this->major = $major;
	}
        public function introduce(){
            echo "Hi, my name is $this->name and I am $this->age years old. My major is $this->major" ;
        }
      }
?>