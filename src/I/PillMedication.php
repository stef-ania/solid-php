<?php

namespace App;

class PillMedication implements OralMedication {
    public function takeOrally() {
        echo "Take the medication by mouth as directed by your doctor.";
    }
}