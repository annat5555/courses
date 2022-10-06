<?php
class Employee 
{
    protected $name;
    protected $age;
    protected $salary;
    
    
    public function __construct( $n, $a, $s )
    {
		$this->name = $n;
		$this->age = $a;
		$this->salary = $s;
	}
    
    function getName()
    {
		return $this->name;
	}
	function getAge()
    {
		return $this->age;
	}
	function getSalary()
    {
		return $this->salary;
	}
	
	function checkAge()
    {
		return ( $this->age > 18 );
	}
	
	
}

class User 
{
    protected $name;
    protected $age;
  
      
	 public function __construct( $n, $a )
    {
		$this->name = $n;
		$this->age = $a;
		
	}
	public function setAge($age)
    {
		if ($age>=18) {
			$this->age = $age;
		}
	}
	  
	function getAge()
    {
		return $this->age;
	}
}

//Create object
$user1 = New Employee( "Anna", 17, 1000 ); //First object
echo '<br>';
$user2 = New Employee( "Eugenia", 68, 890 ); //Second object
echo '<br>';
$user3 = New User ( "John", 25 ); //Third object
$user3->setAge( 30 );
echo "Змінений вік користувача: " . $user3->getAge();
echo '<br>';
echo "Зарплата обох " . $user1->getSalary() + $user2->getSalary(); //amount salary
echo '<br>';
echo $user1->getAge() + $user2->getAge(); //amount age
echo '<br>';
echo "Ім'я другого користувача: " . $user2->getName();
echo '<br>';
echo "Вік другого користувача: " . $user2->getAge();
echo '<br>';
echo "Зарплатня другого користувача: " . $user2->getSalary();
echo '<br>';

echo $user1->getName() . ": "; 

	if ($user1->checkAge() ) {
		echo "Більше 18 років";
		echo '<br>';
	} 
	else {
		echo "Меньше 18 років";
		echo '<br>';
	}

echo $user2->getName() . ": "; 

	if ($user2->checkAge() ) {
		echo "Більше 18 років";
		echo '<br>';
	} 
	else {
		echo "Меньше 18 років";
		echo '<br>';
	}
	
?> 
