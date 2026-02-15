---
title: "Rule no_trailing_whitespace_in_string - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/string_notation/no_trailing_whitespace_in_string"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_trailing_whitespace_in_string`[¶](https://cs.symfony.com/doc/rules/string_notation/no_trailing_whitespace_in_string.html#rule-no-trailing-whitespace-in-string "Permalink to this heading")

There must be no trailing whitespace at the end of lines in strings.

## Warning[¶](https://cs.symfony.com/doc/rules/string_notation/no_trailing_whitespace_in_string.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/string_notation/no_trailing_whitespace_in_string.html#this-rule-is-risky "Permalink to this heading")

Changing the whitespaces in strings might affect string comparisons and outputs.

## Examples[¶](https://cs.symfony.com/doc/rules/string_notation/no_trailing_whitespace_in_string.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/string_notation/no_trailing_whitespace_in_string.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
-<?php $a = '
-    foo
+<?php $a = '
+    foo
 ';
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/string_notation/no_trailing_whitespace_in_string.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER-CS1.0:risky](https://cs.symfony.com/doc/ruleSets/PER-CS1.0Risky.html) *(deprecated)*
* [@PER-CS1x0:risky](https://cs.symfony.com/doc/ruleSets/PER-CS1x0Risky.html)
* [@PER-CS2.0:risky](https://cs.symfony.com/doc/ruleSets/PER-CS2.0Risky.html) *(deprecated)*
* [@PER-CS2x0:risky](https://cs.symfony.com/doc/ruleSets/PER-CS2x0Risky.html)
* [@PER-CS3.0:risky](https://cs.symfony.com/doc/ruleSets/PER-CS3.0Risky.html) *(deprecated)*
* [@PER-CS3x0:risky](https://cs.symfony.com/doc/ruleSets/PER-CS3x0Risky.html)
* [@PER-CS:risky](https://cs.symfony.com/doc/ruleSets/PER-CSRisky.html)
* [@PER:risky](https://cs.symfony.com/doc/ruleSets/PERRisky.html) *(deprecated)*
* [@PSR12:risky](https://cs.symfony.com/doc/ruleSets/PSR12Risky.html)
* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/string_notation/no_trailing_whitespace_in_string.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\StringNotation\NoTrailingWhitespaceInStringFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/StringNotation/NoTrailingWhitespaceInStringFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\StringNotation\NoTrailingWhitespaceInStringFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/StringNotation/NoTrailingWhitespaceInStringFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
