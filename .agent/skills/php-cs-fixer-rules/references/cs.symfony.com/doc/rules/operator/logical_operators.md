---
title: "Rule logical_operators - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/operator/logical_operators"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `logical_operators`[¶](https://cs.symfony.com/doc/rules/operator/logical_operators.html#rule-logical-operators "Permalink to this heading")

Use `&&` and `||` logical operators instead of `and` and `or`.

## Warning[¶](https://cs.symfony.com/doc/rules/operator/logical_operators.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/operator/logical_operators.html#this-rule-is-risky "Permalink to this heading")

Risky, because you must double-check if using and/or with lower precedence was
intentional.

## Examples[¶](https://cs.symfony.com/doc/rules/operator/logical_operators.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/operator/logical_operators.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php

-if ($a == "foo" and ($b == "bar" or $c == "baz")) {
+if ($a == "foo" && ($b == "bar" || $c == "baz")) {
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/operator/logical_operators.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)
* [@Symfony:risky](https://cs.symfony.com/doc/ruleSets/SymfonyRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/operator/logical_operators.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Operator\LogicalOperatorsFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Operator/LogicalOperatorsFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Operator\LogicalOperatorsFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Operator/LogicalOperatorsFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
