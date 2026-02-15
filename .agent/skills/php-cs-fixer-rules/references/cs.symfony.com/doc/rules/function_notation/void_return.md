---
title: "Rule void_return - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/function_notation/void_return"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `void_return`[¶](https://cs.symfony.com/doc/rules/function_notation/void_return.html#rule-void-return "Permalink to this heading")

Add `void` return type to functions with missing or empty return statements,
but priority is given to `@return` annotations.

## Warning[¶](https://cs.symfony.com/doc/rules/function_notation/void_return.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/function_notation/void_return.html#this-rule-is-risky "Permalink to this heading")

Modifies the signature of functions.

## Examples[¶](https://cs.symfony.com/doc/rules/function_notation/void_return.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/function_notation/void_return.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-function foo($a) {};
+function foo($a): void {};
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/function_notation/void_return.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PHP7x1Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP7x1MigrationRisky.html)
* [@PHP7x4Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP7x4MigrationRisky.html)
* [@PHP8x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x0MigrationRisky.html)
* [@PHP8x1Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x1MigrationRisky.html)
* [@PHP8x2Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x2MigrationRisky.html)
* [@PHP8x3Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x3MigrationRisky.html)
* [@PHP8x4Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x4MigrationRisky.html)
* [@PHP8x5Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x5MigrationRisky.html)
* [@PHP71Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP71MigrationRisky.html) *(deprecated)*
* [@PHP74Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP74MigrationRisky.html) *(deprecated)*
* [@PHP80Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP80MigrationRisky.html) *(deprecated)*
* [@PHP82Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP82MigrationRisky.html) *(deprecated)*

## References[¶](https://cs.symfony.com/doc/rules/function_notation/void_return.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\FunctionNotation\VoidReturnFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/FunctionNotation/VoidReturnFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\FunctionNotation\VoidReturnFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/FunctionNotation/VoidReturnFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
