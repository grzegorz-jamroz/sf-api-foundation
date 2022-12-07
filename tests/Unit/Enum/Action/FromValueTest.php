<?php

declare(strict_types=1);

namespace Ifrost\ApiFoundation\Tests\Unit\Enum\Action;

use Ifrost\ApiFoundation\Enum\Action;
use PHPUnit\Framework\TestCase;

class FromValueTest extends TestCase
{
    public function testShouldReturnActionWhenExists()
    {
        // Given
        $actions = [
            'FIND' => 'find',
            'FIND_ONE' => 'findOne',
            'CREATE' => 'create',
            'UPDATE' => 'update',
            'MODIFY' => 'modify',
            'DELETE' => 'delete',
        ];

        foreach ($actions as $name => $value) {
            // When
            $action = Action::fromValue($value);

            // Then
            $this->assertInstanceOf(Action::class, $action);
            $this->assertEquals($value, $action->value);
            $this->assertEquals($name, $action->name);
        }
    }

    public function testShouldThrowInvalidArgumentExceptionWhenActionDoesNotExist()
    {
        // Expect & Given
        $value = 'copy';
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage(sprintf('There is no %s with value %s', Action::class, $value));

        // When & Then
        Action::fromValue($value);
    }
}
