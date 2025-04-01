<?php

declare(strict_types=1);

namespace Square\Legacy\Models\Builders;

use Core\Utils\CoreHelper;
use Square\Legacy\Models\CreateTerminalActionRequest;
use Square\Legacy\Models\TerminalAction;

/**
 * Builder for model CreateTerminalActionRequest
 *
 * @see CreateTerminalActionRequest
 */
class CreateTerminalActionRequestBuilder
{
    /**
     * @var CreateTerminalActionRequest
     */
    private $instance;

    private function __construct(CreateTerminalActionRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Terminal Action Request Builder object.
     *
     * @param string $idempotencyKey
     * @param TerminalAction $action
     */
    public static function init(string $idempotencyKey, TerminalAction $action): self
    {
        return new self(new CreateTerminalActionRequest($idempotencyKey, $action));
    }

    /**
     * Initializes a new Create Terminal Action Request object.
     */
    public function build(): CreateTerminalActionRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
