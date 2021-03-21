<?php


namespace App;

use Stringable;

class User implements Stringable
{
    public function __construct(
        public string $name,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }


    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function __toString()
    {
        return $this->getName();
    }
}
