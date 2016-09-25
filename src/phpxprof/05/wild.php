<?php

namespace wild;

class Animal {

    public function __construct() {
        $this->type = 'tiger';
    }

    function getType() {
        return $this->type;
    }

}
