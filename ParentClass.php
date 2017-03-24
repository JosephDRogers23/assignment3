<?php
	// This is the file for the parent class

	class ParentClass {

		var $name="";
		var $email="";
		var $age=0;
		function __construct($n, $e, $a)
		{
			$this->name=$n;
			$this->email=$e;
			$this->age=$a;
		}

		/*function __constructMultiple($n, $e, $a)
		{
			$this->name = $n;
			$this->email = $e;
			$this->age = $a;
		}*/

		function setName($n) {
			$this->name = $n;
		}

		function setEmail($e) {
			$this->email = $e;
		}

		function setAge($a) {
			$this->age = $a;
		}

		function getName() {
			return $this->name;
		}

		function getEmail() {
			return $this->email;
		}

		function getAge() {
			return $this->age;
		}

		#Returns age to the power of number of letters in user's name.
		function output($a, $n) {
			if ($a<1) {
				return 1;
			}
			else {
				 return $n * $this->output($a-1, $n);
			 }
		}
		function produceOutput() {

			return $this->output($this->age, strlen($this->name));
		}
		function __isset($name) {
			return $name!="";
		}




	}
