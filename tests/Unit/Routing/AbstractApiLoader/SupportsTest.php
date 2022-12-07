<?php

declare(strict_types=1);

namespace Ifrost\ApiFoundation\Tests\Unit\Routing\AbstractApiLoader;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Config\FileLocator;
use Ifrost\ApiFoundation\Tests\Variant\Routing\AnnotatedRouteControllerLoader;
use Ifrost\ApiFoundation\Tests\Variant\Routing\ApiLoader;

class SupportsTest extends TestCase
{
    public function testShouldReturnTrueWhenSupportedTypeGiven()
    {
        // Given
        $type = 'api_attribute';
        $loader = new ApiLoader(
            new FileLocator(),
            new AnnotatedRouteControllerLoader(),
        );

        // When & Then
        $this->assertTrue($loader->supports('', $type));
    }
}
