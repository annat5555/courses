<?php

	class User
	{
		public $surname; // прізвище
		public $name; // ім'я
		public $patronymic; // по батькові
		
		public function __construct($sn, $n, $p)
		{
			$this->surname = $sn;
			$this->name = $n;
			$this->patronymic = $p;
		}
	}
	
	
$props = ['surname', 'name', 'patronymic'];
$user = new User('Іванов', 'Іван', 'Іванович');
$props = ['surname', 'name', 'patronymic'];
echo $user->{$props[0]}; // виведе 'Іванов'
echo "\n";
echo $user->{$props[2]}; // виведе 'Іванович'
