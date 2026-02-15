---
title: "Rule php_unit_test_class_requires_covers - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/php_unit/php_unit_test_class_requires_covers"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `php_unit_test_class_requires_covers`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_test_class_requires_covers.html#rule-php-unit-test-class-requires-covers "Permalink to this heading")

Adds a default `@coversNothing` annotation to PHPUnit test classes that have
no `@covers*` annotation.

## Examples[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_test_class_requires_covers.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_test_class_requires_covers.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
+
+/**
+ * @coversNothing
+ */
 final class MyTest extends \PHPUnit_Framework_TestCase
 {
     public function testSomeTest()
     {
         $this->assertSame(a(), b());
     }
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_test_class_requires_covers.html#rule-sets "Permalink to this heading")

The rule is part of the following rule set:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)

## References[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_test_class_requires_covers.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\PhpUnit\PhpUnitTestClassRequiresCoversFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/PhpUnit/PhpUnitTestClassRequiresCoversFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\PhpUnit\PhpUnitTestClassRequiresCoversFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/PhpUnit/PhpUnitTestClassRequiresCoversFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
