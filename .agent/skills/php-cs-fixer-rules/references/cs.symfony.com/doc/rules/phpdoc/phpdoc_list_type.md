---
title: "Rule phpdoc_list_type - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/phpdoc_list_type"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `phpdoc_list_type`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_list_type.html#rule-phpdoc-list-type "Permalink to this heading")

PHPDoc `list` type must be used instead of `array` without a key.

## Warning[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_list_type.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_list_type.html#this-rule-is-risky "Permalink to this heading")

Risky when `array` key should be present, but is missing.

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_list_type.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_list_type.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 /**
- * @param array<int> $x
- * @param array<array<string>> $y
+ * @param list<int> $x
+ * @param list<list<string>> $y
  */
```

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_list_type.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\PhpdocListTypeFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/PhpdocListTypeFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\PhpdocListTypeFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/PhpdocListTypeFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
