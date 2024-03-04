<?php

namespace App;

class InjectionMedication implements InjectableMedication {
    public function inject() {
        echo "Administer medication intramuscularly or subcutaneously according to medical instructions, taking into account proper injection techniques.";
    }
}