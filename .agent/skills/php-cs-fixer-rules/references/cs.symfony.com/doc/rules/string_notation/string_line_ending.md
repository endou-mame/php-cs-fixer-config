---
title: "Rule string_line_ending - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/string_notation/string_line_ending"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `string_line_ending`[¶](https://cs.symfony.com/doc/rules/string_notation/string_line_ending.html#rule-string-line-ending "Permalink to this heading")

All multi-line strings must use correct line ending.

## Warning[¶](https://cs.symfony.com/doc/rules/string_notation/string_line_ending.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/string_notation/string_line_ending.html#this-rule-is-risky "Permalink to this heading")

Changing the line endings of multi-line strings might affect string comparisons
and outputs.

## Examples[¶](https://cs.symfony.com/doc/rules/string_notation/string_line_ending.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/string_notation/string_line_ending.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
-<?php $a = 'my^M
+<?php $a = 'my
 multi
-line^M
+line
 string';^M
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/string_notation/string_line_ending.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)
* [@Symfony:risky](https://cs.symfony.com/doc/ruleSets/SymfonyRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/string_notation/string_line_ending.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\StringNotation\StringLineEndingFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/StringNotation/StringLineEndingFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\StringNotation\StringLineEndingFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/StringNotation/StringLineEndingFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
