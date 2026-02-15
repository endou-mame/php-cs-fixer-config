---
title: "Rule phpdoc_types_no_duplicates - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types_no_duplicates"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `phpdoc_types_no_duplicates`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types_no_duplicates.html#rule-phpdoc-types-no-duplicates "Permalink to this heading")

Removes duplicate PHPDoc types.

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types_no_duplicates.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types_no_duplicates.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 /**
- * @param string|string|int $bar
+ * @param string|int $bar
  */
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types_no_duplicates.html#rule-sets "Permalink to this heading")

The rule is part of the following rule set:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types_no_duplicates.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\PhpdocTypesNoDuplicatesFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/PhpdocTypesNoDuplicatesFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\PhpdocTypesNoDuplicatesFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/PhpdocTypesNoDuplicatesFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
