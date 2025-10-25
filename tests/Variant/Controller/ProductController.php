<?php

declare(strict_types=1);

namespace Ifrost\ApiFoundation\Tests\Variant\Controller;

use Ifrost\ApiFoundation\Attribute\ApiController;
use Ifrost\ApiFoundation\Tests\Variant\Entity\Product;

#[ApiController(entity: Product::class, path: 'products')]
class ProductController extends ApiControllerVariant
{
}
