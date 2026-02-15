---
title: "Rule single_line_throw - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/function_notation/single_line_throw"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `single_line_throw`[¶](https://cs.symfony.com/doc/rules/function_notation/single_line_throw.html#rule-single-line-throw "Permalink to this heading")

Throwing exception must be done in single line.

## Examples[¶](https://cs.symfony.com/doc/rules/function_notation/single_line_throw.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/function_notation/single_line_throw.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-throw new Exception(
-    'Error.',
-    500
-);
+throw new Exception('Error.', 500);
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/function_notation/single_line_throw.html#rule-sets "Permalink to this heading")

The rule is part of the following rule set:

* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/function_notation/single_line_throw.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\FunctionNotation\SingleLineThrowFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/FunctionNotation/SingleLineThrowFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\FunctionNotation\SingleLineThrowFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/FunctionNotation/SingleLineThrowFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
