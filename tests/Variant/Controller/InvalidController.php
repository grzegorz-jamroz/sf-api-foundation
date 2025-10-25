<?php

declare(strict_types=1);

namespace Ifrost\ApiFoundation\Tests\Variant\Controller;

use Ifrost\ApiFoundation\Attribute\ApiController;
use Ifrost\ApiFoundation\Tests\Variant\Sample;

#[ApiController(entity: Sample::class)]
class InvalidController extends ApiControllerVariant
{
}
