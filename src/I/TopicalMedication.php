<?php

namespace App;

class CreamMedication implements TopicalMedication {
    public function applyTopically() {
        echo "Apply the medication to the affected skin in a thin layer as needed.";
    }
}