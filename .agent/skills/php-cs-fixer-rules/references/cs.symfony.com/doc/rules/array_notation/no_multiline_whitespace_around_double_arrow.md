---
title: "Rule no_multiline_whitespace_around_double_arrow - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/array_notation/no_multiline_whitespace_around_double_arrow"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_multiline_whitespace_around_double_arrow`[¶](https://cs.symfony.com/doc/rules/array_notation/no_multiline_whitespace_around_double_arrow.html#rule-no-multiline-whitespace-around-double-arrow "Permalink to this heading")

Operator `=>` should not be surrounded by multi-line whitespaces.

## Examples[¶](https://cs.symfony.com/doc/rules/array_notation/no_multiline_whitespace_around_double_arrow.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/array_notation/no_multiline_whitespace_around_double_arrow.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-$a = array(1
-
-=> 2);
+$a = array(1 => 2);
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/array_notation/no_multiline_whitespace_around_double_arrow.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/array_notation/no_multiline_whitespace_around_double_arrow.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ArrayNotation\NoMultilineWhitespaceAroundDoubleArrowFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ArrayNotation/NoMultilineWhitespaceAroundDoubleArrowFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ArrayNotation\NoMultilineWhitespaceAroundDoubleArrowFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ArrayNotation/NoMultilineWhitespaceAroundDoubleArrowFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
