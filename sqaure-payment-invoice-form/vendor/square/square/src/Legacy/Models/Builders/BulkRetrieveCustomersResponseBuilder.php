<?php

declare(strict_types=1);

namespace Square\Legacy\Models\Builders;

use Core\Utils\CoreHelper;
use Square\Legacy\Models\BulkRetrieveCustomersResponse;
use Square\Legacy\Models\Error;
use Square\Legacy\Models\RetrieveCustomerResponse;

/**
 * Builder for model BulkRetrieveCustomersResponse
 *
 * @see BulkRetrieveCustomersResponse
 */
class BulkRetrieveCustomersResponseBuilder
{
    /**
     * @var BulkRetrieveCustomersResponse
     */
    private $instance;

    private function __construct(BulkRetrieveCustomersResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Bulk Retrieve Customers Response Builder object.
     */
    public static function init(): self
    {
        return new self(new BulkRetrieveCustomersResponse());
    }

    /**
     * Sets responses field.
     *
     * @param array<string,RetrieveCustomerResponse>|null $value
     */
    public function responses(?array $value): self
    {
        $this->instance->setResponses($value);
        return $this;
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
     * Initializes a new Bulk Retrieve Customers Response object.
     */
    public function build(): BulkRetrieveCustomersResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
