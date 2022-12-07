<?php

declare(strict_types=1);

namespace Ifrost\ApiFoundation\Tests\Variant\Controller\Game;

use Ifrost\ApiBundle\Controller\ApiController;
use Ifrost\ApiFoundation\Attribute\Api;
use Ifrost\ApiFoundation\Tests\Variant\Entity\Monster;

#[Api(entity: Monster::class, path: 'monster')]
class MonsterController extends ApiController
{
}
