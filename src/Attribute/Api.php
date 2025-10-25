<?php

declare(strict_types=1);

namespace Ifrost\ApiFoundation\Attribute;

use Ifrost\ApiFoundation\Enum\Action;

#[\Attribute(\Attribute::TARGET_CLASS)]
class Api
{
    /**
     * @param array<int, Action|string> $excludedActions
     */
    public function __construct(
        protected string $entity,
        protected string $path = '',
        protected array $excludedActions = [],
    ) {
    }

    public function getEntity(): string
    {
        return $this->entity;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @return array<int, Action>
     */
    public function getExcludedActions(): array
    {
        return array_reduce(
            $this->excludedActions,
            function (array $carry, Action|string $excludedAction) {
                if ($excludedAction instanceof Action) {
                    $carry[] = $excludedAction;

                    return $carry;
                }

                if (in_array($excludedAction, Action::values())) {
                    $carry[] = Action::fromValue($excludedAction);
                }

                return $carry;
            },
            [],
        );
    }
}
