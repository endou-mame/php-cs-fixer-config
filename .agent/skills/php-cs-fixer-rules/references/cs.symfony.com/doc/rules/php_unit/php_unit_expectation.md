---
title: "Rule php_unit_expectation - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/php_unit/php_unit_expectation"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `php_unit_expectation`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_expectation.html#rule-php-unit-expectation "Permalink to this heading")

Usages of `->setExpectedException*` methods MUST be replaced by
`->expectException*` methods.

## Warnings[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_expectation.html#warnings "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_expectation.html#this-rule-is-risky "Permalink to this heading")

Risky when PHPUnit classes are overridden or not accessible, or when project has
PHPUnit incompatibilities.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_expectation.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `target`.

## Configuration[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_expectation.html#configuration "Permalink to this heading")

### `target`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_expectation.html#target "Permalink to this heading")

Target version of PHPUnit.

Allowed values: `'5.2'`, `'5.6'`, `'8.4'` and `'newest'`

Default value: `'newest'`

## Examples[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_expectation.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_expectation.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 final class MyTest extends \PHPUnit_Framework_TestCase
 {
     public function testFoo()
     {
-        $this->setExpectedException("RuntimeException", "Msg", 123);
+        $this->expectException("RuntimeException");
+        $this->expectExceptionMessage("Msg");
+        $this->expectExceptionCode(123);
         foo();
     }

     public function testBar()
     {
-        $this->setExpectedExceptionRegExp("RuntimeException", "/Msg.*/", 123);
+        $this->expectException("RuntimeException");
+        $this->expectExceptionMessageMatches("/Msg.*/");
+        $this->expectExceptionCode(123);
         bar();
     }
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_expectation.html#example-2 "Permalink to this heading")

With configuration: `['target' => '8.4']`.

```
--- Original
+++ New
 <?php
 final class MyTest extends \PHPUnit_Framework_TestCase
 {
     public function testFoo()
     {
-        $this->setExpectedException("RuntimeException", null, 123);
+        $this->expectException("RuntimeException");
+        $this->expectExceptionCode(123);
         foo();
     }

     public function testBar()
     {
-        $this->setExpectedExceptionRegExp("RuntimeException", "/Msg.*/", 123);
+        $this->expectException("RuntimeException");
+        $this->expectExceptionMessageMatches("/Msg.*/");
+        $this->expectExceptionCode(123);
         bar();
     }
 }
```

### Example #3[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_expectation.html#example-3 "Permalink to this heading")

With configuration: `['target' => '5.6']`.

```
--- Original
+++ New
 <?php
 final class MyTest extends \PHPUnit_Framework_TestCase
 {
     public function testFoo()
     {
-        $this->setExpectedException("RuntimeException", null, 123);
+        $this->expectException("RuntimeException");
+        $this->expectExceptionCode(123);
         foo();
     }

     public function testBar()
     {
-        $this->setExpectedExceptionRegExp("RuntimeException", "/Msg.*/", 123);
+        $this->expectException("RuntimeException");
+        $this->expectExceptionMessageRegExp("/Msg.*/");
+        $this->expectExceptionCode(123);
         bar();
     }
 }
```

### Example #4[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_expectation.html#example-4 "Permalink to this heading")

With configuration: `['target' => '5.2']`.

```
--- Original
+++ New
 <?php
 final class MyTest extends \PHPUnit_Framework_TestCase
 {
     public function testFoo()
     {
-        $this->setExpectedException("RuntimeException", "Msg", 123);
+        $this->expectException("RuntimeException");
+        $this->expectExceptionMessage("Msg");
+        $this->expectExceptionCode(123);
         foo();
     }

     public function testBar()
     {
         $this->setExpectedExceptionRegExp("RuntimeException", "/Msg.*/", 123);
         bar();
     }
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_expectation.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PHPUnit5x2Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit5x2MigrationRisky.html) with config:

  `['target' => '5.2']`
* [@PHPUnit5x4Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit5x4MigrationRisky.html) with config:

  `['target' => '5.2']`
* [@PHPUnit5x5Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit5x5MigrationRisky.html) with config:

  `['target' => '5.2']`
* [@PHPUnit5x6Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit5x6MigrationRisky.html) with config:

  `['target' => '5.6']`
* [@PHPUnit5x7Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit5x7MigrationRisky.html) with config:

  `['target' => '5.6']`
* [@PHPUnit6x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit6x0MigrationRisky.html) with config:

  `['target' => '5.6']`
* [@PHPUnit7x5Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit7x5MigrationRisky.html) with config:

  `['target' => '5.6']`
* [@PHPUnit8x4Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit8x4MigrationRisky.html) with config:

  `['target' => '8.4']`
* [@PHPUnit9x1Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit9x1MigrationRisky.html) with config:

  `['target' => '8.4']`
* [@PHPUnit10x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit10x0MigrationRisky.html) with config:

  `['target' => '8.4']`
* [@PHPUnit11x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit11x0MigrationRisky.html) with config:

  `['target' => '8.4']`
* [@PHPUnit52Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit52MigrationRisky.html) *(deprecated)* with config:

  `['target' => '5.2']`
* [@PHPUnit54Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit54MigrationRisky.html) *(deprecated)* with config:

  `['target' => '5.2']`
* [@PHPUnit55Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit55MigrationRisky.html) *(deprecated)* with config:

  `['target' => '5.2']`
* [@PHPUnit56Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit56MigrationRisky.html) *(deprecated)* with config:

  `['target' => '5.6']`
* [@PHPUnit57Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit57MigrationRisky.html) *(deprecated)* with config:

  `['target' => '5.6']`
* [@PHPUnit60Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit60MigrationRisky.html) *(deprecated)* with config:

  `['target' => '5.6']`
* [@PHPUnit75Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit75MigrationRisky.html) *(deprecated)* with config:

  `['target' => '5.6']`
* [@PHPUnit84Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit84MigrationRisky.html) *(deprecated)* with config:

  `['target' => '8.4']`
* [@PHPUnit91Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit91MigrationRisky.html) *(deprecated)* with config:

  `['target' => '8.4']`
* [@PHPUnit100Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit100MigrationRisky.html) *(deprecated)* with config:

  `['target' => '8.4']`

## References[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_expectation.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\PhpUnit\PhpUnitExpectationFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/PhpUnit/PhpUnitExpectationFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\PhpUnit\PhpUnitExpectationFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/PhpUnit/PhpUnitExpectationFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
