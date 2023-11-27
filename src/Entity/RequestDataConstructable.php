<?php

declare(strict_types=1);

namespace Ifrost\ApiFoundation\Entity;

interface RequestDataConstructable
{
    /**
     * @param array<string, mixed> $data
     */
    public static function createFromRequest(array $data): static|self;
}
