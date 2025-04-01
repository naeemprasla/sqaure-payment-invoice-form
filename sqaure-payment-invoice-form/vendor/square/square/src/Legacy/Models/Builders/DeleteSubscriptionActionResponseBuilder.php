<?php

declare(strict_types=1);

namespace Square\Legacy\Models\Builders;

use Core\Utils\CoreHelper;
use Square\Legacy\Models\DeleteSubscriptionActionResponse;
use Square\Legacy\Models\Error;
use Square\Legacy\Models\Subscription;

/**
 * Builder for model DeleteSubscriptionActionResponse
 *
 * @see DeleteSubscriptionActionResponse
 */
class DeleteSubscriptionActionResponseBuilder
{
    /**
     * @var DeleteSubscriptionActionResponse
     */
    private $instance;

    private function __construct(DeleteSubscriptionActionResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Delete Subscription Action Response Builder object.
     */
    public static function init(): self
    {
        return new self(new DeleteSubscriptionActionResponse());
    }

    /**
     * Sets errors field.
     *
     * @param Error[]|null $value
     */
    public function errors(?array $value): self
    {
        $this->instance->setErrors($value);
        return $this;
    }

    /**
     * Sets subscription field.
     *
     * @param Subscription|null $value
     */
    public function subscription(?Subscription $value): self
    {
        $this->instance->setSubscription($value);
        return $this;
    }

    /**
     * Initializes a new Delete Subscription Action Response object.
     */
    public function build(): DeleteSubscriptionActionResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
