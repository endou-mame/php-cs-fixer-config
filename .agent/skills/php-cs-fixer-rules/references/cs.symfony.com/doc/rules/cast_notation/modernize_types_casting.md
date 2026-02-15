---
title: "Rule modernize_types_casting - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/cast_notation/modernize_types_casting"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `modernize_types_casting`[¶](https://cs.symfony.com/doc/rules/cast_notation/modernize_types_casting.html#rule-modernize-types-casting "Permalink to this heading")

Replaces `intval`, `floatval`, `doubleval`, `strval` and `boolval`
function calls with according type casting operator.

## Warning[¶](https://cs.symfony.com/doc/rules/cast_notation/modernize_types_casting.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/cast_notation/modernize_types_casting.html#this-rule-is-risky "Permalink to this heading")

Risky if any of the functions `intval`, `floatval`, `doubleval`,
`strval` or `boolval` are overridden.

## Examples[¶](https://cs.symfony.com/doc/rules/cast_notation/modernize_types_casting.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/cast_notation/modernize_types_casting.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-    $a = intval($b);
-    $a = floatval($b);
-    $a = doubleval($b);
-    $a = strval ($b);
-    $a = boolval($b);
+    $a = (int) $b;
+    $a = (float) $b;
+    $a = (float) $b;
+    $a = (string) $b;
+    $a = (bool) $b;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/cast_notation/modernize_types_casting.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)
* [@Symfony:risky](https://cs.symfony.com/doc/ruleSets/SymfonyRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/cast_notation/modernize_types_casting.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\CastNotation\ModernizeTypesCastingFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/CastNotation/ModernizeTypesCastingFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\CastNotation\ModernizeTypesCastingFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/CastNotation/ModernizeTypesCastingFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
