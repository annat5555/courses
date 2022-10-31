<?php
class Arr
{
	private $numbers = array();

	public function add($num)
	{
		if (is_array($num)) {


			foreach ($num as $n) {
				array_push($this->numbers, $n);
			}
		} else {
			array_push($this->numbers, $num);
		}
	}

	public function getAvg()
	{
		$sum = 0;
		$k = 0;

		foreach ($this->numbers as $n) {
			if (is_numeric($n)) {
				$sum += $n;
				$k++;
			}
		}
		if ($k == 0) throw new Exception("Array does not have numeric items...");
		return $sum / $k;
	}
}
