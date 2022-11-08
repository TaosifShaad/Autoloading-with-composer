<?php

use Softzino\Autoloadpractice\Animal\{Tiger, Cat as WildCat};
use Softzino\Autoloadpractice\Pet\Cat;

require_once 'vendor/autoload.php';

echo (new Tiger(true))->getStatus() . PHP_EOL;
echo (new Cat("Purr")) . PHP_EOL;
echo (new WildCat()) . PHP_EOL;