<?php


class Person

{

    public $name;

    public function __contruct($name)
    {
        $this->name = $name;
    }

    public function job()
    {
        return 'software developer';
    }

    public function favoriteTeam()
    {

    }

    private function privateThings()
    {
        return 'private info';
    }
}

$method = new \ReflectionMethod(Person::class, 'privateThings');
$method->setAccessible(true);
$bob = new Person('Bob');

$info = $method->invoke($bob);
var_dump($info);