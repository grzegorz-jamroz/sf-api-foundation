<?php

declare(strict_types=1);

namespace Ifrost\ApiFoundation\Routing;

use Ifrost\ApiBundle\Traits\WithFindClassTrait;
use LogicException;
use Symfony\Component\Config\FileLocatorInterface;
use Symfony\Component\Config\Loader\FileLoader;

abstract class AbstractAnnotationFileLoader extends FileLoader
{
    use WithFindClassTrait;

    protected AbstractAnnotatedRouteControllerLoader $loader;

    public function __construct(FileLocatorInterface $locator, AbstractAnnotatedRouteControllerLoader $loader)
    {
        if (!\function_exists('token_get_all')) {
            throw new LogicException('The Tokenizer extension is required for the routing annotation loaders.');
        }

        parent::__construct($locator);

        $this->loader = $loader;
    }
}
