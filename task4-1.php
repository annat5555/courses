<?php
class Employee 
{
    protected $name;
    protected $salary;
    
    
    public function __construct( $n, $s )
    {
		$this->name = $n;
		$this->salary = $s;
	}
    
    function getName()
    {
		return $this->name;
	}

	function getSalary()
    {
		return $this->salary;
	}
	
	function doubleSalary()
    {
		$this->salary *= 2;
	}
	
	
}

class Rectangle 
{
    protected $width;
    protected $height;
    


	public function __construct( $w, $h )
    {
		$this->width = $w;
		$this->height = $h;
	}
	
	function getSquare()
    {
		return $this->width *  $this->height;
	}
	
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
