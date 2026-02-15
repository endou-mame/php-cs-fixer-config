---
title: "Rule phpdoc_no_package - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_package"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `phpdoc_no_package`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_package.html#rule-phpdoc-no-package "Permalink to this heading")

`@package` and `@subpackage` annotations must be removed from PHPDoc.

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_package.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_package.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 /**
  * @internal
- * @package Foo
- * subpackage Bar
  */
 class Baz
 {
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_package.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_package.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\PhpdocNoPackageFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/PhpdocNoPackageFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\PhpdocNoPackageFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/PhpdocNoPackageFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
