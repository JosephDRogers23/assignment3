<?php
	// This is the file for the parent class

	class ParentClass {

		var $name;
		var $email;
		var $age;
		function __construct()
		{
			echo "In constructor!";
			$name="";
			$email="";
			$age=0;
		}
		function __construct_multiple($n, $e, $a)
		{
			$name = $n;
			$email = $e;
			$age = $a;
		}
		function set_name($n)
		{
			$name = $n;
		}
		function set_email($e)
		{
			$email = $e;
		}
		function set_age($a)
		{
			$age = $a;
		}

		function produce_output()
		{
			return output($age, strlen($name));
		}

		#Returns age to the power of number of letters in user's name.
		function output($a, $n)
		{
			if($n==0)
			{
				return 1;
			}
			else
			{
				 return output($a, $n-1);
			 }
		}


	}
