---
title: "Rule combine_nested_dirname - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/function_notation/combine_nested_dirname"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `combine_nested_dirname`[¶](https://cs.symfony.com/doc/rules/function_notation/combine_nested_dirname.html#rule-combine-nested-dirname "Permalink to this heading")

Replace multiple nested calls of `dirname` by only one call with second
`$level` parameter.

## Warning[¶](https://cs.symfony.com/doc/rules/function_notation/combine_nested_dirname.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/function_notation/combine_nested_dirname.html#this-rule-is-risky "Permalink to this heading")

Risky when the function `dirname` is overridden.

## Examples[¶](https://cs.symfony.com/doc/rules/function_notation/combine_nested_dirname.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/function_notation/combine_nested_dirname.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-dirname(dirname(dirname($path)));
+dirname($path, 3);
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/function_notation/combine_nested_dirname.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PHP7x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP7x0MigrationRisky.html)
* [@PHP7x1Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP7x1MigrationRisky.html)
* [@PHP7x4Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP7x4MigrationRisky.html)
* [@PHP8x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x0MigrationRisky.html)
* [@PHP8x1Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x1MigrationRisky.html)
* [@PHP8x2Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x2MigrationRisky.html)
* [@PHP8x3Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x3MigrationRisky.html)
* [@PHP8x4Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x4MigrationRisky.html)
* [@PHP8x5Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x5MigrationRisky.html)
* [@PHP70Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP70MigrationRisky.html) *(deprecated)*
* [@PHP71Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP71MigrationRisky.html) *(deprecated)*
* [@PHP74Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP74MigrationRisky.html) *(deprecated)*
* [@PHP80Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP80MigrationRisky.html) *(deprecated)*
* [@PHP82Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP82MigrationRisky.html) *(deprecated)*
* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)
* [@Symfony:risky](https://cs.symfony.com/doc/ruleSets/SymfonyRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/function_notation/combine_nested_dirname.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\FunctionNotation\CombineNestedDirnameFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/FunctionNotation/CombineNestedDirnameFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\FunctionNotation\CombineNestedDirnameFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/FunctionNotation/CombineNestedDirnameFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
