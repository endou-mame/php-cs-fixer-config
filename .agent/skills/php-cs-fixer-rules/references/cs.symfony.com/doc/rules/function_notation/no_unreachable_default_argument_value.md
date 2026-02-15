---
title: "Rule no_unreachable_default_argument_value - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/function_notation/no_unreachable_default_argument_value"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_unreachable_default_argument_value`[¶](https://cs.symfony.com/doc/rules/function_notation/no_unreachable_default_argument_value.html#rule-no-unreachable-default-argument-value "Permalink to this heading")

In function arguments there must not be arguments with default values before
non-default ones.

## Warning[¶](https://cs.symfony.com/doc/rules/function_notation/no_unreachable_default_argument_value.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/function_notation/no_unreachable_default_argument_value.html#this-rule-is-risky "Permalink to this heading")

Modifies the signature of functions; therefore risky when using systems (such as
some Symfony components) that rely on those (for example through reflection).

## Examples[¶](https://cs.symfony.com/doc/rules/function_notation/no_unreachable_default_argument_value.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/function_notation/no_unreachable_default_argument_value.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-function example($foo = "two words", $bar) {}
+function example($foo, $bar) {}
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/function_notation/no_unreachable_default_argument_value.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER-CS1.0:risky](https://cs.symfony.com/doc/ruleSets/PER-CS1.0Risky.html) *(deprecated)*
* [@PER-CS1x0:risky](https://cs.symfony.com/doc/ruleSets/PER-CS1x0Risky.html)
* [@PER-CS2.0:risky](https://cs.symfony.com/doc/ruleSets/PER-CS2.0Risky.html) *(deprecated)*
* [@PER-CS2x0:risky](https://cs.symfony.com/doc/ruleSets/PER-CS2x0Risky.html)
* [@PER-CS3.0:risky](https://cs.symfony.com/doc/ruleSets/PER-CS3.0Risky.html) *(deprecated)*
* [@PER-CS3x0:risky](https://cs.symfony.com/doc/ruleSets/PER-CS3x0Risky.html)
* [@PER-CS:risky](https://cs.symfony.com/doc/ruleSets/PER-CSRisky.html)
* [@PER:risky](https://cs.symfony.com/doc/ruleSets/PERRisky.html) *(deprecated)*
* [@PHP8x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x0MigrationRisky.html)
* [@PHP8x1Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x1MigrationRisky.html)
* [@PHP8x2Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x2MigrationRisky.html)
* [@PHP8x3Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x3MigrationRisky.html)
* [@PHP8x4Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x4MigrationRisky.html)
* [@PHP8x5Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x5MigrationRisky.html)
* [@PHP80Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP80MigrationRisky.html) *(deprecated)*
* [@PHP82Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP82MigrationRisky.html) *(deprecated)*
* [@PSR12:risky](https://cs.symfony.com/doc/ruleSets/PSR12Risky.html)
* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)
* [@Symfony:risky](https://cs.symfony.com/doc/ruleSets/SymfonyRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/function_notation/no_unreachable_default_argument_value.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\FunctionNotation\NoUnreachableDefaultArgumentValueFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/FunctionNotation/NoUnreachableDefaultArgumentValueFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\FunctionNotation\NoUnreachableDefaultArgumentValueFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/FunctionNotation/NoUnreachableDefaultArgumentValueFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
