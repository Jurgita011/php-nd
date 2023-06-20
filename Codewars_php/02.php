<?php

// https://www.codewars.com/kata/object-oriented-php-number-2-class-constructors-and-$this

class Person
{

    public $first_name;
    public $last_name;

    public function __construct($first_name, $last_name)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function get_full_name()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}

$person1 = new Person('Tom', 'Ford');
$person2 = new Person('Hillary', 'Clinton');

echo $person1->get_full_name() . '<br>';
echo $person2->get_full_name() . '<br>';