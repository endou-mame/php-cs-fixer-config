---
title: "Rule class_keyword_remove - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/language_construct/class_keyword_remove"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `class_keyword_remove`[¶](https://cs.symfony.com/doc/rules/language_construct/class_keyword_remove.html#rule-class-keyword-remove "Permalink to this heading")

Converts `::class` keywords to FQCN strings.

## Warning[¶](https://cs.symfony.com/doc/rules/language_construct/class_keyword_remove.html#warning "Permalink to this heading")

### This rule is DEPRECATED and will be removed in the next major version 4.0[¶](https://cs.symfony.com/doc/rules/language_construct/class_keyword_remove.html#this-rule-is-deprecated-and-will-be-removed-in-the-next-major-version-4-0 "Permalink to this heading")

No replacement available.

## Examples[¶](https://cs.symfony.com/doc/rules/language_construct/class_keyword_remove.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/language_construct/class_keyword_remove.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php

 use Foo\Bar\Baz;

-$className = Baz::class;
+$className = 'Foo\Bar\Baz';
```

## References[¶](https://cs.symfony.com/doc/rules/language_construct/class_keyword_remove.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\LanguageConstruct\ClassKeywordRemoveFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/LanguageConstruct/ClassKeywordRemoveFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\LanguageConstruct\ClassKeywordRemoveFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/LanguageConstruct/ClassKeywordRemoveFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
