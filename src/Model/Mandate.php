<?php

declare(strict_types=1);

namespace PayNL\Sdk\Model;

/**
 * Class Mandate
 *
 * @package PayNL\Sdk\Model
 */
class Mandate implements ModelInterface
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var Amount
     */
    protected $amount;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var BankAccount
     */
    protected $bankAccount;

    /**
     * @var Statistics
     */
    protected $statistics;

    /**
     * @var Interval
     */
    protected $interval;

    /**
     * @var Customer|null
     */
    protected $customer;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return Mandate
     */
    public function setId(string $id): Mandate
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return Mandate
     */
    public function setType(string $type): Mandate
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return Amount
     */
    public function getAmount(): Amount
    {
        return $this->amount;
    }

    /**
     * @param Amount $amount
     *
     * @return Mandate
     */
    public function setAmount(Amount $amount): Mandate
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return Mandate
     */
    public function setDescription(string $description): Mandate
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return BankAccount
     */
    public function getBankAccount(): BankAccount
    {
        return $this->bankAccount;
    }

    /**
     * @param BankAccount $bankAccount
     *
     * @return Mandate
     */
    public function setBankAccount(BankAccount $bankAccount): Mandate
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }

    /**
     * @return Statistics
     */
    public function getStatistics(): Statistics
    {
        return $this->statistics;
    }

    /**
     * @param Statistics $statistics
     *
     * @return Mandate
     */
    public function setStatistics(Statistics $statistics): Mandate
    {
        $this->statistics = $statistics;
        return $this;
    }

    /**
     * @return Interval
     */
    public function getInterval(): Interval
    {
        return $this->interval;
    }

    /**
     * @param Interval $interval
     *
     * @return Mandate
     */
    public function setInterval(Interval $interval): Mandate
    {
        $this->interval = $interval;
        return $this;
    }

    /**
     * @return Customer|null
     */
    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    /**
     * @param Customer|null $customer
     *
     * @return Mandate
     */
    public function setCustomer(?Customer $customer): Mandate
    {
        $this->customer = $customer;
        return $this;
    }
}
