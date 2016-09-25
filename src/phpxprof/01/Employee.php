<?php

class Employee {

    protected $name;
    protected $salary;

    public function __construct($name, $salary = 100) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function giveRaise($amount) {
        $this->salary += $amount;

        printf("<p>Employee <strong>%s</strong> got raise of <strong>%d</strong> dollars\n</p>", $this->name, $amount);
        printf("<p>New <em>salary</em> is <strong>%d</strong> dollars\n</p>", $this->salary);
    }

    public function __destruct() {
        printf("<p>Good bye PHP: <small>EMPLOYEE <em>%s</em></small>\n</p>", $this->name);
    }

}
