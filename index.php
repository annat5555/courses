<?php
class Employee 
{
    public $name;
    public $age;
    public $salary;
}
//Create object
$user1 = New Employee; //First object
$user1->name = 'anna';//name object
$user1->age = 40; //age object
$user1->salary = 1000; //salary object

$user2 = New Employee; //Second object
$user2->name = 'Eugenia'; //name object
$user2->age = 68; //name object
$user2->salary = 890; //name object
echo $user1->salary + $user2->salary; //amount salary
echo '<br>';
echo $user1->age + $user2->age; //amount age
echo '<br>';

?> 