---
title: "Rule return_to_yield_from - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/array_notation/return_to_yield_from"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `return_to_yield_from`[¶](https://cs.symfony.com/doc/rules/array_notation/return_to_yield_from.html#rule-return-to-yield-from "Permalink to this heading")

If the function explicitly returns an array, and has the return type
`iterable`, then `yield from` must be used instead of `return`.

## Examples[¶](https://cs.symfony.com/doc/rules/array_notation/return_to_yield_from.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/array_notation/return_to_yield_from.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php function giveMeData(): iterable {
-    return [1, 2, 3];
+    yield from [1, 2, 3];
 }
```

## References[¶](https://cs.symfony.com/doc/rules/array_notation/return_to_yield_from.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ArrayNotation\ReturnToYieldFromFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ArrayNotation/ReturnToYieldFromFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ArrayNotation\ReturnToYieldFromFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ArrayNotation/ReturnToYieldFromFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
