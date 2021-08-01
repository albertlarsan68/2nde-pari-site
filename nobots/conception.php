<?php

include_once('Parsedown.php');
include('conception.md');

$parser = new Parsedown;
$parser->setBreaksEnabled(true);
echo $parser->text($conception);
