<?php

declare(strict_types=1);

namespace Ifrost\ApiFoundation\Tests\Variant\Controller\Game;

use Ifrost\ApiFoundation\Attribute\ApiController;
use Ifrost\ApiFoundation\Tests\Variant\Entity\Player;

#[ApiController(entity: Player::class, path: 'player')]
class PlayerController extends AbstractPlayerController
{
}
