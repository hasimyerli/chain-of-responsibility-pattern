# Chain of responsibility pattern

In this example, chain of responsibility is implemented with pattern php.

##### Example
```php
$productRuleService = new \src\Business\RuleService\ProductRuleService();

$product = new \src\Object\ProductObject("5");

$productRuleService->validate($product);

$validation = $productRuleService->getValidation();

echo $validation;
```
I will write a more detailed article on this topic in the future so follow [blog](hasimyerli.com/blog).