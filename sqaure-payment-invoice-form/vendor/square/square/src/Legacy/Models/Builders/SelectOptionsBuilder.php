<?php

declare(strict_types=1);

namespace Square\Legacy\Models\Builders;

use Core\Utils\CoreHelper;
use Square\Legacy\Models\SelectOption;
use Square\Legacy\Models\SelectOptions;

/**
 * Builder for model SelectOptions
 *
 * @see SelectOptions
 */
class SelectOptionsBuilder
{
    /**
     * @var SelectOptions
     */
    private $instance;

    private function __construct(SelectOptions $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Select Options Builder object.
     *
     * @param string $title
     * @param string $body
     * @param SelectOption[] $options
     */
    public static function init(string $title, string $body, array $options): self
    {
        return new self(new SelectOptions($title, $body, $options));
    }

    /**
     * Sets selected option field.
     *
     * @param SelectOption|null $value
     */
    public function selectedOption(?SelectOption $value): self
    {
        $this->instance->setSelectedOption($value);
        return $this;
    }

    /**
     * Initializes a new Select Options object.
     */
    public function build(): SelectOptions
    {
        return CoreHelper::clone($this->instance);
    }
}
