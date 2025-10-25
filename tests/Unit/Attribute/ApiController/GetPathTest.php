<?php

declare(strict_types=1);

namespace Ifrost\ApiFoundation\Tests\Unit\Attribute\ApiController;

use Ifrost\ApiFoundation\Attribute\ApiController;
use Ifrost\ApiFoundation\Tests\Variant\Entity\Product;
use PHPUnit\Framework\TestCase;

class GetPathTest extends TestCase
{
    public function testShouldReturnPathAsString()
    {
        // Given
        $attribute = new ApiController(Product::class, 'products');

        // When & Then
        $this->assertEquals('products', $attribute->getPath());
    }
}
