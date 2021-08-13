<?php

namespace cryptopupua\KunaApi\Model;

/**
 * Class Order
 * @package cryptopupua\KunaApi\Model
 */
class Order
{
    /**
     * Order id
     * @var int
     */
    private $id;

    /**
     * sell | buy
     * @var string
     */
    private $side;

    /**
     * Order type - limit | market,
     * @var string
     */
    private $ordType;

    /**
     * Base currency price
     * @var float
     */
    private $price;

    /**
     * Average order price. For new order - 0
     * @var float
     */
    private $avgPrice;

    /**
     * Order state - always "wait"
     * @var string
     */
    private $state;

    /**
     * Trade pair
     * @var string
     */
    private $market;

    /**
     * Order time
     * @var \DateTime
     */
    private $createdAt;

    /**
     * Order volume in base currency
     * @var float
     */
    private $volume;

    /**
     * Remaining volume in base currency
     * @var float
     */
    private $remainingVolume;

    /**
     * Executed volume in base currency
     * @var float
     */
    private $executedVolume;

    /**
     * Number of transactions on this order
     * @var int
     */
    private $tradesCount;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getSide(): string
    {
        return $this->side;
    }

    /**
     * @param string $side
     */
    public function setSide(string $side): void
    {
        $this->side = $side;
    }

    /**
     * @return string
     */
    public function getOrdType(): string
    {
        return $this->ordType;
    }

    /**
     * @param string $ordType
     */
    public function setOrdType(string $ordType): void
    {
        $this->ordType = $ordType;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getAvgPrice(): float
    {
        return $this->avgPrice;
    }

    /**
     * @param float $avgPrice
     */
    public function setAvgPrice(float $avgPrice): void
    {
        $this->avgPrice = $avgPrice;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getMarket(): string
    {
        return $this->market;
    }

    /**
     * @param string $market
     */
    public function setMarket(string $market): void
    {
        $this->market = $market;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     */
    public function setCreatedAt(string $createdAt): void
    {
        $this->createdAt = new \DateTime($createdAt);
    }

    /**
     * @return float
     */
    public function getVolume(): float
    {
        return $this->volume;
    }

    /**
     * @param float $volume
     */
    public function setVolume(float $volume): void
    {
        $this->volume = $volume;
    }

    /**
     * @return float
     */
    public function getRemainingVolume(): float
    {
        return $this->remainingVolume;
    }

    /**
     * @param float $remainingVolume
     */
    public function setRemainingVolume(float $remainingVolume): void
    {
        $this->remainingVolume = $remainingVolume;
    }

    /**
     * @return float
     */
    public function getExecutedVolume(): float
    {
        return $this->executedVolume;
    }

    /**
     * @param float $executedVolume
     */
    public function setExecutedVolume(float $executedVolume): void
    {
        $this->executedVolume = $executedVolume;
    }

    /**
     * @return int
     */
    public function getTradesCount(): int
    {
        return $this->tradesCount;
    }

    /**
     * @param int $tradesCount
     */
    public function setTradesCount(int $tradesCount): void
    {
        $this->tradesCount = $tradesCount;
    }
}
