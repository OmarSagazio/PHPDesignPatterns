<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Firm</title>
    </head>
    <body>
        <h1>Employ Salary</h1>
        <?php

//        require_once './Employee.php';

        function __autoload($class) {
            require_once("$class.php");
        }

        $e = new Employee("Johnson", 100);
        $e->giveRaise(50);
        ?>

        <h1>Manager Salary</h1>
        <?php
//        require_once './Manager.php';

        $m = new Manager("Smith", 300, 20);
        $m->giveRaise(50);
        ?>
    </body>
</html>
