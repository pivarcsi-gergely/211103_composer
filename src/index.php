<?php

//Bármilyen osztályra hivatkozunk, ez a fájl meg fogja találni
require '../vendor/autoload.php';

use Petrik\ComposerElso\User;

$user = new User();
$user->kiir();

$user->newPet()->roar();

?>