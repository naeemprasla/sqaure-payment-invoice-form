<?php

declare(strict_types=1);

namespace Square\Legacy\Models\Builders;

use Core\Utils\CoreHelper;
use Square\Legacy\Models\LoyaltyProgramAccrualRuleItemVariationData;

/**
 * Builder for model LoyaltyProgramAccrualRuleItemVariationData
 *
 * @see LoyaltyProgramAccrualRuleItemVariationData
 */
class LoyaltyProgramAccrualRuleItemVariationDataBuilder
{
    /**
     * @var LoyaltyProgramAccrualRuleItemVariationData
     */
    private $instance;

    private function __construct(LoyaltyProgramAccrualRuleItemVariationData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Loyalty Program Accrual Rule Item Variation Data Builder object.
     *
     * @param string $itemVariationId
     */
    public static function init(string $itemVariationId): self
    {
        return new self(new LoyaltyProgramAccrualRuleItemVariationData($itemVariationId));
    }

    /**
     * Initializes a new Loyalty Program Accrual Rule Item Variation Data object.
     */
    public function build(): LoyaltyProgramAccrualRuleItemVariationData
    {
        return CoreHelper::clone($this->instance);
    }
}
