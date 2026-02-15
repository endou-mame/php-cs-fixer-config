---
title: "Rule lowercase_keywords - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/casing/lowercase_keywords"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `lowercase_keywords`[¶](https://cs.symfony.com/doc/rules/casing/lowercase_keywords.html#rule-lowercase-keywords "Permalink to this heading")

PHP keywords MUST be in lower case.

## Examples[¶](https://cs.symfony.com/doc/rules/casing/lowercase_keywords.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/casing/lowercase_keywords.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-    FOREACH($a AS $B) {
-        TRY {
-            NEW $C($a, ISSET($B));
-            WHILE($B) {
-                INCLUDE "test.php";
+    foreach($a as $B) {
+        try {
+            new $C($a, isset($B));
+            while($B) {
+                include "test.php";
             }
-        } CATCH(\Exception $e) {
-            EXIT(1);
+        } catch(\Exception $e) {
+            exit(1);
         }
     }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/casing/lowercase_keywords.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)*
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html)
* [@PER-CS1.0](https://cs.symfony.com/doc/ruleSets/PER-CS1.0.html) *(deprecated)*
* [@PER-CS1x0](https://cs.symfony.com/doc/ruleSets/PER-CS1x0.html)
* [@PER-CS2.0](https://cs.symfony.com/doc/ruleSets/PER-CS2.0.html) *(deprecated)*
* [@PER-CS2x0](https://cs.symfony.com/doc/ruleSets/PER-CS2x0.html)
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)*
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html)
* [@PSR2](https://cs.symfony.com/doc/ruleSets/PSR2.html)
* [@PSR12](https://cs.symfony.com/doc/ruleSets/PSR12.html)
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/casing/lowercase_keywords.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Casing\LowercaseKeywordsFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Casing/LowercaseKeywordsFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Casing\LowercaseKeywordsFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Casing/LowercaseKeywordsFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
