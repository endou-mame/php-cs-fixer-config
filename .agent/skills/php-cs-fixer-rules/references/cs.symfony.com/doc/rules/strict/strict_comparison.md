---
title: "Rule strict_comparison - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/strict/strict_comparison"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `strict_comparison`[¶](https://cs.symfony.com/doc/rules/strict/strict_comparison.html#rule-strict-comparison "Permalink to this heading")

Comparisons should be strict.

## Warning[¶](https://cs.symfony.com/doc/rules/strict/strict_comparison.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/strict/strict_comparison.html#this-rule-is-risky "Permalink to this heading")

Changing comparisons to strict might change code behaviour.

## Examples[¶](https://cs.symfony.com/doc/rules/strict/strict_comparison.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/strict/strict_comparison.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-$a = 1== $b;
+$a = 1=== $b;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/strict/strict_comparison.html#rule-sets "Permalink to this heading")

The rule is part of the following rule set:

* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/strict/strict_comparison.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Strict\StrictComparisonFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Strict/StrictComparisonFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Strict\StrictComparisonFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Strict/StrictComparisonFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
