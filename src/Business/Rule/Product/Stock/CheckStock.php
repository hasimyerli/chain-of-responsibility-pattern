<?php

namespace src\Business\Rule\Product\Stock;

use src\Business\Rule\AbstractRuleBase;
use src\Object\ProductObject;

class CheckStock extends AbstractRuleBase
{
    protected function executeProcess(ProductObject $productObject)
    {
        if ($productObject->getStock() < $productObject->getQuantity()) {
            $this->validation = "There is not enough stock!";
            $this->nextStep = false;
        }
    }
}