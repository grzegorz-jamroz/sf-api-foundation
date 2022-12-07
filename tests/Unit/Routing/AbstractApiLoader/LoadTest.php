<?php

declare(strict_types=1);

namespace Ifrost\ApiFoundation\Tests\Unit\Routing\AbstractApiLoader;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Config\FileLocator;
use Ifrost\ApiFoundation\Tests\Variant\Routing\AnnotatedRouteControllerLoader;
use Ifrost\ApiFoundation\Tests\Variant\Routing\ApiLoader;

class LoadTest extends TestCase
{
    public function testShouldReturnEmptyRouteCollectionWhenGivenPathPointsToASpecificFile()
    {
        // Given
        $path = sprintf('%s/tests/Variant/Controller/Game/PlayerController.php', ABSPATH);
        $loader = new ApiLoader(
            new FileLocator(),
            new AnnotatedRouteControllerLoader(),
        );

        // When
        $collection = $loader->load(
            $path,
            'api_attribute'
        );

        // Then
        $this->assertCount(0, $collection);
    }

    public function testShouldReturnRouteCollectionWithTwelveRoutes()
    {
        // Given
        $path = sprintf('%s/tests/Variant/Controller/Game', ABSPATH);
        $loader = new ApiLoader(
            new FileLocator(),
            new AnnotatedRouteControllerLoader(),
        );

        // When
        $collection = $loader->load(
            $path,
            'api_attribute'
        );

        // Then
        $this->assertCount(12, $collection);
    }
}
