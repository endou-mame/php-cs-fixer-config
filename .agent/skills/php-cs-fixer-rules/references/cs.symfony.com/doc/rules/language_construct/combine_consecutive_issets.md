---
title: "Rule combine_consecutive_issets - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/language_construct/combine_consecutive_issets"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `combine_consecutive_issets`[¶](https://cs.symfony.com/doc/rules/language_construct/combine_consecutive_issets.html#rule-combine-consecutive-issets "Permalink to this heading")

Using `isset($var) &&` multiple times should be done in one call.

## Examples[¶](https://cs.symfony.com/doc/rules/language_construct/combine_consecutive_issets.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/language_construct/combine_consecutive_issets.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-$a = isset($a) && isset($b);
+$a = isset($a, $b)  ;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/language_construct/combine_consecutive_issets.html#rule-sets "Permalink to this heading")

The rule is part of the following rule set:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)

## References[¶](https://cs.symfony.com/doc/rules/language_construct/combine_consecutive_issets.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\LanguageConstruct\CombineConsecutiveIssetsFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/LanguageConstruct/CombineConsecutiveIssetsFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\LanguageConstruct\CombineConsecutiveIssetsFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/LanguageConstruct/CombineConsecutiveIssetsFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
