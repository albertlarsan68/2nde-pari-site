<?php

include_once('Parsedown.php');
include('photos.md');

$parser = new Parsedown;
$parser->setBreaksEnabled(true);
echo $parser->text($photos);
