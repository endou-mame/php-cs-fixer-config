---
title: "Rule string_length_to_empty - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/string_notation/string_length_to_empty"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `string_length_to_empty`[¶](https://cs.symfony.com/doc/rules/string_notation/string_length_to_empty.html#rule-string-length-to-empty "Permalink to this heading")

String tests for empty must be done against `''`, not with `strlen`.

## Warning[¶](https://cs.symfony.com/doc/rules/string_notation/string_length_to_empty.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/string_notation/string_length_to_empty.html#this-rule-is-risky "Permalink to this heading")

Risky when `strlen` is overridden, when called using a `stringable` object,
also no longer triggers warning when called using non-string(able).

## Examples[¶](https://cs.symfony.com/doc/rules/string_notation/string_length_to_empty.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/string_notation/string_length_to_empty.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
-<?php $a = 0 === strlen($b) || \STRLEN($c) < 1;
+<?php $a = '' === $b || $c === '';
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/string_notation/string_length_to_empty.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)
* [@Symfony:risky](https://cs.symfony.com/doc/ruleSets/SymfonyRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/string_notation/string_length_to_empty.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\StringNotation\StringLengthToEmptyFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/StringNotation/StringLengthToEmptyFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\StringNotation\StringLengthToEmptyFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/StringNotation/StringLengthToEmptyFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
