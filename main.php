<?php

require_once("src/Screen.php");
require_once("src/Star.php");
require_once("src/System.php");
require_once("src/NameGen.php");

$width = 200;
$height = 50;
$amount_of_stars = 15;

$screen = new Screen($width, $height);

$stars = [];
$names = nameGen(["foo", "ul", "gar", "ome", "ga", "po", "lal", "gro", "se", "pum", "dom", "bra", "lo", "ri", "tra", "wa", "we", "wie", "for", "ulm", "wru", "vor", "omu", "om", "mo"]);
for($i=0;$i<$amount_of_stars;$i++) {
    $stars[] = new Star(random_int(0,$width-10),random_int(0,$height), $names->current());
    $names->next();
}

$system = new System($stars);

$system->printOn($screen);
$screen->printMe();

