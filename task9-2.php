<?php
class City
{
	private $name;
	private $foundation;
	private $population;

	public $props = array("name", "foundation", "population");

	public function __construct($n, $f, $p)
	{
		$this->name = $n;
		$this->foundation = $f;
		$this->population = $p;
	}
	public function getProp($pname)
	{
		if (strcmp($pname, "name") == 0) return $this->name;
		if (strcmp($pname, "foundation") == 0) return $this->foundation;
		if (strcmp($pname, "population") == 0) return $this->salary;
	}
}


$town = new City("Sumy", 1652, 264753); //First object
foreach ($town->props as $pn) {
	echo "Prop " . $pn . " = " . $town->getProp($pn) . "\n";
}
