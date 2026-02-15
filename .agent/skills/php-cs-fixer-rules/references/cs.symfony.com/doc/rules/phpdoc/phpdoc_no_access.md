---
title: "Rule phpdoc_no_access - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_access"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `phpdoc_no_access`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_access.html#rule-phpdoc-no-access "Permalink to this heading")

`@access` annotations must be removed from PHPDoc.

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_access.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_access.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 class Foo
 {
     /**
      * @internal
-     * @access private
      */
     private $bar;
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_access.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_access.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\PhpdocNoAccessFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/PhpdocNoAccessFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\PhpdocNoAccessFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/PhpdocNoAccessFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
