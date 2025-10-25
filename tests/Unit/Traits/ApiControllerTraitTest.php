<?php

declare(strict_types=1);

namespace Ifrost\ApiFoundation\Tests\Unit\Traits;

use Ifrost\ApiFoundation\ApiInterface;
use Ifrost\ApiFoundation\Traits\ApiControllerTrait;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Response;

class ApiControllerTraitTest extends TestCase
{
    use ApiControllerTrait;

    private ApiInterface $api;

    protected function setUp(): void
    {
        $this->api = $this->createMock(ApiInterface::class);
    }

    public function testShouldCallFindMethodOnApi()
    {
        // Given
        $this->api->expects($this->once())
            ->method('find')
            ->willReturn(new Response());

        // When & Then
        $this->assertInstanceOf(Response::class, $this->find());
    }

    public function testShouldCallFindOneMethodOnApi()
    {
        // Given
        $this->api->expects($this->once())
            ->method('findOne')
            ->willReturn(new Response());

        // When & Then
        $this->assertInstanceOf(Response::class, $this->findOne());
    }

    public function testShouldCallCreateMethodOnApi()
    {
        // Given
        $this->api->expects($this->once())
            ->method('create')
            ->willReturn(new Response());

        // When & Then
        $this->assertInstanceOf(Response::class, $this->create());
    }

    public function testShouldCallUpdateMethodOnApi()
    {
        // Given
        $this->api->expects($this->once())
            ->method('update')
            ->willReturn(new Response());

        // When & Then
        $this->assertInstanceOf(Response::class, $this->update());
    }

    public function testShouldCallModifyMethodOnApi()
    {
        // Given
        $this->api->expects($this->once())
            ->method('modify')
            ->willReturn(new Response());

        // When & Then
        $this->assertInstanceOf(Response::class, $this->modify());
    }

    public function testShouldCallDeleteMethodOnApi()
    {
        // Given
        $this->api->expects($this->once())
            ->method('delete')
            ->willReturn(new Response());

        // When & Then
        $this->assertInstanceOf(Response::class, $this->delete());
    }

    private function getApi(): ApiInterface
    {
        return $this->api;
    }
}

