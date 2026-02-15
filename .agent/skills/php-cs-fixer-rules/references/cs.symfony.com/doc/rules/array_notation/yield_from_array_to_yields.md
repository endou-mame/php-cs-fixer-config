---
title: "Rule yield_from_array_to_yields - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/array_notation/yield_from_array_to_yields"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `yield_from_array_to_yields`[¶](https://cs.symfony.com/doc/rules/array_notation/yield_from_array_to_yields.html#rule-yield-from-array-to-yields "Permalink to this heading")

Yield from array must be unpacked to series of yields.

## Description[¶](https://cs.symfony.com/doc/rules/array_notation/yield_from_array_to_yields.html#description "Permalink to this heading")

The conversion will make the array in `yield from` changed in arrays of 1 less
dimension.

## Warning[¶](https://cs.symfony.com/doc/rules/array_notation/yield_from_array_to_yields.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/array_notation/yield_from_array_to_yields.html#this-rule-is-risky "Permalink to this heading")

The rule is risky in case of `yield from` being used multiple times within
single function scope, while using list-alike data sources (e.g. `function
foo() { yield from ["a"]; yield from ["b"]; }`). It only matters when consuming
such iterator with key-value context, because set of yielded keys may be changed
after applying this rule.

## Examples[¶](https://cs.symfony.com/doc/rules/array_notation/yield_from_array_to_yields.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/array_notation/yield_from_array_to_yields.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php function generate() {
-    yield from [
-        1,
-        2,
-        3,
-    ];
+
+        yield 1;
+        yield 2;
+        yield 3;
+
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/array_notation/yield_from_array_to_yields.html#rule-sets "Permalink to this heading")

The rule is part of the following rule set:

* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/array_notation/yield_from_array_to_yields.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ArrayNotation\YieldFromArrayToYieldsFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ArrayNotation/YieldFromArrayToYieldsFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ArrayNotation\YieldFromArrayToYieldsFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ArrayNotation/YieldFromArrayToYieldsFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
