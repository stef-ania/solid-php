<?php

namespace App;
use App\Patient;

class Admissions
{
    private $patient;

    public function __construct(Patient $patient)
    {
        $this->patient = $patient;
    }

    public function admitPatient()
    {
        echo "Admitting patient: " . $this->patient->getDetails() . "\n";
    }
}

?>

<!-- getDetails needs to be defined in Patient Interface?  -->