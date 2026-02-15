---
title: "Rule php_unit_assert_new_names - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/php_unit/php_unit_assert_new_names"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `php_unit_assert_new_names`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_assert_new_names.html#rule-php-unit-assert-new-names "Permalink to this heading")

Rename deprecated PHPUnit assertions like `assertFileNotExists` to new methods
like `assertFileDoesNotExist`.

## Warning[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_assert_new_names.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_assert_new_names.html#this-rule-is-risky "Permalink to this heading")

Fixer could be risky if one is overriding PHPUnit’s native methods.

## Examples[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_assert_new_names.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_assert_new_names.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 final class MyTest extends \PHPUnit_Framework_TestCase
 {
     public function testSomeTest()
     {
-        $this->assertFileNotExists("test.php");
-        $this->assertNotIsWritable("path.php");
+        $this->assertFileDoesNotExist("test.php");
+        $this->assertIsNotWritable("path.php");
     }
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_assert_new_names.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PHPUnit9x1Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit9x1MigrationRisky.html)
* [@PHPUnit10x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit10x0MigrationRisky.html)
* [@PHPUnit11x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit11x0MigrationRisky.html)
* [@PHPUnit91Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit91MigrationRisky.html) *(deprecated)*
* [@PHPUnit100Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit100MigrationRisky.html) *(deprecated)*

## References[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_assert_new_names.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\PhpUnit\PhpUnitAssertNewNamesFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/PhpUnit/PhpUnitAssertNewNamesFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\PhpUnit\PhpUnitAssertNewNamesFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/PhpUnit/PhpUnitAssertNewNamesFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
