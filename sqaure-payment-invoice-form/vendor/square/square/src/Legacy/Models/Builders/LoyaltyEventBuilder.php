<?php

declare(strict_types=1);

namespace Square\Legacy\Models\Builders;

use Core\Utils\CoreHelper;
use Square\Legacy\Models\LoyaltyEvent;
use Square\Legacy\Models\LoyaltyEventAccumulatePoints;
use Square\Legacy\Models\LoyaltyEventAccumulatePromotionPoints;
use Square\Legacy\Models\LoyaltyEventAdjustPoints;
use Square\Legacy\Models\LoyaltyEventCreateReward;
use Square\Legacy\Models\LoyaltyEventDeleteReward;
use Square\Legacy\Models\LoyaltyEventExpirePoints;
use Square\Legacy\Models\LoyaltyEventOther;
use Square\Legacy\Models\LoyaltyEventRedeemReward;

/**
 * Builder for model LoyaltyEvent
 *
 * @see LoyaltyEvent
 */
class LoyaltyEventBuilder
{
    /**
     * @var LoyaltyEvent
     */
    private $instance;

    private function __construct(LoyaltyEvent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Loyalty Event Builder object.
     *
     * @param string $id
     * @param string $type
     * @param string $createdAt
     * @param string $loyaltyAccountId
     * @param string $source
     */
    public static function init(
        string $id,
        string $type,
        string $createdAt,
        string $loyaltyAccountId,
        string $source
    ): self {
        return new self(new LoyaltyEvent($id, $type, $createdAt, $loyaltyAccountId, $source));
    }

    /**
     * Sets accumulate points field.
     *
     * @param LoyaltyEventAccumulatePoints|null $value
     */
    public function accumulatePoints(?LoyaltyEventAccumulatePoints $value): self
    {
        $this->instance->setAccumulatePoints($value);
        return $this;
    }

    /**
     * Sets create reward field.
     *
     * @param LoyaltyEventCreateReward|null $value
     */
    public function createReward(?LoyaltyEventCreateReward $value): self
    {
        $this->instance->setCreateReward($value);
        return $this;
    }

    /**
     * Sets redeem reward field.
     *
     * @param LoyaltyEventRedeemReward|null $value
     */
    public function redeemReward(?LoyaltyEventRedeemReward $value): self
    {
        $this->instance->setRedeemReward($value);
        return $this;
    }

    /**
     * Sets delete reward field.
     *
     * @param LoyaltyEventDeleteReward|null $value
     */
    public function deleteReward(?LoyaltyEventDeleteReward $value): self
    {
        $this->instance->setDeleteReward($value);
        return $this;
    }

    /**
     * Sets adjust points field.
     *
     * @param LoyaltyEventAdjustPoints|null $value
     */
    public function adjustPoints(?LoyaltyEventAdjustPoints $value): self
    {
        $this->instance->setAdjustPoints($value);
        return $this;
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
     * Sets expire points field.
     *
     * @param LoyaltyEventExpirePoints|null $value
     */
    public function expirePoints(?LoyaltyEventExpirePoints $value): self
    {
        $this->instance->setExpirePoints($value);
        return $this;
    }

    /**
     * Sets other event field.
     *
     * @param LoyaltyEventOther|null $value
     */
    public function otherEvent(?LoyaltyEventOther $value): self
    {
        $this->instance->setOtherEvent($value);
        return $this;
    }

    /**
     * Sets accumulate promotion points field.
     *
     * @param LoyaltyEventAccumulatePromotionPoints|null $value
     */
    public function accumulatePromotionPoints(?LoyaltyEventAccumulatePromotionPoints $value): self
    {
        $this->instance->setAccumulatePromotionPoints($value);
        return $this;
    }

    /**
     * Initializes a new Loyalty Event object.
     */
    public function build(): LoyaltyEvent
    {
        return CoreHelper::clone($this->instance);
    }
}
