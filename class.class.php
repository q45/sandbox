<?php
 User::pwd_string();


class User 
	{
		public $name, $password;

		function get_password() {
			return $this->password;
		}

		static function pwd_string() {
			echo "Please enter your password <br>";
		}
	}

?>
