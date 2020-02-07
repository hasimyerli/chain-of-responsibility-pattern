<?php

namespace src\Business\RuleService;

use src\Business\Rule\AbstractRuleBase;

abstract class AbstractRuleServiceBase
{
    /**
     * @var AbstractRuleBase $operation
     */
    protected $operation;

    protected $operations;

    public $validation;

    protected function resetOperation()
    {
        $this->operation = $this->operations[0];

        /**
         * @var AbstractRuleBase $operation
         */
        foreach ($this->operations as $operation) {
            $operation->resetValidation();
            $operation->resetNextStep();
        }
    }

    protected function prepareOperation()
    {
        $this->operations = $this->getOperations();

        for ($i = 0; $i < count($this->operations)-1; $i++) {
            $this->operations[$i]->setNext($this->operations[$i + 1]);
        }
        $this->operation = $this->operations[0];
    }

    public function getValidation()
    {
        return $this->validation;
    }

    abstract protected function getOperations();
}