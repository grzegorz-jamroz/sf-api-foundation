<?php

declare(strict_types=1);

namespace Ifrost\ApiFoundation\Tests\Unit\Routing\AbstractAnnotatedRouteControllerLoader;

use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Ifrost\ApiFoundation\Tests\Variant\Controller\InvalidController;
use Ifrost\ApiFoundation\Tests\Variant\Controller\ProductController;
use Ifrost\ApiFoundation\Tests\Variant\Controller\ProductControllerWithOverwrittenAction;
use Ifrost\ApiFoundation\Tests\Variant\Controller\ProductControllerWithTwoRoutes;
use Ifrost\ApiFoundation\Tests\Variant\Controller\ApiControllerVariant;
use Ifrost\ApiFoundation\Tests\Variant\Routing\AnnotatedRouteControllerLoader;

class LoadTest extends TestCase
{
    public function testShouldReturnRouteCollectionWithSixRoutes()
    {
        // Given
        $loader = new AnnotatedRouteControllerLoader();
        
        // When
        $collection = $loader->load(ProductController::class);
        
        // Then
        $this->assertCount(6, $collection);
    }

    public function testShouldReturnRouteCollectionWithTwoRoutes()
    {
        // Given
        $loader = new AnnotatedRouteControllerLoader();

        // When
        $collection = $loader->load(ProductControllerWithTwoRoutes::class);

        // Then
        $this->assertCount(2, $collection);
    }

    public function testShouldReturnRouteCollectionWithFiveRoutesWhereWhenOneActionIsOverwritten()
    {
        // Given
        $loader = new AnnotatedRouteControllerLoader();

        // When
        $collection = $loader->load(ProductControllerWithOverwrittenAction::class);

        // Then
        $this->assertCount(5, $collection);
    }

    public function testShouldReturnEmptyRouteCollectionWhenMetadataPathInApiAttributeIsEmptyString()
    {
        // When & Then
        $this->assertCount(0, (new AnnotatedRouteControllerLoader())->load(InvalidController::class));
    }

    public function testShouldReturnEmptyRouteCollectionWhenControllerDoesNotDeclareApiAttribute()
    {
        // When & Then
        $this->assertCount(0, (new AnnotatedRouteControllerLoader())->load(ApiControllerVariant::class));
    }

    public function testShouldThrowInvalidArgumentExceptionWhenControllerClassDoesNotExist()
    {
        // Expect & Given
        $className = 'App\InvalidDirectory\CarController';
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage(sprintf('Class "%s" does not exist.', $className));

        // When & Then
        (new AnnotatedRouteControllerLoader())->load($className);
    }

    public function testShouldThrowInvalidArgumentExceptionWhenControllerIsAbstract()
    {
        // Expect & Given
        $className = AbstractController::class;
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage(sprintf('Annotations from class "%s" cannot be read as it is abstract.', $className));

        // When & Then
        (new AnnotatedRouteControllerLoader())->load($className);
    }
}
