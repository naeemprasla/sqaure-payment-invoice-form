<?php

declare(strict_types=1);

namespace Square\Legacy\Models\Builders;

use Core\Utils\CoreHelper;
use Square\Legacy\Models\LoyaltyProgramExpirationPolicy;

/**
 * Builder for model LoyaltyProgramExpirationPolicy
 *
 * @see LoyaltyProgramExpirationPolicy
 */
class LoyaltyProgramExpirationPolicyBuilder
{
    /**
     * @var LoyaltyProgramExpirationPolicy
     */
    private $instance;

    private function __construct(LoyaltyProgramExpirationPolicy $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Loyalty Program Expiration Policy Builder object.
     *
     * @param string $expirationDuration
     */
    public static function init(string $expirationDuration): self
    {
        return new self(new LoyaltyProgramExpirationPolicy($expirationDuration));
    }

    /**
     * Initializes a new Loyalty Program Expiration Policy object.
     */
    public function build(): LoyaltyProgramExpirationPolicy
    {
        return CoreHelper::clone($this->instance);
    }
}
