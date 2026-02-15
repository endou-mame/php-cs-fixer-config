---
title: "Rule not_operator_with_successor_space - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/operator/not_operator_with_successor_space"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `not_operator_with_successor_space`[¶](https://cs.symfony.com/doc/rules/operator/not_operator_with_successor_space.html#rule-not-operator-with-successor-space "Permalink to this heading")

Logical NOT operators (`!`) should have one trailing whitespace.

## Examples[¶](https://cs.symfony.com/doc/rules/operator/not_operator_with_successor_space.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/operator/not_operator_with_successor_space.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php

-if (!$bar) {
+if (! $bar) {
     echo "Help!";
 }
```

## References[¶](https://cs.symfony.com/doc/rules/operator/not_operator_with_successor_space.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Operator\NotOperatorWithSuccessorSpaceFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Operator/NotOperatorWithSuccessorSpaceFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Operator\NotOperatorWithSuccessorSpaceFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Operator/NotOperatorWithSuccessorSpaceFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
