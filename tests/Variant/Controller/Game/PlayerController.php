<?php

declare(strict_types=1);

namespace Ifrost\ApiFoundation\Tests\Variant\Controller\Game;

use Ifrost\ApiFoundation\Attribute\Api;
use Ifrost\ApiFoundation\Tests\Variant\Entity\Player;

#[Api(entity: Player::class, path: 'player')]
class PlayerController extends AbstractPlayerController
{
}
