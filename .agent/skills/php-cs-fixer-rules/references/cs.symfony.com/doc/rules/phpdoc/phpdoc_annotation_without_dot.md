---
title: "Rule phpdoc_annotation_without_dot - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/phpdoc_annotation_without_dot"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `phpdoc_annotation_without_dot`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_annotation_without_dot.html#rule-phpdoc-annotation-without-dot "Permalink to this heading")

PHPDoc annotation descriptions should not be a sentence.

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_annotation_without_dot.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_annotation_without_dot.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 /**
- * @param string $bar Some string.
+ * @param string $bar some string
  */
 function foo ($bar) {}
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_annotation_without_dot.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_annotation_without_dot.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\PhpdocAnnotationWithoutDotFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/PhpdocAnnotationWithoutDotFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\PhpdocAnnotationWithoutDotFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/PhpdocAnnotationWithoutDotFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
