<?php

declare(strict_types=1);

namespace Attribute\Api;

use Ifrost\ApiFoundation\Attribute\Api;
use Ifrost\ApiFoundation\Tests\Variant\Entity\Product;
use PHPUnit\Framework\TestCase;

class GetPathTest extends TestCase
{
    public function testShouldReturnPathAsString()
    {
        // Given
        $attribute = new Api(Product::class, 'products');

        // When & Then
        $this->assertEquals('products', $attribute->getPath());
    }
}
