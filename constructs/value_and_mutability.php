<?php 


class Age 
{

	private $age;

	public function __construct($age)
	{
		if ($age <= 0 || $age > 120){

			throw new InvalidArgumentException("Error Processing Unknown Age");
		}

		$this->age = $age;
	}

	public function increament()
	{
		$this->age += 1;
	}

	public function get()
	{
		return $this->age;
	}
}


function register(string $name , Age $age)
{
	


}

// $age = new Age(35);
// $age->age = 500;
// register('John Doe', $age);


$age = new Age(35);
$age->increament();
var_dump($age->get());