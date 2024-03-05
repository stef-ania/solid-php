<?php
require_once("src/patient/Patient.php");
require_once("src/S/Room.php");
require_once("src/S/RoomAssignment.php");

require_once("src/O/Medicament.php");
require_once("src/O/typePrescription/PrescriptionBasic.php");
require_once("src/O/typePrescription/PrescriptionDetail.php");
require_once("src/O/typePrescription/PrescriptionPrint.php");

use App\Patient;
use App\Room;
use App\RoomAssignment;
use App\Medicament;
use App\PrescriptionBasic;
use App\PrescriptionDetail;
use App\PrescriptionPrint;

//Letra solid "S"
$patient = new Patient("Monica", "Castillo", 40, false, "Diabetes");
$room = new Room(300);
$roomAssigment = new RoomAssignment($patient, $room);
$roomAssigment->assignRoom();
echo "<br>";
echo "<br>";
//Letra solid "O"
$medicament = new Medicament("Paracetamol", "Take 1 tablet (500 mg of paracetamol) every 4-6 hours, as needed.", "analgesic and antipyretic drug.");
$prescriptionptionBasic = new PrescriptionBasic();
$prescriptionDetail = new PrescriptionDetail();
$printRecibe = new PrescriptionPrint;

$printRecibe->printPrescriptionDetail($prescriptionptionBasic, $medicament);
echo "<br>";
$printRecibe->printPrescriptionDetail($prescriptionDetail, $medicament);

//Letra solid "L"
//Letra solid "I"
//Letra solid "D"
