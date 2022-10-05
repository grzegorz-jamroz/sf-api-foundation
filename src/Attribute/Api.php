<?php

declare(strict_types=1);

namespace Ifrost\ApiFoundation\Attribute;

#[\Attribute(\Attribute::TARGET_CLASS)]
class Api
{
    public function __construct(protected string $entity)
    {
    }
}
