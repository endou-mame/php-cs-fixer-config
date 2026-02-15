---
title: "Rule stringable_for_to_string - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/class_notation/stringable_for_to_string"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `stringable_for_to_string`[¶](https://cs.symfony.com/doc/rules/class_notation/stringable_for_to_string.html#rule-stringable-for-to-string "Permalink to this heading")

A class that implements the `__toString()` method must explicitly implement
the `Stringable` interface.

## Examples[¶](https://cs.symfony.com/doc/rules/class_notation/stringable_for_to_string.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/class_notation/stringable_for_to_string.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-class Foo
+class Foo implements \Stringable
 {
     public function __toString()
     {
         return "Foo";
     }
 }
```

## References[¶](https://cs.symfony.com/doc/rules/class_notation/stringable_for_to_string.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ClassNotation\StringableForToStringFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ClassNotation/StringableForToStringFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ClassNotation\StringableForToStringFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ClassNotation/StringableForToStringFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
