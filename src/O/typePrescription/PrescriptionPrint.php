<?php

namespace App;

use App\Medicament;
use App\Prescription;

class PrescriptionPrint
{
    public function printPrescriptionDetail(Prescription $prescription, Medicament $medicament)
    {
        echo $prescription->createPrescription($medicament);
    }
}
