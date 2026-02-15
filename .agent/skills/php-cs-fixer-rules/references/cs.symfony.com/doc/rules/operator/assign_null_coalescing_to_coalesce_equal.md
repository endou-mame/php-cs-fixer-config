---
title: "Rule assign_null_coalescing_to_coalesce_equal - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/operator/assign_null_coalescing_to_coalesce_equal"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `assign_null_coalescing_to_coalesce_equal`[¶](https://cs.symfony.com/doc/rules/operator/assign_null_coalescing_to_coalesce_equal.html#rule-assign-null-coalescing-to-coalesce-equal "Permalink to this heading")

Use the null coalescing assignment operator `??=` where possible.

## Examples[¶](https://cs.symfony.com/doc/rules/operator/assign_null_coalescing_to_coalesce_equal.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/operator/assign_null_coalescing_to_coalesce_equal.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-$foo = $foo ?? 1;
+$foo ??= 1;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/operator/assign_null_coalescing_to_coalesce_equal.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PHP7x4Migration](https://cs.symfony.com/doc/ruleSets/PHP7x4Migration.html)
* [@PHP8x0Migration](https://cs.symfony.com/doc/ruleSets/PHP8x0Migration.html)
* [@PHP8x1Migration](https://cs.symfony.com/doc/ruleSets/PHP8x1Migration.html)
* [@PHP8x2Migration](https://cs.symfony.com/doc/ruleSets/PHP8x2Migration.html)
* [@PHP8x3Migration](https://cs.symfony.com/doc/ruleSets/PHP8x3Migration.html)
* [@PHP8x4Migration](https://cs.symfony.com/doc/ruleSets/PHP8x4Migration.html)
* [@PHP8x5Migration](https://cs.symfony.com/doc/ruleSets/PHP8x5Migration.html)
* [@PHP74Migration](https://cs.symfony.com/doc/ruleSets/PHP74Migration.html) *(deprecated)*
* [@PHP80Migration](https://cs.symfony.com/doc/ruleSets/PHP80Migration.html) *(deprecated)*
* [@PHP81Migration](https://cs.symfony.com/doc/ruleSets/PHP81Migration.html) *(deprecated)*
* [@PHP82Migration](https://cs.symfony.com/doc/ruleSets/PHP82Migration.html) *(deprecated)*
* [@PHP83Migration](https://cs.symfony.com/doc/ruleSets/PHP83Migration.html) *(deprecated)*
* [@PHP84Migration](https://cs.symfony.com/doc/ruleSets/PHP84Migration.html) *(deprecated)*
* [@PHP85Migration](https://cs.symfony.com/doc/ruleSets/PHP85Migration.html) *(deprecated)*

## References[¶](https://cs.symfony.com/doc/rules/operator/assign_null_coalescing_to_coalesce_equal.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Operator\AssignNullCoalescingToCoalesceEqualFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Operator/AssignNullCoalescingToCoalesceEqualFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Operator\AssignNullCoalescingToCoalesceEqualFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Operator/AssignNullCoalescingToCoalesceEqualFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
