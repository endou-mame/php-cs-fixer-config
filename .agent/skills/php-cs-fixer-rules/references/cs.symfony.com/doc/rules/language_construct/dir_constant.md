---
title: "Rule dir_constant - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/language_construct/dir_constant"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `dir_constant`[¶](https://cs.symfony.com/doc/rules/language_construct/dir_constant.html#rule-dir-constant "Permalink to this heading")

Replaces `dirname(__FILE__)` expression with equivalent `__DIR__` constant.

## Warning[¶](https://cs.symfony.com/doc/rules/language_construct/dir_constant.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/language_construct/dir_constant.html#this-rule-is-risky "Permalink to this heading")

Risky when the function `dirname` is overridden.

## Examples[¶](https://cs.symfony.com/doc/rules/language_construct/dir_constant.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/language_construct/dir_constant.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-$a = dirname(__FILE__);
+$a = __DIR__;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/language_construct/dir_constant.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)
* [@Symfony:risky](https://cs.symfony.com/doc/ruleSets/SymfonyRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/language_construct/dir_constant.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\LanguageConstruct\DirConstantFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/LanguageConstruct/DirConstantFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\LanguageConstruct\DirConstantFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/LanguageConstruct/DirConstantFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
