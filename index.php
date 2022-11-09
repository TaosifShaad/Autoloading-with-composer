<?php

use Softzino\Autoloadpractice\Animal\{Tiger, Cat as WildCat};
use Softzino\Autoloadpractice\Pet\Cat;
use function softzino\autoloadpractice\Helper\sum;

require_once 'vendor/autoload.php';

echo (new Tiger(true))->getStatus() . PHP_EOL;
echo (new Cat("Purr")) . PHP_EOL;
echo (new WildCat()) . PHP_EOL;

echo sum(10, 20);
