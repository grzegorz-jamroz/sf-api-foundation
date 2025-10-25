<?php

declare(strict_types=1);

namespace Ifrost\ApiFoundation\Attribute;

use Attribute;
use Ifrost\ApiFoundation\Enum\Action;

#[Attribute(Attribute::TARGET_CLASS)]
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
     * @return array<Action>
     */
    public function getExcludedActions(): array
    {
        $actions = [];

        foreach ($this->excludedActions as $excludedAction) {
            if ($excludedAction instanceof Action) {
                $actions[] = $excludedAction;

                continue;
            }

            if (in_array($excludedAction, Action::values(), true)) {
                $actions[] = Action::fromValue($excludedAction);
            }
        }

        return $actions;
    }
}
