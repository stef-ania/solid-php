<?php

namespace App;

use App\Medicament;

interface Prescription
{
    public function createPrescription(Medicament $medicament);
}
