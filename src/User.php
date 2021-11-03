<?php

namespace Petrik\ComposerElso;

use Petrik\ComposerElso\Animals\Tiger;

class User{

    public function kiir() {
        echo "Hello User\n";
    }

    public function newPet() {
        return new Tiger();
    }
}

?>