---
title: "Rule array_indentation - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/whitespace/array_indentation"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `array_indentation`[¶](https://cs.symfony.com/doc/rules/whitespace/array_indentation.html#rule-array-indentation "Permalink to this heading")

Each element of an array must be indented exactly once.

## Examples[¶](https://cs.symfony.com/doc/rules/whitespace/array_indentation.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/whitespace/array_indentation.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 $foo = [
-   'bar' => [
-    'baz' => true,
-  ],
+    'bar' => [
+        'baz' => true,
+    ],
 ];
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/whitespace/array_indentation.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)*
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html)
* [@PER-CS2.0](https://cs.symfony.com/doc/ruleSets/PER-CS2.0.html) *(deprecated)*
* [@PER-CS2x0](https://cs.symfony.com/doc/ruleSets/PER-CS2x0.html)
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)*
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html)
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/whitespace/array_indentation.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Whitespace\ArrayIndentationFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Whitespace/ArrayIndentationFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Whitespace\ArrayIndentationFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Whitespace/ArrayIndentationFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
