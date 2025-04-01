<?php

declare(strict_types=1);

namespace Square\Legacy\Models\Builders;

use Core\Utils\CoreHelper;
use Square\Legacy\Models\Address;
use Square\Legacy\Models\CustomerTaxIds;
use Square\Legacy\Models\UpdateCustomerRequest;

/**
 * Builder for model UpdateCustomerRequest
 *
 * @see UpdateCustomerRequest
 */
class UpdateCustomerRequestBuilder
{
    /**
     * @var UpdateCustomerRequest
     */
    private $instance;

    private function __construct(UpdateCustomerRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Update Customer Request Builder object.
     */
    public static function init(): self
    {
        return new self(new UpdateCustomerRequest());
    }

    /**
     * Sets given name field.
     *
     * @param string|null $value
     */
    public function givenName(?string $value): self
    {
        $this->instance->setGivenName($value);
        return $this;
    }

    /**
     * Unsets given name field.
     */
    public function unsetGivenName(): self
    {
        $this->instance->unsetGivenName();
        return $this;
    }

    /**
     * Sets family name field.
     *
     * @param string|null $value
     */
    public function familyName(?string $value): self
    {
        $this->instance->setFamilyName($value);
        return $this;
    }

    /**
     * Unsets family name field.
     */
    public function unsetFamilyName(): self
    {
        $this->instance->unsetFamilyName();
        return $this;
    }

    /**
     * Sets company name field.
     *
     * @param string|null $value
     */
    public function companyName(?string $value): self
    {
        $this->instance->setCompanyName($value);
        return $this;
    }

    /**
     * Unsets company name field.
     */
    public function unsetCompanyName(): self
    {
        $this->instance->unsetCompanyName();
        return $this;
    }

    /**
     * Sets nickname field.
     *
     * @param string|null $value
     */
    public function nickname(?string $value): self
    {
        $this->instance->setNickname($value);
        return $this;
    }

    /**
     * Unsets nickname field.
     */
    public function unsetNickname(): self
    {
        $this->instance->unsetNickname();
        return $this;
    }

    /**
     * Sets email address field.
     *
     * @param string|null $value
     */
    public function emailAddress(?string $value): self
    {
        $this->instance->setEmailAddress($value);
        return $this;
    }

    /**
     * Unsets email address field.
     */
    public function unsetEmailAddress(): self
    {
        $this->instance->unsetEmailAddress();
        return $this;
    }

    /**
     * Sets address field.
     *
     * @param Address|null $value
     */
    public function address(?Address $value): self
    {
        $this->instance->setAddress($value);
        return $this;
    }

    /**
     * Sets phone number field.
     *
     * @param string|null $value
     */
    public function phoneNumber(?string $value): self
    {
        $this->instance->setPhoneNumber($value);
        return $this;
    }

    /**
     * Unsets phone number field.
     */
    public function unsetPhoneNumber(): self
    {
        $this->instance->unsetPhoneNumber();
        return $this;
    }

    /**
     * Sets reference id field.
     *
     * @param string|null $value
     */
    public function referenceId(?string $value): self
    {
        $this->instance->setReferenceId($value);
        return $this;
    }

    /**
     * Unsets reference id field.
     */
    public function unsetReferenceId(): self
    {
        $this->instance->unsetReferenceId();
        return $this;
    }

    /**
     * Sets note field.
     *
     * @param string|null $value
     */
    public function note(?string $value): self
    {
        $this->instance->setNote($value);
        return $this;
    }

    /**
     * Unsets note field.
     */
    public function unsetNote(): self
    {
        $this->instance->unsetNote();
        return $this;
    }

    /**
     * Sets birthday field.
     *
     * @param string|null $value
     */
    public function birthday(?string $value): self
    {
        $this->instance->setBirthday($value);
        return $this;
    }

    /**
     * Unsets birthday field.
     */
    public function unsetBirthday(): self
    {
        $this->instance->unsetBirthday();
        return $this;
    }

    /**
     * Sets version field.
     *
     * @param int|null $value
     */
    public function version(?int $value): self
    {
        $this->instance->setVersion($value);
        return $this;
    }

    /**
     * Sets tax ids field.
     *
     * @param CustomerTaxIds|null $value
     */
    public function taxIds(?CustomerTaxIds $value): self
    {
        $this->instance->setTaxIds($value);
        return $this;
    }

    /**
     * Initializes a new Update Customer Request object.
     */
    public function build(): UpdateCustomerRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
