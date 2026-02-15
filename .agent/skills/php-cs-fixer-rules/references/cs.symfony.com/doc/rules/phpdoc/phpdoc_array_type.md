---
title: "Rule phpdoc_array_type - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/phpdoc_array_type"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `phpdoc_array_type`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_array_type.html#rule-phpdoc-array-type "Permalink to this heading")

PHPDoc `array<T>` type must be used instead of `T[]`.

## Warning[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_array_type.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_array_type.html#this-rule-is-risky "Permalink to this heading")

Risky when using `T[]` in union types.

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_array_type.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_array_type.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 /**
- * @param int[] $x
- * @param string[][] $y
+ * @param array<int> $x
+ * @param array<array<string>> $y
  */
```

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_array_type.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\PhpdocArrayTypeFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/PhpdocArrayTypeFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\PhpdocArrayTypeFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/PhpdocArrayTypeFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
