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
}


function register(string $name , Age $age)
{
	


}

$age = new Age(35);
$age->age = 500;
register('John Doe', $age);

