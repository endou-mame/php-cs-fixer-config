---
title: "Rule class_keyword - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/language_construct/class_keyword"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `class_keyword`[¶](https://cs.symfony.com/doc/rules/language_construct/class_keyword.html#rule-class-keyword "Permalink to this heading")

Converts FQCN strings to `*::class` keywords.

## Description[¶](https://cs.symfony.com/doc/rules/language_construct/class_keyword.html#description "Permalink to this heading")

This rule does not have an understanding of whether a class exists in the scope
of the codebase or not, relying on run-time and autoloaded classes to determine
it, which makes the rule useless when running on a single file out of codebase
context.

## Warnings[¶](https://cs.symfony.com/doc/rules/language_construct/class_keyword.html#warnings "Permalink to this heading")

### This rule is EXPERIMENTAL[¶](https://cs.symfony.com/doc/rules/language_construct/class_keyword.html#this-rule-is-experimental "Permalink to this heading")

Rule is not covered with backward compatibility promise and may produce unstable
or unexpected results, use it at your own risk. Rule’s behaviour may be changed
at any point, including rule’s name; its options’ names, availability and
allowed values; its default configuration. Rule may be even removed without
prior notice. Feel free to provide feedback and help with determining final
state of the rule.

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/language_construct/class_keyword.html#this-rule-is-risky "Permalink to this heading")

Do not use it, unless you know what you are doing.

## Examples[¶](https://cs.symfony.com/doc/rules/language_construct/class_keyword.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/language_construct/class_keyword.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php

-$foo = 'PhpCsFixer\Tokenizer\Tokens';
-$bar = "\PhpCsFixer\Tokenizer\Tokens";
+$foo = \PhpCsFixer\Tokenizer\Tokens::class;
+$bar = \PhpCsFixer\Tokenizer\Tokens::class;
```

## References[¶](https://cs.symfony.com/doc/rules/language_construct/class_keyword.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\LanguageConstruct\ClassKeywordFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/LanguageConstruct/ClassKeywordFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\LanguageConstruct\ClassKeywordFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/LanguageConstruct/ClassKeywordFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
