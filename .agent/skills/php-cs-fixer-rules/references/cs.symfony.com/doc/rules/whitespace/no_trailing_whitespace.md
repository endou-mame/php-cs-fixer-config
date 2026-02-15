---
title: "Rule no_trailing_whitespace - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/whitespace/no_trailing_whitespace"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_trailing_whitespace`[¶](https://cs.symfony.com/doc/rules/whitespace/no_trailing_whitespace.html#rule-no-trailing-whitespace "Permalink to this heading")

There must be no trailing whitespace at the end of non-blank lines.

## Examples[¶](https://cs.symfony.com/doc/rules/whitespace/no_trailing_whitespace.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/whitespace/no_trailing_whitespace.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-$a = 1;
+$a = 1;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/whitespace/no_trailing_whitespace.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)*
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html)
* [@PER-CS1.0](https://cs.symfony.com/doc/ruleSets/PER-CS1.0.html) *(deprecated)*
* [@PER-CS1x0](https://cs.symfony.com/doc/ruleSets/PER-CS1x0.html)
* [@PER-CS2.0](https://cs.symfony.com/doc/ruleSets/PER-CS2.0.html) *(deprecated)*
* [@PER-CS2x0](https://cs.symfony.com/doc/ruleSets/PER-CS2x0.html)
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)*
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html)
* [@PSR2](https://cs.symfony.com/doc/ruleSets/PSR2.html)
* [@PSR12](https://cs.symfony.com/doc/ruleSets/PSR12.html)
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/whitespace/no_trailing_whitespace.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Whitespace\NoTrailingWhitespaceFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Whitespace/NoTrailingWhitespaceFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Whitespace\NoTrailingWhitespaceFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Whitespace/NoTrailingWhitespaceFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
