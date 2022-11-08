<?php

namespace softzino\autoloadpractice\Pet;

class Cat
{
    public function __construct(public string $sound) {
        $this->sound = $sound;
    }

    public function __toString() {
        return $this->sound;
    }
}
