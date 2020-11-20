<?php

include __DIR__ . '/vendor/autoload.php';

use Lgpd\Helper\Confirm;

$lgpd = new Confirm();

echo $lgpd->render();