<?php

declare(strict_types=1);

namespace Square\Legacy\Models\Builders;

use Core\Utils\CoreHelper;
use Square\Legacy\Models\BookingCustomAttributeDeleteResponse;
use Square\Legacy\Models\BulkDeleteBookingCustomAttributesResponse;
use Square\Legacy\Models\Error;

/**
 * Builder for model BulkDeleteBookingCustomAttributesResponse
 *
 * @see BulkDeleteBookingCustomAttributesResponse
 */
class BulkDeleteBookingCustomAttributesResponseBuilder
{
    /**
     * @var BulkDeleteBookingCustomAttributesResponse
     */
    private $instance;

    private function __construct(BulkDeleteBookingCustomAttributesResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Bulk Delete Booking Custom Attributes Response Builder object.
     */
    public static function init(): self
    {
        return new self(new BulkDeleteBookingCustomAttributesResponse());
    }

    /**
     * Sets values field.
     *
     * @param array<string,BookingCustomAttributeDeleteResponse>|null $value
     */
    public function values(?array $value): self
    {
        $this->instance->setValues($value);
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
     * Initializes a new Bulk Delete Booking Custom Attributes Response object.
     */
    public function build(): BulkDeleteBookingCustomAttributesResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
