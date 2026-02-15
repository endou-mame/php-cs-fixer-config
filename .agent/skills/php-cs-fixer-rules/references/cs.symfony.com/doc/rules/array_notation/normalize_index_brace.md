---
title: "Rule normalize_index_brace - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/array_notation/normalize_index_brace"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `normalize_index_brace`[¶](https://cs.symfony.com/doc/rules/array_notation/normalize_index_brace.html#rule-normalize-index-brace "Permalink to this heading")

Array index should always be written by using square braces.

## Examples[¶](https://cs.symfony.com/doc/rules/array_notation/normalize_index_brace.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/array_notation/normalize_index_brace.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-echo $sample{$index};
+echo $sample[$index];
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/array_notation/normalize_index_brace.html#rule-sets "Permalink to this heading")

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
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/array_notation/normalize_index_brace.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ArrayNotation\NormalizeIndexBraceFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ArrayNotation/NormalizeIndexBraceFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ArrayNotation\NormalizeIndexBraceFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ArrayNotation/NormalizeIndexBraceFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
