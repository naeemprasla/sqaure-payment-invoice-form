<?php

declare(strict_types=1);

namespace Square\Legacy\Models\Builders;

use Core\Utils\CoreHelper;
use Square\Legacy\Models\DeviceCode;
use Square\Legacy\Models\Error;
use Square\Legacy\Models\GetDeviceCodeResponse;

/**
 * Builder for model GetDeviceCodeResponse
 *
 * @see GetDeviceCodeResponse
 */
class GetDeviceCodeResponseBuilder
{
    /**
     * @var GetDeviceCodeResponse
     */
    private $instance;

    private function __construct(GetDeviceCodeResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Get Device Code Response Builder object.
     */
    public static function init(): self
    {
        return new self(new GetDeviceCodeResponse());
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
     * Sets device code field.
     *
     * @param DeviceCode|null $value
     */
    public function deviceCode(?DeviceCode $value): self
    {
        $this->instance->setDeviceCode($value);
        return $this;
    }

    /**
     * Initializes a new Get Device Code Response object.
     */
    public function build(): GetDeviceCodeResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
