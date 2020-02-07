<?php

namespace src\Business\Rule\Product\Sale;

use src\Business\Rule\AbstractRuleBase;
use src\Object\ProductObject;

class CheckSaleActive extends AbstractRuleBase
{
    protected function executeProcess(ProductObject $productObject)
    {
        if ($productObject->getIsActive() === false || $productObject->getIsDelete() === true) {
            $this->validation = "The product is not on sale!";
            $this->nextStep = false;
        }
    }
}