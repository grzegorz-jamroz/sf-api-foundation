<?php

declare(strict_types=1);

namespace Ifrost\ApiFoundation\Tests\Unit\Routing\AbstractApiLoader;

use Ifrost\ApiFoundation\Tests\Variant\Routing\AnnotatedRouteControllerLoader;
use Ifrost\ApiFoundation\Tests\Variant\Routing\ApiLoader;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Config\FileLocator;

class LoadTest extends TestCase
{
    public function testShouldReturnEmptyCollectionWhenGivenResourceIsNotString(): void
    {
        // Expect & Given
        $resource = [];
        $type = 'api_controller_attribute';
        $loader = new ApiLoader(
            new FileLocator(),
            new AnnotatedRouteControllerLoader(),
        );

        // When
        $collection = $loader->load($resource, $type);

        // Then
        $this->assertCount(0, $collection);
    }

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
            'api_controller_attribute',
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
            'api_controller_attribute',
        );

        // Then
        $this->assertCount(12, $collection);
    }
}
