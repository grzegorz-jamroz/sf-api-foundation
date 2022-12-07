<?php

declare(strict_types=1);

namespace Ifrost\ApiFoundation\Tests\Variant\Controller;

use Ifrost\ApiFoundation\Attribute\Api;
use Ifrost\ApiFoundation\Tests\Variant\Sample;

#[Api(entity: Sample::class)]
class InvalidController extends ApiControllerVariant
{
}
