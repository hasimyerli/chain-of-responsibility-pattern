<?php

namespace src\Object;

class ProductObject
{
    private $quantity;

    private $stock = 500;

    private $minSaleQuantity = 10;

    private $isActive;

    private $isDelete;

    public function __construct($quantity = 0, $isActive = true, $isDelete = false)
    {
        $this->quantity = $quantity;
        $this->isActive = $isActive;
        $this->isDelete = $isDelete;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function getMinSaleQuantity()
    {
        return $this->minSaleQuantity;
    }

    public function getIsActive()
    {
        return $this->isActive;
    }

    public function getIsDelete()
    {
        return $this->isDelete;
    }
}