<?php

declare(strict_types=1);

namespace Ifrost\ApiFoundation\Tests\Variant\Controller;

use Ifrost\ApiFoundation\Attribute\Api;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Ifrost\ApiFoundation\Tests\Variant\Entity\Product;

#[Api(entity: Product::class, path: 'products')]
class ProductControllerWithOverwrittenAction extends ApiControllerVariant
{
    #[Route('/create_products', name: 'products_create', methods: ['POST'])]
    public function create(): Response
    {
        return $this->getApi()->create();
    }
}
