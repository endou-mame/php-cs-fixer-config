---
title: "Rule php_unit_fqcn_annotation - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/php_unit/php_unit_fqcn_annotation"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `php_unit_fqcn_annotation`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_fqcn_annotation.html#rule-php-unit-fqcn-annotation "Permalink to this heading")

PHPUnit annotations should be a FQCNs including a root namespace.

## Examples[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_fqcn_annotation.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_fqcn_annotation.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 final class MyTest extends \PHPUnit_Framework_TestCase
 {
     /**
-     * @expectedException InvalidArgumentException
-     * @covers Project\NameSpace\Something
-     * @coversDefaultClass Project\Default
-     * @uses Project\Test\Util
+     * @expectedException \InvalidArgumentException
+     * @covers \Project\NameSpace\Something
+     * @coversDefaultClass \Project\Default
+     * @uses \Project\Test\Util
      */
     public function testSomeTest()
     {
     }
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_fqcn_annotation.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_fqcn_annotation.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\PhpUnit\PhpUnitFqcnAnnotationFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/PhpUnit/PhpUnitFqcnAnnotationFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\PhpUnit\PhpUnitFqcnAnnotationFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/PhpUnit/PhpUnitFqcnAnnotationFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
