# Chain of responsibility pattern

In this example, **chain of responsibility pattern** is implemented php.

##### Example
```php
$productRuleService = new \src\Business\RuleService\ProductRuleService();

$product = new \src\Object\ProductObject(5);

$productRuleService->validate($product);

$validation = $productRuleService->getValidation();

echo $validation; 

#Output 
#You can buy this product!
```
I will write a more detailed article on this topic in the future so follow [blog](http://hasimyerli.com/blog).
