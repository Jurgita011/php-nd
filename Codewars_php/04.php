<?php

// https://www.codewars.com/kata/5798bb604be912fb6700008c

class Person
{

    const species = 'Homo Sapiens';

    public $name, $age, $occupation;

    public function __construct($name, $age, $occupation)
    {
        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
    }

    public function introduce()
    {
        return "Hello, my name is $this->name";
    }

    public function describe_job()
    {
        return "I am currently working as a(n) $this->occupation";
    }

    public static function greet_extraterrestrials($species)
    {
        return "Welcome to Planet Earth $species!";
    }
}


$person1 = new Person('Tom', 36, 'Teacher');

echo $person1->introduce() . '<br>';
echo $person1->describe_job() . '<br>';
echo $greetings = Person::greet_extraterrestrials('Aliens');