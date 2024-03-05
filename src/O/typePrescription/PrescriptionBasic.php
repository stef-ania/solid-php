<?php

namespace App;

use App\Medicament;

require_once("src/O/typePrescription/Prescription.php");

class PrescriptionBasic implements Prescription
{

    public function createPrescription(Medicament $medicament)
    {
        return "Detail of  {$medicament->getName()}: {$medicament->getType()}";
    }
}
