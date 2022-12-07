<?php

declare(strict_types=1);

namespace Ifrost\ApiFoundation\Tests\Variant\Controller;

use Ifrost\ApiFoundation\Attribute\Api;
use Ifrost\ApiFoundation\Enum\Action;
use Ifrost\ApiFoundation\Tests\Variant\Entity\Product;

#[Api(
    entity: Product::class,
    path: 'products',
    excludedActions: [
        Action::CREATE,
        Action::UPDATE,
        Action::MODIFY,
        'delete',
    ])
]
class ProductControllerWithTwoRoutes extends ApiControllerVariant
{
}
