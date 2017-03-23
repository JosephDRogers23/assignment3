<?php
	// this file will extend PArentClass.php

	class ChildClass extends ParentClass {

		public $email = "";
		public $name = "";
		public $age = 0;

		function __constructor()
		{
			$email="";
			$name="";
			$age = 0;
		}

		function __construct_multiple($n, $e, $a)
		{
				$name = $n;
				$email = $e;
				$age = $a;
		}

		function __isset($email)
		{
			return $email!="";
		}

		function produce_output()
		{
			$n = strlen($email);
			return $output($a, $n);
		}

		function output($a, $n)
		{
			return $a * $n;
		}


	}
?>
