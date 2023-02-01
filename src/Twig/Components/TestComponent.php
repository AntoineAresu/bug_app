<?php

namespace App\Twig\Components;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent('test_component')]
class TestComponent
{
    use DefaultActionTrait;

    #[LiveProp]
    public int $max = 1000;

    public function getRandomNumber(): int
    {
        return rand(0, $this->max);
    }
}