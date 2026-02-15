---
title: "Rule phpdoc_summary - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/phpdoc_summary"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `phpdoc_summary`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_summary.html#rule-phpdoc-summary "Permalink to this heading")

PHPDoc summary should end in either a full stop, exclamation mark, or question
mark.

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_summary.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_summary.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 /**
- * Foo function is great
+ * Foo function is great.
  */
 function foo () {}
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_summary.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_summary.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\PhpdocSummaryFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/PhpdocSummaryFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\PhpdocSummaryFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/PhpdocSummaryFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
