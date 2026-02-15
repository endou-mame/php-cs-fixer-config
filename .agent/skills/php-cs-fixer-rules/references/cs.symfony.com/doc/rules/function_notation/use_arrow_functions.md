---
title: "Rule use_arrow_functions - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/function_notation/use_arrow_functions"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `use_arrow_functions`[¶](https://cs.symfony.com/doc/rules/function_notation/use_arrow_functions.html#rule-use-arrow-functions "Permalink to this heading")

Anonymous functions with return as the only statement must use arrow functions.

## Warning[¶](https://cs.symfony.com/doc/rules/function_notation/use_arrow_functions.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/function_notation/use_arrow_functions.html#this-rule-is-risky "Permalink to this heading")

Risky when using `isset()` on outside variables that are not imported with
`use ()`.

## Examples[¶](https://cs.symfony.com/doc/rules/function_notation/use_arrow_functions.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/function_notation/use_arrow_functions.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-foo(function ($a) use ($b) {
-    return $a + $b;
-});
+foo(fn ($a) => $a + $b);
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/function_notation/use_arrow_functions.html#rule-sets "Permalink to this heading")

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

## References[¶](https://cs.symfony.com/doc/rules/function_notation/use_arrow_functions.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\FunctionNotation\UseArrowFunctionsFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/FunctionNotation/UseArrowFunctionsFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\FunctionNotation\UseArrowFunctionsFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/FunctionNotation/UseArrowFunctionsFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
