<?php
class Employee
{
	protected $name;
	protected $age;
	protected $salary;


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
	public function __set($name, $value)
	{
		if (strcmp($name, "name") == 0) $this->name = $value;
		if (strcmp($name, "age") == 0) $this->age = $value;
		if (strcmp($name, "salary") == 0) $this->salary = $value;
	}

	private function isAgeCorrect($age)
	{

		if (($age >= 1) && ($age <= 100)) return true;
		else return false;
	}


	public function setAge($age)
	{
		if ($this->isAgeCorrect($age)) {
			$this->age = $age;
		}
	}
	public function getSalary()
	{
		return $this->salary . "$";
	}
}

class Student
{
	protected $name;
	protected $course;


	public function __construct($n, $c)
	{
		$this->name = $n;
		$this->course = $c;
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
		if (strcmp($name, "course") == 0) return $this->course;
	}
}

//Create object
$user1 = new Employee("eric", 25, 1000); //First object
echo '<br>';
$user2 = new Employee("kyle", 30, 2000); //Second object
echo '<br>';
echo "Зарплата обох " . $user1->salary + $user2->salary; //amount salary
echo '<br>';
echo "Вік другого користувача: " . $user2->age;
echo '<br>';
$user2->setAge(-5);
echo '<br>';
echo "Змінений вік другого користувача: " . $user2->age;
echo '<br>';
$user2->setAge(50);
echo "Змінений вік другого користувача: " . $user2->age;
echo '<br>';
$newStudent = new Student("Anna", 2);
echo '<br>';
echo "Курс до: " . $newStudent->course;
$newStudent->transferToNextCourse();
echo '<br>';
echo "Курс після: " . $newStudent->course;
echo '<br>';
echo "Зарплатня: " . $user2->getSalary();
