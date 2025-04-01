<?php

declare(strict_types=1);

namespace Square\Legacy\Models\Builders;

use Core\Utils\CoreHelper;
use Square\Legacy\Models\PaymentBalanceActivityFreeProcessingDetail;

/**
 * Builder for model PaymentBalanceActivityFreeProcessingDetail
 *
 * @see PaymentBalanceActivityFreeProcessingDetail
 */
class PaymentBalanceActivityFreeProcessingDetailBuilder
{
    /**
     * @var PaymentBalanceActivityFreeProcessingDetail
     */
    private $instance;

    private function __construct(PaymentBalanceActivityFreeProcessingDetail $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Payment Balance Activity Free Processing Detail Builder object.
     */
    public static function init(): self
    {
        return new self(new PaymentBalanceActivityFreeProcessingDetail());
    }

    /**
     * Sets payment id field.
     *
     * @param string|null $value
     */
    public function paymentId(?string $value): self
    {
        $this->instance->setPaymentId($value);
        return $this;
    }

    /**
     * Unsets payment id field.
     */
    public function unsetPaymentId(): self
    {
        $this->instance->unsetPaymentId();
        return $this;
    }

    /**
     * Initializes a new Payment Balance Activity Free Processing Detail object.
     */
    public function build(): PaymentBalanceActivityFreeProcessingDetail
    {
        return CoreHelper::clone($this->instance);
    }
}
