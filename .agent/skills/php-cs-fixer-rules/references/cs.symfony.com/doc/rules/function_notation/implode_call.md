---
title: "Rule implode_call - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/function_notation/implode_call"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `implode_call`[¶](https://cs.symfony.com/doc/rules/function_notation/implode_call.html#rule-implode-call "Permalink to this heading")

Function `implode` must be called with 2 arguments in the documented order.

## Warning[¶](https://cs.symfony.com/doc/rules/function_notation/implode_call.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/function_notation/implode_call.html#this-rule-is-risky "Permalink to this heading")

Risky when the function `implode` is overridden.

## Examples[¶](https://cs.symfony.com/doc/rules/function_notation/implode_call.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/function_notation/implode_call.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-implode($pieces, '');
+implode('', $pieces);
```

### Example #2[¶](https://cs.symfony.com/doc/rules/function_notation/implode_call.html#example-2 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-implode($pieces);
+implode('', $pieces);
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/function_notation/implode_call.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PHP7x4Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP7x4MigrationRisky.html)
* [@PHP8x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x0MigrationRisky.html)
* [@PHP8x1Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x1MigrationRisky.html)
* [@PHP8x2Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x2MigrationRisky.html)
* [@PHP8x3Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x3MigrationRisky.html)
* [@PHP8x4Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x4MigrationRisky.html)
* [@PHP8x5Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x5MigrationRisky.html)
* [@PHP74Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP74MigrationRisky.html) *(deprecated)*
* [@PHP80Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP80MigrationRisky.html) *(deprecated)*
* [@PHP82Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP82MigrationRisky.html) *(deprecated)*
* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)
* [@Symfony:risky](https://cs.symfony.com/doc/ruleSets/SymfonyRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/function_notation/implode_call.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\FunctionNotation\ImplodeCallFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/FunctionNotation/ImplodeCallFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\FunctionNotation\ImplodeCallFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/FunctionNotation/ImplodeCallFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
