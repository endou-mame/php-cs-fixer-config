---
title: "Rule no_trailing_comma_in_singleline_array - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/array_notation/no_trailing_comma_in_singleline_array"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_trailing_comma_in_singleline_array`[¶](https://cs.symfony.com/doc/rules/array_notation/no_trailing_comma_in_singleline_array.html#rule-no-trailing-comma-in-singleline-array "Permalink to this heading")

PHP single-line arrays should not have trailing comma.

## Warning[¶](https://cs.symfony.com/doc/rules/array_notation/no_trailing_comma_in_singleline_array.html#warning "Permalink to this heading")

### This rule is DEPRECATED and will be removed in the next major version 4.0[¶](https://cs.symfony.com/doc/rules/array_notation/no_trailing_comma_in_singleline_array.html#this-rule-is-deprecated-and-will-be-removed-in-the-next-major-version-4-0 "Permalink to this heading")

You should use `no_trailing_comma_in_singleline` instead.

## Examples[¶](https://cs.symfony.com/doc/rules/array_notation/no_trailing_comma_in_singleline_array.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/array_notation/no_trailing_comma_in_singleline_array.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-$a = array('sample',  );
+$a = array('sample');
```

## References[¶](https://cs.symfony.com/doc/rules/array_notation/no_trailing_comma_in_singleline_array.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ArrayNotation\NoTrailingCommaInSinglelineArrayFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ArrayNotation/NoTrailingCommaInSinglelineArrayFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ArrayNotation\NoTrailingCommaInSinglelineArrayFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ArrayNotation/NoTrailingCommaInSinglelineArrayFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
