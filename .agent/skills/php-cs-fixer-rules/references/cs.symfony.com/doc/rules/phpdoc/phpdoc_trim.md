---
title: "Rule phpdoc_trim - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/phpdoc_trim"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `phpdoc_trim`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_trim.html#rule-phpdoc-trim "Permalink to this heading")

PHPDoc should start and end with content, excluding the very first and last line
of the docblocks.

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_trim.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_trim.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 /**
- *
  * Foo must be final class.
- *
- *
  */
 final class Foo {}
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_trim.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_trim.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\PhpdocTrimFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/PhpdocTrimFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\PhpdocTrimFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/PhpdocTrimFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
