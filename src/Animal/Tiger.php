<?php

namespace softzino\autoloadpractice\Animal;

class Tiger
{
    public function __construct(public bool $isHungry) {
        $this->isHungry = $isHungry;
    }

    public function getStatus() {
        if (false === $this->isHungry) {
            return 'Not Hungry';
        }
        if (true === $this->isHungry) {
            return 'Hungry';
        }
    }
}
