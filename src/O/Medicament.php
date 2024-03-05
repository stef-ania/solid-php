<?php

namespace App;

class Medicament
{
    private $name;
    private $type;
    private $description;

    public function __construct($name, $description, $type)
    {
        $this->name = $name;
        $this->description = $description;
        $this->type = $type;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getType()
    {
        return $this->type;
    }
}
