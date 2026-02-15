---
title: "Rule no_singleline_whitespace_before_semicolons - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/semicolon/no_singleline_whitespace_before_semicolons"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_singleline_whitespace_before_semicolons`[¶](https://cs.symfony.com/doc/rules/semicolon/no_singleline_whitespace_before_semicolons.html#rule-no-singleline-whitespace-before-semicolons "Permalink to this heading")

Single-line whitespace before closing semicolon are prohibited.

## Examples[¶](https://cs.symfony.com/doc/rules/semicolon/no_singleline_whitespace_before_semicolons.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/semicolon/no_singleline_whitespace_before_semicolons.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
-<?php $this->foo() ;
+<?php $this->foo();
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/semicolon/no_singleline_whitespace_before_semicolons.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/semicolon/no_singleline_whitespace_before_semicolons.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Semicolon\NoSinglelineWhitespaceBeforeSemicolonsFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Semicolon/NoSinglelineWhitespaceBeforeSemicolonsFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Semicolon\NoSinglelineWhitespaceBeforeSemicolonsFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Semicolon/NoSinglelineWhitespaceBeforeSemicolonsFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
