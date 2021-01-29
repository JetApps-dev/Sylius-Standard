<?php

declare(strict_types=1);

namespace App\Entity\Product;

interface ProductColorInterface
{
    public const COLOR_RED = 'red';
    public const COLOR_GREEN = 'green';
    public const COLOR_BLUE = 'blue';

    public function getColor(): ?string;

    public function setColor(?string $color): void;
}
