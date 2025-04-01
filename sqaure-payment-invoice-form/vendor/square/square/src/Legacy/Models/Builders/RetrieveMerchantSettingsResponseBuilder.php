<?php

declare(strict_types=1);

namespace Square\Legacy\Models\Builders;

use Core\Utils\CoreHelper;
use Square\Legacy\Models\CheckoutMerchantSettings;
use Square\Legacy\Models\Error;
use Square\Legacy\Models\RetrieveMerchantSettingsResponse;

/**
 * Builder for model RetrieveMerchantSettingsResponse
 *
 * @see RetrieveMerchantSettingsResponse
 */
class RetrieveMerchantSettingsResponseBuilder
{
    /**
     * @var RetrieveMerchantSettingsResponse
     */
    private $instance;

    private function __construct(RetrieveMerchantSettingsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Retrieve Merchant Settings Response Builder object.
     */
    public static function init(): self
    {
        return new self(new RetrieveMerchantSettingsResponse());
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
     * Sets merchant settings field.
     *
     * @param CheckoutMerchantSettings|null $value
     */
    public function merchantSettings(?CheckoutMerchantSettings $value): self
    {
        $this->instance->setMerchantSettings($value);
        return $this;
    }

    /**
     * Initializes a new Retrieve Merchant Settings Response object.
     */
    public function build(): RetrieveMerchantSettingsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
