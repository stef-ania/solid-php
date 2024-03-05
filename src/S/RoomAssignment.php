<?php

namespace App;



use App\Patient;
use App\Room;

class RoomAssignment
{
  private $patient;
  private $room;

  public function __construct($patient, $room)
  {
    $this->patient = $patient;
    $this->room = $room;
  }

  public function assignRoom()
  {
    echo "Assigning room Nº{$this->room->getRoomNumber()} to {$this->patient->getName()} {$this->patient->getLastname()}.";
  }
}
