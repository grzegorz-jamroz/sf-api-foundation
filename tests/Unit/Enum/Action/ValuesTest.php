<?php

declare(strict_types=1);

namespace Enum\Action;

use Ifrost\ApiFoundation\Enum\Action;
use PHPUnit\Framework\TestCase;

class ValuesTest extends TestCase
{
    public function testShouldReturnActionWhenExists()
    {
        // Given
        $values = [
            'find',
            'findOne',
            'create',
            'update',
            'modify',
            'delete',
        ];

        // When & Then
        $this->assertEquals($values, Action::values());
    }
}
