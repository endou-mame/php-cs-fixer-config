---
title: "Rule phpdoc_var_annotation_correct_order - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/phpdoc_var_annotation_correct_order"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `phpdoc_var_annotation_correct_order`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_var_annotation_correct_order.html#rule-phpdoc-var-annotation-correct-order "Permalink to this heading")

`@var` and `@type` annotations must have type and name in the correct order.

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_var_annotation_correct_order.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_var_annotation_correct_order.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-/** @var $foo int */
+/** @var int $foo */
 $foo = 2 + 2;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_var_annotation_correct_order.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_var_annotation_correct_order.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\PhpdocVarAnnotationCorrectOrderFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/PhpdocVarAnnotationCorrectOrderFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\PhpdocVarAnnotationCorrectOrderFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/PhpdocVarAnnotationCorrectOrderFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
