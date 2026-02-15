---
title: "Rule no_redundant_readonly_property - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/class_notation/no_redundant_readonly_property"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_redundant_readonly_property`[¶](https://cs.symfony.com/doc/rules/class_notation/no_redundant_readonly_property.html#rule-no-redundant-readonly-property "Permalink to this heading")

Removes redundant readonly from properties in readonly classes.

## Examples[¶](https://cs.symfony.com/doc/rules/class_notation/no_redundant_readonly_property.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/class_notation/no_redundant_readonly_property.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 readonly class Foo
 {
-    private readonly int $bar;
+    private int $bar;
 }
```

## References[¶](https://cs.symfony.com/doc/rules/class_notation/no_redundant_readonly_property.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ClassNotation\NoRedundantReadonlyPropertyFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ClassNotation/NoRedundantReadonlyPropertyFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ClassNotation\NoRedundantReadonlyPropertyFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ClassNotation/NoRedundantReadonlyPropertyFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
