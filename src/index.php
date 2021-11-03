<?php

//Bármilyen osztályra hivatkozunk, ez a fájl meg fogja találni
require '../vendor/autoload.php';

use Petrik\ComposerElso\User;

$user = new User();
$user->kiir();

$user->newPet()->roar();

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Hello World !');

$writer = new Xlsx($spreadsheet);
$writer->save('hello world.xlsx');

?>