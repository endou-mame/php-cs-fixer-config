---
title: "Rule php_unit_dedicate_assert - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/php_unit/php_unit_dedicate_assert"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `php_unit_dedicate_assert`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_dedicate_assert.html#rule-php-unit-dedicate-assert "Permalink to this heading")

PHPUnit assertions like `assertInternalType`, `assertFileExists`, should be
used over `assertTrue`.

## Warnings[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_dedicate_assert.html#warnings "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_dedicate_assert.html#this-rule-is-risky "Permalink to this heading")

Fixer could be risky if one is overriding PHPUnit’s native methods.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_dedicate_assert.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `target`.

## Configuration[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_dedicate_assert.html#configuration "Permalink to this heading")

### `target`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_dedicate_assert.html#target "Permalink to this heading")

Target version of PHPUnit.

Allowed values: `'3.0'`, `'3.5'`, `'5.0'`, `'5.6'` and `'newest'`

Default value: `'newest'`

## Examples[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_dedicate_assert.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_dedicate_assert.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 final class MyTest extends \PHPUnit_Framework_TestCase
 {
     public function testSomeTest()
     {
-        $this->assertTrue(is_float( $a), "my message");
-        $this->assertTrue(is_nan($a));
+        $this->assertInternalType('float', $a, "my message");
+        $this->assertNan($a);
     }
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_dedicate_assert.html#example-2 "Permalink to this heading")

With configuration: `['target' => '5.6']`.

```
--- Original
+++ New
 <?php
 final class MyTest extends \PHPUnit_Framework_TestCase
 {
     public function testSomeTest()
     {
-        $this->assertTrue(is_dir($a));
-        $this->assertTrue(is_writable($a));
-        $this->assertTrue(is_readable($a));
+        $this->assertDirectoryExists($a);
+        $this->assertIsWritable($a);
+        $this->assertIsReadable($a);
     }
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_dedicate_assert.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PHPUnit3x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit3x0MigrationRisky.html) with config:

  `['target' => '3.0']`
* [@PHPUnit3x2Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit3x2MigrationRisky.html) with config:

  `['target' => '3.0']`
* [@PHPUnit3x5Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit3x5MigrationRisky.html) with config:

  `['target' => '3.5']`
* [@PHPUnit4x3Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit4x3MigrationRisky.html) with config:

  `['target' => '3.5']`
* [@PHPUnit4x8Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit4x8MigrationRisky.html) with config:

  `['target' => '3.5']`
* [@PHPUnit5x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit5x0MigrationRisky.html) with config:

  `['target' => '5.0']`
* [@PHPUnit5x2Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit5x2MigrationRisky.html) with config:

  `['target' => '5.0']`
* [@PHPUnit5x4Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit5x4MigrationRisky.html) with config:

  `['target' => '5.0']`
* [@PHPUnit5x5Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit5x5MigrationRisky.html) with config:

  `['target' => '5.0']`
* [@PHPUnit5x6Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit5x6MigrationRisky.html) with config:

  `['target' => '5.6']`
* [@PHPUnit5x7Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit5x7MigrationRisky.html) with config:

  `['target' => '5.6']`
* [@PHPUnit6x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit6x0MigrationRisky.html) with config:

  `['target' => '5.6']`
* [@PHPUnit7x5Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit7x5MigrationRisky.html) with config:

  `['target' => '5.6']`
* [@PHPUnit8x4Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit8x4MigrationRisky.html) with config:

  `['target' => '5.6']`
* [@PHPUnit9x1Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit9x1MigrationRisky.html) with config:

  `['target' => '5.6']`
* [@PHPUnit10x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit10x0MigrationRisky.html) with config:

  `['target' => '5.6']`
* [@PHPUnit11x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit11x0MigrationRisky.html) with config:

  `['target' => '5.6']`
* [@PHPUnit30Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit30MigrationRisky.html) *(deprecated)* with config:

  `['target' => '3.0']`
* [@PHPUnit32Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit32MigrationRisky.html) *(deprecated)* with config:

  `['target' => '3.0']`
* [@PHPUnit35Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit35MigrationRisky.html) *(deprecated)* with config:

  `['target' => '3.5']`
* [@PHPUnit43Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit43MigrationRisky.html) *(deprecated)* with config:

  `['target' => '3.5']`
* [@PHPUnit48Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit48MigrationRisky.html) *(deprecated)* with config:

  `['target' => '3.5']`
* [@PHPUnit50Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit50MigrationRisky.html) *(deprecated)* with config:

  `['target' => '5.0']`
* [@PHPUnit52Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit52MigrationRisky.html) *(deprecated)* with config:

  `['target' => '5.0']`
* [@PHPUnit54Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit54MigrationRisky.html) *(deprecated)* with config:

  `['target' => '5.0']`
* [@PHPUnit55Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit55MigrationRisky.html) *(deprecated)* with config:

  `['target' => '5.0']`
* [@PHPUnit56Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit56MigrationRisky.html) *(deprecated)* with config:

  `['target' => '5.6']`
* [@PHPUnit57Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit57MigrationRisky.html) *(deprecated)* with config:

  `['target' => '5.6']`
* [@PHPUnit60Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit60MigrationRisky.html) *(deprecated)* with config:

  `['target' => '5.6']`
* [@PHPUnit75Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit75MigrationRisky.html) *(deprecated)* with config:

  `['target' => '5.6']`
* [@PHPUnit84Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit84MigrationRisky.html) *(deprecated)* with config:

  `['target' => '5.6']`
* [@PHPUnit91Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit91MigrationRisky.html) *(deprecated)* with config:

  `['target' => '5.6']`
* [@PHPUnit100Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit100MigrationRisky.html) *(deprecated)* with config:

  `['target' => '5.6']`

## References[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_dedicate_assert.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\PhpUnit\PhpUnitDedicateAssertFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/PhpUnit/PhpUnitDedicateAssertFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\PhpUnit\PhpUnitDedicateAssertFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/PhpUnit/PhpUnitDedicateAssertFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
