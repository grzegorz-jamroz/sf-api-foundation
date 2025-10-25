<?php

declare(strict_types=1);

namespace Ifrost\ApiFoundation\Tests\Unit\Routing\AbstractApiLoader;

use Ifrost\ApiFoundation\Tests\Variant\Routing\AnnotatedRouteControllerLoader;
use Ifrost\ApiFoundation\Tests\Variant\Routing\ApiLoader;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Config\FileLocator;

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
            'api_attribute',
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
            'api_attribute',
        );

        // Then
        $this->assertCount(12, $collection);
    }

    public function testShouldThrowLogicExceptionWhenTokenizerExtensionMissing()
    {
        // Expect
        if (!extension_loaded('uopz')) {
            $this->markTestSkipped('uopz extension required to override built-ins');
        }

        // Force function_exists to return false for the duration of this test
        uopz_set_return('function_exists', false, true);

        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage('The Tokenizer extension is required for the routing annotation loaders.');

        $loader = new ApiLoader(
            new FileLocator(),
            new AnnotatedRouteControllerLoader(),
        );

        try {
            $loader->load(
                sprintf('%s/tests/Variant/Controller/Game', ABSPATH),
                'api_attribute',
            );
        } finally {
            // Restore original behaviour
            uopz_unset_return('function_exists');
        }
    }
}
