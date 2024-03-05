<?php

namespace App;

use App\Medicament;

require_once("src/O/typePrescription/Prescription.php");

class PrescriptionDetail implements Prescription
{
    public function createPrescription(Medicament $medicament)
    {
        return "This is the Recipe for {$medicament->getName()}: {$medicament->getDescription()}";
    }
}
