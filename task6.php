<?php
class Employee
{
	private $name;
	private $surmane;
	protected $salary;


	public function __construct($n, $su, $s)
	{
		$this->name = $n;
		$this->surmane = $su;
		$this->salary = $s;
	}

	public function __get($name)
	{
		if (strcmp($name, "name") == 0) return $this->name;
		if (strcmp($name, "surmane") == 0) return $this->surmane;
		if (strcmp($name, "salary") == 0) return $this->salary;
	}
	public function __set($name, $value)
	{
		if (strcmp($name, "salary") == 0) $this->salary = $value;
	}
	
}

class Student
{
	private $name;
	private $surmane;
	protected $course;


	public function __construct($n, $su, $s)
	{
		$this->name = $n;
		$this->surmane = $su;
		$this->course = $s;
	}

	private function isTransferAllowed()
	{
		if ($this->course < 5) return true;
		return false;
	}

	public function transferToNextCourse()
	{
		if ($this->isTransferAllowed()) $this->course++;
	}

	public function __get($name)
	{
		if (strcmp($name, "name") == 0) return $this->name;
		if (strcmp($name, "surmane") == 0) return $this->surmane;
		if (strcmp($name, "course") == 0) return $this->course;
	}
	public function __set($name, $value)
	{
		if ( (strcmp($name, "course") == 0) && ( $value > 0 ) && ( $value <= 5 ) ) $this->course = $value;
	}
}

//Create object
$user1 = new Employee("Eric", "Brokovich", 1000); //First object
echo '<br>';
echo  "Ім'я користовача " .$user1->name;
echo '<br>';
echo  "Прізвищє користовача " .$user1->surmane;
echo '<br>';
echo  "Запрлатня користовача " .$user1->salary;
echo '<br>';
$newStudent = new Student("Anna", "Gumbinin", 2);
echo '<br>';
echo  "Ім'я студента " .$newStudent->name;
echo '<br>';
echo  "Прізвищє студента " .$newStudent->surmane;
echo '<br>';
echo  "Курс студента " .$newStudent->course;
echo '<br>';
echo "Курс до: " . $newStudent->course;
$newStudent->transferToNextCourse();
echo '<br>';
echo "Курс після: " . $newStudent->course;
echo '<br>';
