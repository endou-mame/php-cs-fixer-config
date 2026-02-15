---
title: "Rule combine_consecutive_unsets - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/language_construct/combine_consecutive_unsets"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `combine_consecutive_unsets`[¶](https://cs.symfony.com/doc/rules/language_construct/combine_consecutive_unsets.html#rule-combine-consecutive-unsets "Permalink to this heading")

Calling `unset` on multiple items should be done in one call.

## Examples[¶](https://cs.symfony.com/doc/rules/language_construct/combine_consecutive_unsets.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/language_construct/combine_consecutive_unsets.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-unset($a); unset($b);
+unset($a, $b);
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/language_construct/combine_consecutive_unsets.html#rule-sets "Permalink to this heading")

The rule is part of the following rule set:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)

## References[¶](https://cs.symfony.com/doc/rules/language_construct/combine_consecutive_unsets.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\LanguageConstruct\CombineConsecutiveUnsetsFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/LanguageConstruct/CombineConsecutiveUnsetsFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\LanguageConstruct\CombineConsecutiveUnsetsFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/LanguageConstruct/CombineConsecutiveUnsetsFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
