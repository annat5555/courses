<?php

	class User
	{
		public $surname; // прізвище
		public $name; // ім'я
		public $patronymic; // по батькові
		public $age; // вік
	
		
		public function __construct($sn, $n, $p, $a)
		{
			$this->surname = $sn;
			$this->name = $n;
			$this->patronymic = $p;
			$this->age = $a;
			
		}
		public function getName()
		{
			return $this->name;
		}
		
		public function getAge()
		{
			return $this->age;
		}
	}
	
	
$props = ["surname", "name", "patronymic"];
$user = new User("Іванов", "Іван", "Іванович", 25);
$props = ['surname', 'name', 'patronymic'];
echo $user->{$props[0]}; // виведе 'Іванов'
echo "\n";
echo $user->{$props[2]}; // виведе 'Іванович'
$methods = ['method1' => 'getName', 'method2' => 'getAge'];
echo "\n";
echo $user->{$methods["method1"]}();
echo "\n";
echo $user->{$methods["method2"]}();
