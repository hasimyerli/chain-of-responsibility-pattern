<?php

namespace src\Business\Rule;

use src\Object\ProductObject;

abstract class AbstractRuleBase
{
    /**
     * @var AbstractRuleBase $nextOperation
     */
    protected $nextOperation = null;

    protected $nextStep = true;

    protected $validation = "";

    public function setNext(AbstractRuleBase $operation)
    {
        $this->nextOperation = $operation;
    }

    public function resetNextStep()
    {
        $this->nextStep = true;
    }

    public function resetValidation()
    {
        $this->validation = "";
    }

    protected abstract function executeProcess(ProductObject $productObject);

    public function execute(ProductObject $productObject, &$validation)
    {
        $this->executeProcess($productObject);
        if (!empty($this->validation)) {
            $validation = $this->validation;
        }
        if ($this->nextStep == true && $this->nextOperation != null) {
            $this->nextOperation->execute($productObject, $validation);
        }
    }
}