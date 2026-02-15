---
title: "Rule no_short_bool_cast - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/cast_notation/no_short_bool_cast"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_short_bool_cast`[¶](https://cs.symfony.com/doc/rules/cast_notation/no_short_bool_cast.html#rule-no-short-bool-cast "Permalink to this heading")

Short cast `bool` using double exclamation mark should not be used.

## Examples[¶](https://cs.symfony.com/doc/rules/cast_notation/no_short_bool_cast.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/cast_notation/no_short_bool_cast.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-$a = !!$b;
+$a = (bool)$b;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/cast_notation/no_short_bool_cast.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/cast_notation/no_short_bool_cast.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\CastNotation\NoShortBoolCastFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/CastNotation/NoShortBoolCastFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\CastNotation\NoShortBoolCastFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/CastNotation/NoShortBoolCastFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
