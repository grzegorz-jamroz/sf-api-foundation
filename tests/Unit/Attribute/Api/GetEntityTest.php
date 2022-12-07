<?php

declare(strict_types=1);

namespace Attribute\Api;

use Ifrost\ApiFoundation\Attribute\Api;
use Ifrost\ApiFoundation\Tests\Variant\Entity\Product;
use PHPUnit\Framework\TestCase;

class GetEntityTest extends TestCase
{
    public function testShouldReturnEntityAsString()
    {
        // Given
        $attribute = new Api(Product::class, 'products');

        // When & Then
        $this->assertEquals(Product::class, $attribute->getEntity());
    }
}
