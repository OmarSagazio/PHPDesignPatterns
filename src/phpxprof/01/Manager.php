<?php

class Manager extends Employee {

    protected $dept;

    public function __construct($name, $salary, $dept) {
        parent::__construct($name, $salary);

        $this->dept = $dept;
    }

    public function giveRaise($amount) {
        parent::giveRaise($amount);

        print "<h2>This employee is a Manager</h2>";
    }

    public function __destruct() {
        printf("<p>Good bye by PHP <small>MANAGER: %s</small></p>", $this->name);

        parent::__destruct();
    }

}
