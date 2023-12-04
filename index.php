<?php
require 'vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Mameuhmiah!');
$bessie->setTongue('U');

echo $bessie;