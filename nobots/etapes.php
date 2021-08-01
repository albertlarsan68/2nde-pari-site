<?php

include_once('Parsedown.php');
include('etapes.md');

$parser = new Parsedown;
$parser->setBreaksEnabled(true);
echo $parser->text($etapes);
