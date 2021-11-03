<?php

//Bármilyen osztályra hivatkozunk, ez a fájl meg fogja találni
require '../vendor/autoload.php';

$user = new Petrik\ComposerElso\User();
$user->kiir();

?>