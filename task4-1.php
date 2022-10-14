<?php

// class Employee - keeps data about employee's name and salary
class Employee 
{
    protected $name;
    protected $salary;
    
    // constructor which creates a new employee and allows to specify name and salary
    public function __construct( $n, $s )
    {
		$this->name = $n;
		$this->salary = $s;
	}
    
    // method which allows to obtain name of the employee
    function getName()
    {
		return $this->name;
	}

	// method which allows to obtain salary of the employee
	function getSalary()
    {
		return $this->salary;
	}
	
	// method which allows to double the salary of the employee
	function doubleSalary()
    {
		$this->salary *= 2;
	}
	
	
}


// class Rectangle - keeps important data about such geometric shape as a rectangle
class Rectangle 
{
    protected $width;
    protected $height;
    

	// constructor which creates a new rectangle and allows to specify its width and height
	public function __construct( $w, $h )
    {
		$this->width = $w;
		$this->height = $h;
	}
	
	// method which calculates square space of the rectangle
	function getSquare()
    {
		return $this->width *  $this->height;
	}
	
	// method which calculates perimeter of the rectangle
	function getPerimeter()
    {
		return ( $this->width + $this->height) * 2;
	}
}



//Create object
$user1 = New Employee( "Kolya", 34800 ); //First object
echo '<br>';
$user2 = New Employee( "Eugenia", 6749 ); //Second object
echo '<br>';
echo "Зарплата " . $user1->getName() . " була " . $user1->getSalary();
$user1->doubleSalary();
echo " та стала " . $user1->getSalary();
echo '<br>';
echo "Ім'я другого користувача: " . $user2->getName();
echo '<br>';
echo "Зарплатня другого користувача: " . $user2->getSalary();
echo '<br>';
$figure = New Rectangle  (24 , 110 ) ; //New object
echo '<br>';
echo "Площа " . $figure->getSquare();
echo '<br>';
echo "Периметр " . $figure->getPerimeter();

?> 
