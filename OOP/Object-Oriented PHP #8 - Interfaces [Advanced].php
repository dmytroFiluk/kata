<?php

interface  CanFly
{
    public function fly();
}

interface  CanSwim
{
    public function swim();
}

interface  CanClimb
{
    public function climb();
}

interface  CanGreet
{
    public function greet($name);
}


interface  CanIntroduce
{
    public function speak();

    public function introduce();
}

interface  CanSpeak
{
    public function speak();
}

class Bird implements CanFly
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function fly()
    {
        return 'I am flying';
    }

    public function chirp()
    {
        return 'Chirp chirp';
    }

}

class Duck extends Bird implements CanSwim
{
    public function swim()
    {
        return 'Splash! I\'m swimming';
    }

    public function chirp()
    {
        return 'Quack quack';
    }
}

class Dog implements CanGreet, CanSwim
{
    public function swim()
    {
        return 'I\'m swimming, woof woof';
    }

    public function greet($name)
    {
        return "Hello $name, welcome to my home";
    }

    public function bark()
    {
        return "Woof woof";
    }
}

class Cat implements CanClimb
{
    public function climb()
    {
        return 'Look, I\'m climbing a tree';
    }

    public function meow()
    {
        return 'Meow meow';
    }

    public function play($name)
    {
        return "Hey $name, let's play!";
    }
}

class Person implements CanGreet, CanIntroduce
{
    public $name;
    public $age;
    public $occupation;

    public function __construct($name, $age, $occupation)
    {
        if (!is_string($name)) {
            throw new InvalidArgumentException('Name must be a string!');
        }

        if (!is_string($occupation)) {
            throw new InvalidArgumentException('Occupation must be a string!');
        }

        if ((int)$age <= 0) {
            throw new InvalidArgumentException('Age must be a non-negative integer!');
        }

        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
    }

    public function greet($name)
    {
        return "Hello $name, how are you?";
    }

    public function speak()
    {
        return "What am I supposed to say again?";
    }

    public function introduce()
    {
        return "Hello, my name is  $this->name, I am  $this->age years old and I am currently working as a(n) $this->occupation";
    }
}