<?php

namespace App;


class Patient 
{
    private string $name;
    private string $lastname;
    private int $age;
    private bool $is_emergency;
    private string $condition;

    public function __construct(string $name, string $lastname, int $age, string $condition)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->is_emergency = false;
        $this->condition = $condition;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getIsEmergency()
    {
        return $this->is_emergency;
    }

    public function setIsEmergency()
    {
        return $this->is_emergency = true;
    }

    public function getCondition()
    {
        return $this->condition;
    }

    public function getMedicalCondition()
    {
        return "{$this->name} {$this->lastname}, {$this->age} is admited with {$this->condition}.";
    }
}


?>