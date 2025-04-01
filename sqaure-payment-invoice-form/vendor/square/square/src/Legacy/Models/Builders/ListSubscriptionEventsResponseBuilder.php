<?php

declare(strict_types=1);

namespace Square\Legacy\Models\Builders;

use Core\Utils\CoreHelper;
use Square\Legacy\Models\Error;
use Square\Legacy\Models\ListSubscriptionEventsResponse;
use Square\Legacy\Models\SubscriptionEvent;

/**
 * Builder for model ListSubscriptionEventsResponse
 *
 * @see ListSubscriptionEventsResponse
 */
class ListSubscriptionEventsResponseBuilder
{
    /**
     * @var ListSubscriptionEventsResponse
     */
    private $instance;

    private function __construct(ListSubscriptionEventsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new List Subscription Events Response Builder object.
     */
    public static function init(): self
    {
        return new self(new ListSubscriptionEventsResponse());
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
     * Sets subscription events field.
     *
     * @param SubscriptionEvent[]|null $value
     */
    public function subscriptionEvents(?array $value): self
    {
        $this->instance->setSubscriptionEvents($value);
        return $this;
    }

    /**
     * Sets cursor field.
     *
     * @param string|null $value
     */
    public function cursor(?string $value): self
    {
        $this->instance->setCursor($value);
        return $this;
    }

    /**
     * Initializes a new List Subscription Events Response object.
     */
    public function build(): ListSubscriptionEventsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
