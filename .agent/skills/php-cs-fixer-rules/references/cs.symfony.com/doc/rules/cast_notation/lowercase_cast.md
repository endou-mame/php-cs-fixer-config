---
title: "Rule lowercase_cast - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/cast_notation/lowercase_cast"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `lowercase_cast`[¶](https://cs.symfony.com/doc/rules/cast_notation/lowercase_cast.html#rule-lowercase-cast "Permalink to this heading")

Cast should be written in lower case.

## Examples[¶](https://cs.symfony.com/doc/rules/cast_notation/lowercase_cast.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/cast_notation/lowercase_cast.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-    $a = (BOOLEAN) $b;
-    $a = (BOOL) $b;
-    $a = (INTEGER) $b;
-    $a = (INT) $b;
-    $a = (DOUBLE) $b;
-    $a = (FLoaT) $b;
-    $a = (flOAT) $b;
-    $a = (stRING) $b;
-    $a = (ARRAy) $b;
-    $a = (OBJect) $b;
-    $a = (UNset) $b;
-    $a = (Binary) $b;
+    $a = (boolean) $b;
+    $a = (bool) $b;
+    $a = (integer) $b;
+    $a = (int) $b;
+    $a = (double) $b;
+    $a = (float) $b;
+    $a = (float) $b;
+    $a = (string) $b;
+    $a = (array) $b;
+    $a = (object) $b;
+    $a = (unset) $b;
+    $a = (binary) $b;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/cast_notation/lowercase_cast.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)*
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html)
* [@PER-CS1.0](https://cs.symfony.com/doc/ruleSets/PER-CS1.0.html) *(deprecated)*
* [@PER-CS1x0](https://cs.symfony.com/doc/ruleSets/PER-CS1x0.html)
* [@PER-CS2.0](https://cs.symfony.com/doc/ruleSets/PER-CS2.0.html) *(deprecated)*
* [@PER-CS2x0](https://cs.symfony.com/doc/ruleSets/PER-CS2x0.html)
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)*
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html)
* [@PSR12](https://cs.symfony.com/doc/ruleSets/PSR12.html)
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/cast_notation/lowercase_cast.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\CastNotation\LowercaseCastFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/CastNotation/LowercaseCastFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\CastNotation\LowercaseCastFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/CastNotation/LowercaseCastFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
