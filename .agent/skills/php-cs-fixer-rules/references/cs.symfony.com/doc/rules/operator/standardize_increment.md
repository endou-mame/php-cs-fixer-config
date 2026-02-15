---
title: "Rule standardize_increment - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/operator/standardize_increment"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `standardize_increment`[¶](https://cs.symfony.com/doc/rules/operator/standardize_increment.html#rule-standardize-increment "Permalink to this heading")

Increment and decrement operators should be used if possible.

## Examples[¶](https://cs.symfony.com/doc/rules/operator/standardize_increment.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/operator/standardize_increment.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-$i += 1;
+++$i;
```

### Example #2[¶](https://cs.symfony.com/doc/rules/operator/standardize_increment.html#example-2 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-$i -= 1;
+--$i;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/operator/standardize_increment.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/operator/standardize_increment.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Operator\StandardizeIncrementFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Operator/StandardizeIncrementFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Operator\StandardizeIncrementFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Operator/StandardizeIncrementFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
