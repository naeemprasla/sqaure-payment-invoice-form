<?php

declare(strict_types=1);

namespace Square\Legacy\Models\Builders;

use Core\Utils\CoreHelper;
use Square\Legacy\Models\CatalogQueryExact;

/**
 * Builder for model CatalogQueryExact
 *
 * @see CatalogQueryExact
 */
class CatalogQueryExactBuilder
{
    /**
     * @var CatalogQueryExact
     */
    private $instance;

    private function __construct(CatalogQueryExact $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Catalog Query Exact Builder object.
     *
     * @param string $attributeName
     * @param string $attributeValue
     */
    public static function init(string $attributeName, string $attributeValue): self
    {
        return new self(new CatalogQueryExact($attributeName, $attributeValue));
    }

    /**
     * Initializes a new Catalog Query Exact object.
     */
    public function build(): CatalogQueryExact
    {
        return CoreHelper::clone($this->instance);
    }
}
