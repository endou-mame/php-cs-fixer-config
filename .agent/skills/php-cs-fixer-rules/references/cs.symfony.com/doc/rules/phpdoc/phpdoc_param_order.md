---
title: "Rule phpdoc_param_order - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/phpdoc_param_order"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `phpdoc_param_order`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_param_order.html#rule-phpdoc-param-order "Permalink to this heading")

Orders all `@param` annotations in DocBlocks according to method signature.

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_param_order.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_param_order.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 /**
  * Annotations in wrong order
  *
  * @param int   $a
+ * @param array $b
  * @param Foo   $c
- * @param array $b
  */
 function m($a, array $b, Foo $c) {}
```

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_param_order.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\PhpdocParamOrderFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/PhpdocParamOrderFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\PhpdocParamOrderFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/PhpdocParamOrderFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
