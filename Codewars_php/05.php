<?php

class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce() {
        return "Hello, my name is {$this->name}!";
    }
}

class Salesman extends Person {
    public $occupation = "Salesman";

    public function introduce() {
        $parentIntroduce = parent::introduce();
        return "{$parentIntroduce} Don't forget to check out my products!";
    }
}

class ComputerProgrammer extends Person {
    public $occupation = "Computer Programmer";

    public function describe_job() {
        return "I am currently working as a(n) {$this->occupation}. Don't forget to check out my Codewars account ;)";
    }
}

class WebDeveloper extends ComputerProgrammer {
    public $occupation = "Web Developer";

    public function describe_job() {
        $parentDescribeJob = parent::describe_job();
        return "{$parentDescribeJob} And don't forget to check on my website :D";
    }

    public function describe_website() {
        return "My professional world-class website is made from HTML, CSS, Javascript, and PHP!";
    }
}
$salesman = new Salesman("John", 30);
echo $salesman->introduce() . "<br>";

$programmer = new ComputerProgrammer("Mary", 25);
echo $programmer->describe_job() . "<br>";

$webDeveloper = new WebDeveloper("Tom", 35);
echo $webDeveloper->describe_job() . "<br>";
echo $webDeveloper->describe_website() . "<br>";