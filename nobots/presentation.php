<?php

include_once('Parsedown.php');
include('presentation.md');

$parser = new Parsedown;
$parser->setBreaksEnabled(true);
echo $parser->text($presentation);
