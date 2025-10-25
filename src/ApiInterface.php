<?php

declare(strict_types=1);

namespace Ifrost\ApiFoundation;

use Exception;
use Ifrost\ApiFoundation\Exception\NotFoundException;
use Ifrost\ApiFoundation\Exception\NotUniqueException;
use Symfony\Component\HttpFoundation\Response;

interface ApiInterface
{
    /**
     * @throws Exception
     */
    public function find(): Response;

    /**
     * @throws NotFoundException
     * @throws Exception
     */
    public function findOne(): Response;

    /**
     * @throws NotUniqueException
     * @throws Exception
     */
    public function create(): Response;

    /**
     * Replaces the entire object data with the given data.
     *
     * @throws NotFoundException
     * @throws Exception
     */
    public function update(): Response;

    /**
     * Modify only selected fields.
     *
     * @throws NotFoundException
     * @throws Exception
     */
    public function modify(): Response;

    /**
     * @throws Exception
     */
    public function delete(): Response;
}
