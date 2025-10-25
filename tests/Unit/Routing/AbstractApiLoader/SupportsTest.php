<?php

declare(strict_types=1);

namespace Ifrost\ApiFoundation\Tests\Unit\Routing\AbstractApiLoader;

use Ifrost\ApiFoundation\Tests\Variant\Routing\AnnotatedRouteControllerLoader;
use Ifrost\ApiFoundation\Tests\Variant\Routing\ApiLoader;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Config\FileLocator;

class SupportsTest extends TestCase
{
    public function testShouldReturnTrueWhenSupportedTypeGiven()
    {
        // Given
        $type = 'api_controller_attribute';
        $loader = new ApiLoader(
            new FileLocator(),
            new AnnotatedRouteControllerLoader(),
        );

        // When & Then
        $this->assertTrue($loader->supports('', $type));
    }
}
