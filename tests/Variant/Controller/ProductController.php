<?php

declare(strict_types=1);

namespace Ifrost\ApiFoundation\Tests\Variant\Controller;

use Ifrost\ApiFoundation\Attribute\Api;
use Ifrost\ApiFoundation\Tests\Variant\Entity\Product;

#[Api(entity: Product::class, path: 'products')]
class ProductController extends ApiControllerVariant
{
}
