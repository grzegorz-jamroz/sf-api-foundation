<?php

declare(strict_types=1);

namespace Ifrost\ApiFoundation\Traits;

use Symfony\Component\HttpFoundation\Response;

trait ApiControllerTrait
{
    public function find(): Response
    {
        return $this->getApi()->find();
    }

    public function findOne(): Response
    {
        return $this->getApi()->findOne();
    }

    public function create(): Response
    {
        return $this->getApi()->create();
    }

    public function update(): Response
    {
        return $this->getApi()->update();
    }

    public function modify(): Response
    {
        return $this->getApi()->modify();
    }

    public function delete(): Response
    {
        return $this->getApi()->delete();
    }
}
