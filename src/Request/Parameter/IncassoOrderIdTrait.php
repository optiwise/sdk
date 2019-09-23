<?php

declare(strict_types=1);

namespace PayNL\Sdk\Request\Parameter;

/**
 * Class IncassoOrderIdTrait
 *
 * @package PayNL\Sdk\Request\Parameter
 */
trait IncassoOrderIdTrait
{
    /**
     * @var string
     */
    protected $incassoOrderId;

    /**
     * @return string
     */
    public function getIncassoOrderId(): string
    {
        return $this->incassoOrderId;
    }

    /**
     * @param string $incassoOrderId
     *
     * @return IncassoOrderIdTrait
     */
    public function setIncassoOrderId(string $incassoOrderId): self
    {
        $this->incassoOrderId = $incassoOrderId;
        return $this;
    }
}
