---
title: "Rule get_class_to_class_keyword - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/language_construct/get_class_to_class_keyword"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `get_class_to_class_keyword`[¶](https://cs.symfony.com/doc/rules/language_construct/get_class_to_class_keyword.html#rule-get-class-to-class-keyword "Permalink to this heading")

Replace `get_class` calls on object variables with class keyword syntax.

## Warning[¶](https://cs.symfony.com/doc/rules/language_construct/get_class_to_class_keyword.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/language_construct/get_class_to_class_keyword.html#this-rule-is-risky "Permalink to this heading")

Risky if the `get_class` function is overridden.

## Examples[¶](https://cs.symfony.com/doc/rules/language_construct/get_class_to_class_keyword.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/language_construct/get_class_to_class_keyword.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-get_class($a);
+$a::class;
```

### Example #2[¶](https://cs.symfony.com/doc/rules/language_construct/get_class_to_class_keyword.html#example-2 "Permalink to this heading")

```
--- Original
+++ New
 <?php

 $date = new \DateTimeImmutable();
-$class = get_class($date);
+$class = $date::class;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/language_construct/get_class_to_class_keyword.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PHP8x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x0MigrationRisky.html)
* [@PHP8x1Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x1MigrationRisky.html)
* [@PHP8x2Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x2MigrationRisky.html)
* [@PHP8x3Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x3MigrationRisky.html)
* [@PHP8x4Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x4MigrationRisky.html)
* [@PHP8x5Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x5MigrationRisky.html)
* [@PHP80Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP80MigrationRisky.html) *(deprecated)*
* [@PHP82Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP82MigrationRisky.html) *(deprecated)*
* [@Symfony:risky](https://cs.symfony.com/doc/ruleSets/SymfonyRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/language_construct/get_class_to_class_keyword.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\LanguageConstruct\GetClassToClassKeywordFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/LanguageConstruct/GetClassToClassKeywordFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\LanguageConstruct\GetClassToClassKeywordFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/LanguageConstruct/GetClassToClassKeywordFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
