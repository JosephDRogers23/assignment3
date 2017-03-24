<?php
	// this file will extend PArentClass.php

	class ChildClass extends ParentClass {

		public $email="";
		public $name="";
		public $age=0;

		function __constructor($n, $e, $a) {
			$email=$e;
			$name=$n;
			$age = $a;
		}

		function __isset($email) {
			return $email!="";
		}

		function output($a, $n) {
			return $a * $n;
		}

		function produceOutput() {
			$n = strlen($this->email);
			return $this->output($this->age, $n);
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


	}
?>
