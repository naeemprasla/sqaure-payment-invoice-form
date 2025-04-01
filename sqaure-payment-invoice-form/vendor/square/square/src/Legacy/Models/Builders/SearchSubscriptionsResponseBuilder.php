<?php

declare(strict_types=1);

namespace Square\Legacy\Models\Builders;

use Core\Utils\CoreHelper;
use Square\Legacy\Models\Error;
use Square\Legacy\Models\SearchSubscriptionsResponse;
use Square\Legacy\Models\Subscription;

/**
 * Builder for model SearchSubscriptionsResponse
 *
 * @see SearchSubscriptionsResponse
 */
class SearchSubscriptionsResponseBuilder
{
    /**
     * @var SearchSubscriptionsResponse
     */
    private $instance;

    private function __construct(SearchSubscriptionsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Search Subscriptions Response Builder object.
     */
    public static function init(): self
    {
        return new self(new SearchSubscriptionsResponse());
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
     * Sets subscriptions field.
     *
     * @param Subscription[]|null $value
     */
    public function subscriptions(?array $value): self
    {
        $this->instance->setSubscriptions($value);
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
     * Initializes a new Search Subscriptions Response object.
     */
    public function build(): SearchSubscriptionsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
