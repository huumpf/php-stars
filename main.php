<?php

require_once("src/Screen.php");

$screen = new Screen(200, 50);

$screen->star(59,10, "Mars");
$screen->star(17,42, "Earth");
$screen->star(3,19, "Jupiter");
$screen->printMe();

