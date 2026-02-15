---
title: "Rule ternary_to_null_coalescing - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/operator/ternary_to_null_coalescing"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `ternary_to_null_coalescing`[¶](https://cs.symfony.com/doc/rules/operator/ternary_to_null_coalescing.html#rule-ternary-to-null-coalescing "Permalink to this heading")

Use `null` coalescing operator `??` where possible.

## Examples[¶](https://cs.symfony.com/doc/rules/operator/ternary_to_null_coalescing.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/operator/ternary_to_null_coalescing.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-$sample = isset($a) ? $a : $b;
+$sample = $a ?? $b;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/operator/ternary_to_null_coalescing.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PHP7x0Migration](https://cs.symfony.com/doc/ruleSets/PHP7x0Migration.html)
* [@PHP7x1Migration](https://cs.symfony.com/doc/ruleSets/PHP7x1Migration.html)
* [@PHP7x3Migration](https://cs.symfony.com/doc/ruleSets/PHP7x3Migration.html)
* [@PHP7x4Migration](https://cs.symfony.com/doc/ruleSets/PHP7x4Migration.html)
* [@PHP8x0Migration](https://cs.symfony.com/doc/ruleSets/PHP8x0Migration.html)
* [@PHP8x1Migration](https://cs.symfony.com/doc/ruleSets/PHP8x1Migration.html)
* [@PHP8x2Migration](https://cs.symfony.com/doc/ruleSets/PHP8x2Migration.html)
* [@PHP8x3Migration](https://cs.symfony.com/doc/ruleSets/PHP8x3Migration.html)
* [@PHP8x4Migration](https://cs.symfony.com/doc/ruleSets/PHP8x4Migration.html)
* [@PHP8x5Migration](https://cs.symfony.com/doc/ruleSets/PHP8x5Migration.html)
* [@PHP70Migration](https://cs.symfony.com/doc/ruleSets/PHP70Migration.html) *(deprecated)*
* [@PHP71Migration](https://cs.symfony.com/doc/ruleSets/PHP71Migration.html) *(deprecated)*
* [@PHP73Migration](https://cs.symfony.com/doc/ruleSets/PHP73Migration.html) *(deprecated)*
* [@PHP74Migration](https://cs.symfony.com/doc/ruleSets/PHP74Migration.html) *(deprecated)*
* [@PHP80Migration](https://cs.symfony.com/doc/ruleSets/PHP80Migration.html) *(deprecated)*
* [@PHP81Migration](https://cs.symfony.com/doc/ruleSets/PHP81Migration.html) *(deprecated)*
* [@PHP82Migration](https://cs.symfony.com/doc/ruleSets/PHP82Migration.html) *(deprecated)*
* [@PHP83Migration](https://cs.symfony.com/doc/ruleSets/PHP83Migration.html) *(deprecated)*
* [@PHP84Migration](https://cs.symfony.com/doc/ruleSets/PHP84Migration.html) *(deprecated)*
* [@PHP85Migration](https://cs.symfony.com/doc/ruleSets/PHP85Migration.html) *(deprecated)*

## References[¶](https://cs.symfony.com/doc/rules/operator/ternary_to_null_coalescing.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Operator\TernaryToNullCoalescingFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Operator/TernaryToNullCoalescingFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Operator\TernaryToNullCoalescingFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Operator/TernaryToNullCoalescingFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
