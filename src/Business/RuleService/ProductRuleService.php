<?php

namespace src\Business\RuleService;

use src\Business\Rule\Product\Sale\CheckSaleActive;
use src\Business\Rule\Product\Stock\CheckStock;
use src\Object\ProductObject;

class ProductRuleService extends AbstractRuleServiceBase
{
    public function __construct()
    {
        $this->prepareOperation();
    }

    public function validate(ProductObject $productObject)
    {
        $validation = "";
        $this->operation->execute($productObject, $validation);
        $this->validation = $validation;
        $this->resetOperation();
    }

    protected function getOperations()
    {
        return [
            new CheckSaleActive(),
            new CheckStock()
        ];
    }
}