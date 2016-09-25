<?php

require_once './domestic.php';
require_once './wild.php';

$domestic = new Animal();
printf("%s\n", $domestic->getType());

$wild = new wild\Animal();
printf("%s\n", $wild->getType());

use wild\Animal as beast;

$beast = new beast();
printf("%s\n", $beast->getType());
