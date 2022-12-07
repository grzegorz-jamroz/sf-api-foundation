<?php

declare(strict_types=1);

namespace Ifrost\ApiFoundation\Tests\Variant\Routing;

use Ifrost\ApiFoundation\Routing\AbstractApiLoader;

class ApiLoader extends AbstractApiLoader
{
    protected function getType(): string
    {
        return 'api_attribute';
    }
}
