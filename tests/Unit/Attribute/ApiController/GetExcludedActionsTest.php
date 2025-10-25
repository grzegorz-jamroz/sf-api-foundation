<?php

declare(strict_types=1);

namespace Ifrost\ApiFoundation\Tests\Unit\Attribute\ApiController;

use Ifrost\ApiFoundation\Attribute\ApiController;
use Ifrost\ApiFoundation\Enum\Action;
use Ifrost\ApiFoundation\Tests\Variant\Entity\Product;
use PHPUnit\Framework\TestCase;

class GetExcludedActionsTest extends TestCase
{
    public function testShouldReturnExcludedActionsAsArray()
    {
        // Given
        $attribute = new ApiController(
            Product::class,
            'products',
            [
                Action::FIND,
                'findOne',
                'not_exist_action',
            ],
        );

        // When & Then
        $this->assertEquals(
            [
                Action::FIND,
                Action::FIND_ONE,
            ],
            $attribute->getExcludedActions(),
        );
    }
}
