<?php
class Arr
{
	private $numbers = array();

	public function __construct($n)
	{
		if (is_array($n)) {

			foreach ($n as $p) {
				array_push($this->numbers, $p);
			}
		} else {
			array_push($this->numbers, $n);
		}
	}

	public function getSum()
	{
		$k = 0;

		foreach ($this->numbers as $a) {

			$k = $k + $a;
		}

		return $k;
	}
	public function add($number)

	{
		array_push($this->numbers, $number);
		return $this;
	}
}

$arr = new Arr([1, 2, 3]);
echo $arr->getSum();
