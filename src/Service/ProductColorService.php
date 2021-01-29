<?php

declare(strict_types=1);

namespace App\Service;

use App\Entity\Product\ProductColorInterface;

class ProductColorService
{
    public static function getAvailableColorChoices(): array
    {
        return [
            _('app.form.product.color.variants.blue') => ProductColorInterface::COLOR_BLUE,
            _('app.form.product.color.variants.red') => ProductColorInterface::COLOR_RED,
            _('app.form.product.color.variants.green') => ProductColorInterface::COLOR_GREEN,
        ];
    }
}
