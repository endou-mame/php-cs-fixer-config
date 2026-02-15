---
title: "Rule phpdoc_no_empty_return - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_empty_return"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `phpdoc_no_empty_return`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_empty_return.html#rule-phpdoc-no-empty-return "Permalink to this heading")

`@return void` and `@return null` annotations must be removed from PHPDoc.

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_empty_return.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_empty_return.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 /**
- * @return null
 */
 function foo() {}
```

### Example #2[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_empty_return.html#example-2 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 /**
- * @return void
 */
 function foo() {}
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_empty_return.html#rule-sets "Permalink to this heading")

The rule is part of the following rule set:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_empty_return.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\PhpdocNoEmptyReturnFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/PhpdocNoEmptyReturnFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\PhpdocNoEmptyReturnFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/PhpdocNoEmptyReturnFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
