<?php

declare(strict_types=1);

namespace Ifrost\ApiFoundation\Entity;

use Ifrost\Foundations\ArrayConstructable;

interface ApiEntityInterface extends ArrayConstructable, RequestDataConstructable, \JsonSerializable
{
    /**
     * @return array<int, string>
     */
    public static function getFields(): array;
}
