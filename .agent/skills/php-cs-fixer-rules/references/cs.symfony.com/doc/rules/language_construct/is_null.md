---
title: "Rule is_null - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/language_construct/is_null"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `is_null`[¶](https://cs.symfony.com/doc/rules/language_construct/is_null.html#rule-is-null "Permalink to this heading")

Replaces `is_null($var)` expression with `null === $var`.

## Warning[¶](https://cs.symfony.com/doc/rules/language_construct/is_null.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/language_construct/is_null.html#this-rule-is-risky "Permalink to this heading")

Risky when the function `is_null` is overridden.

## Examples[¶](https://cs.symfony.com/doc/rules/language_construct/is_null.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/language_construct/is_null.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-$a = is_null($b);
+$a = null === $b;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/language_construct/is_null.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)
* [@Symfony:risky](https://cs.symfony.com/doc/ruleSets/SymfonyRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/language_construct/is_null.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\LanguageConstruct\IsNullFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/LanguageConstruct/IsNullFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\LanguageConstruct\IsNullFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/LanguageConstruct/IsNullFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
