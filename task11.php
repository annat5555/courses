<?php
class User
{
	private $name;
	private $age;

	public function __construct($n, $a)
	{
		$this->name = $n;
		$this->age = $a;
	}
	public function __get($name)
	{
		if (strcmp($name, "name") == 0) return $this->name;
		if (strcmp($name, "age") == 0) return $this->age;
	}
}


class Employee
{
	private $name;
	private $age;
	private $salary;

	public function __construct($n, $a, $s)
	{
		$this->name = $n;
		$this->age = $a;
		$this->salary = $s;
	}
	public function __get($name)
	{
		if (strcmp($name, "name") == 0) return $this->name;
		if (strcmp($name, "age") == 0) return $this->age;
		if (strcmp($name, "salary") == 0) return $this->salary;
	}
}


class Student extends User
{
	private $course;


	public function __construct($n, $a, $c)
	{
		parent::__construct($n, $a);
		$this->course = $c;
	}

	public function __get($name)
	{
		if (strcmp($name, "course") == 0) return $this->course;
		return parent::__get($name);
	}

	public function addOneYear()
	{
		$this->course++;
	}
}


class Programmer extends Employee
{
	private $langs = array();

	public function __construct($n, $a, $s, $l)
	{
		parent::__construct($n, $a, $s);
		$this->langs = $l;
	}

	public function __get($name)
	{
		if (strcmp($name, "langs") == 0) return $this->langs;
		return parent::__get($name);
	}
	public function __set($name, $value)
	{
		if (strcmp($name, "langs") == 0) $this->langs = $value;
		else parent::__set($name, $value);
	}
}


class Driver extends Employee
{
	private $yoe;
	private $category;

	public function __construct($n, $a, $s, $y, $ca)
	{
		parent::__construct($n, $a, $s);
		$this->yoe = $y;
		$this->category = $ca;
	}

	public function __get($name)
	{
		if (strcmp($name, "yoe") == 0) return $this->yoe;
		if (strcmp($name, "category") == 0) return $this->category;

		return parent::__get($name);
	}

	public function __set($name, $value)
	{
		switch ($name) {
			case "yoe":
				$this->yoe = $value;
				break;

			case "category":
				$this->category = $value;
				break;

			default:
				parent::__set($name, $value);
				break;
		}
	}
}



$user1 = new User("Marta", 25);
echo  "Ім'я користувача " . $user1->name;
echo "\n";
echo  "Вік користувача " . $user1->age;
echo "\n";


$newStudent = new Student("Olga", 20, 2);
echo  "Ім'я студента " . $newStudent->name;
echo "\n";
echo  "Вік студента " . $newStudent->age;
echo "\n";
echo  "Куpс користувача " . $newStudent->course;
echo "\n";
$newStudent->addOneYear();
echo  "Новий куpс користувача " . $newStudent->course;
echo "\n";


$newEmployee = new Employee("Mykola", 39, 1830);
echo  "Ім'я робітника " . $newEmployee->name;
echo "\n";
echo  "Вік робітника " . $newEmployee->age;
echo "\n";
echo  "Зарплатня робітника " . $newEmployee->salary;
echo "\n";


$newprogrammer = new Programmer("Alex", 30, 2500, ["php", "sql", "javascript"]);
var_dump($newprogrammer->langs);
echo "\n";


$newDriver = new Driver("Matviy", 25, 1600, 5, "B");
echo  "Ім'я водія " . $newDriver->name;
echo "\n";
echo  "Вік водія " . $newDriver->age;
echo "\n";
echo  "Зарплатня водія " . $newDriver->salary;
echo "\n";
echo  "Стаж водія " . $newDriver->yoe;
echo "\n";
echo  "Категорія водія " . $newDriver->category;
echo "\n";
