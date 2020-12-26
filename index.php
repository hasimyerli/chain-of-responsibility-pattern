<?php

require_once 'vendor/autoload.php';

$productRuleService = new \src\Business\RuleService\ProductRuleService();

# You can think of the ProductObject as a product from the database.

# Example 1
$product = new \src\Object\ProductObject(5);
$productRuleService->validate($product);
$validation = ;
echo $productRuleService->getValidation() ?? "You can buy this product!\n";


# Example 2
$product = new \src\Object\ProductObject(100, false);
$productRuleService->validate($product);
echo $productRuleService->getValidation() ?? "You can buy this product!\n";

# Example 3
$product = new \src\Object\ProductObject(1000);
$productRuleService->validate($product);
echo $productRuleService->getValidation() ?? "You can buy this product!\n";
