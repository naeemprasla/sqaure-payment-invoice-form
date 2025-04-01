<?php

declare(strict_types=1);

namespace Square\Legacy\Models\Builders;

use Core\Utils\CoreHelper;
use Square\Legacy\Models\BulkUpsertLocationCustomAttributesResponseLocationCustomAttributeUpsertResponse;
use Square\Legacy\Models\CustomAttribute;
use Square\Legacy\Models\Error;

/**
 * Builder for model BulkUpsertLocationCustomAttributesResponseLocationCustomAttributeUpsertResponse
 *
 * @see BulkUpsertLocationCustomAttributesResponseLocationCustomAttributeUpsertResponse
 */
class BulkUpsertLocationCustomAttributesResponseLocationCustomAttributeUpsertResponseBuilder
{
    /**
     * @var BulkUpsertLocationCustomAttributesResponseLocationCustomAttributeUpsertResponse
     */
    private $instance;

    private function __construct(
        BulkUpsertLocationCustomAttributesResponseLocationCustomAttributeUpsertResponse $instance
    ) {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Bulk Upsert Location Custom Attributes Response Location Custom Attribute Upsert
     * Response Builder object.
     */
    public static function init(): self
    {
        return new self(new BulkUpsertLocationCustomAttributesResponseLocationCustomAttributeUpsertResponse());
    }

    /**
     * Sets location id field.
     *
     * @param string|null $value
     */
    public function locationId(?string $value): self
    {
        $this->instance->setLocationId($value);
        return $this;
    }

    /**
     * Sets custom attribute field.
     *
     * @param CustomAttribute|null $value
     */
    public function customAttribute(?CustomAttribute $value): self
    {
        $this->instance->setCustomAttribute($value);
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
     * Initializes a new Bulk Upsert Location Custom Attributes Response Location Custom Attribute Upsert
     * Response object.
     */
    public function build(): BulkUpsertLocationCustomAttributesResponseLocationCustomAttributeUpsertResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
