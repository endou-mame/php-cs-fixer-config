---
title: "Rule php_unit_mock - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/php_unit/php_unit_mock"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `php_unit_mock`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_mock.html#rule-php-unit-mock "Permalink to this heading")

Usages of `->getMock` and `->getMockWithoutInvokingTheOriginalConstructor`
methods MUST be replaced by `->createMock` or `->createPartialMock` methods.

## Warnings[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_mock.html#warnings "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_mock.html#this-rule-is-risky "Permalink to this heading")

Risky when PHPUnit classes are overridden or not accessible, or when project has
PHPUnit incompatibilities.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_mock.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `target`.

## Configuration[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_mock.html#configuration "Permalink to this heading")

### `target`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_mock.html#target "Permalink to this heading")

Target version of PHPUnit.

Allowed values: `'5.4'`, `'5.5'` and `'newest'`

Default value: `'newest'`

## Examples[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_mock.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_mock.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 final class MyTest extends \PHPUnit_Framework_TestCase
 {
     public function testFoo()
     {
-        $mock = $this->getMockWithoutInvokingTheOriginalConstructor("Foo");
-        $mock1 = $this->getMock("Foo");
-        $mock1 = $this->getMock("Bar", ["aaa"]);
+        $mock = $this->createMock("Foo");
+        $mock1 = $this->createMock("Foo");
+        $mock1 = $this->createPartialMock("Bar", ["aaa"]);
         $mock1 = $this->getMock("Baz", ["aaa"], ["argument"]); // version with more than 2 params is not supported
     }
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_mock.html#example-2 "Permalink to this heading")

With configuration: `['target' => '5.4']`.

```
--- Original
+++ New
 <?php
 final class MyTest extends \PHPUnit_Framework_TestCase
 {
     public function testFoo()
     {
-        $mock1 = $this->getMock("Foo");
+        $mock1 = $this->createMock("Foo");
         $mock1 = $this->getMock("Bar", ["aaa"]); // version with multiple params is not supported
     }
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_mock.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PHPUnit5x4Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit5x4MigrationRisky.html) with config:

  `['target' => '5.4']`
* [@PHPUnit5x5Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit5x5MigrationRisky.html) with config:

  `['target' => '5.5']`
* [@PHPUnit5x6Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit5x6MigrationRisky.html) with config:

  `['target' => '5.5']`
* [@PHPUnit5x7Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit5x7MigrationRisky.html) with config:

  `['target' => '5.5']`
* [@PHPUnit6x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit6x0MigrationRisky.html) with config:

  `['target' => '5.5']`
* [@PHPUnit7x5Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit7x5MigrationRisky.html) with config:

  `['target' => '5.5']`
* [@PHPUnit8x4Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit8x4MigrationRisky.html) with config:

  `['target' => '5.5']`
* [@PHPUnit9x1Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit9x1MigrationRisky.html) with config:

  `['target' => '5.5']`
* [@PHPUnit10x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit10x0MigrationRisky.html) with config:

  `['target' => '5.5']`
* [@PHPUnit11x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit11x0MigrationRisky.html) with config:

  `['target' => '5.5']`
* [@PHPUnit54Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit54MigrationRisky.html) *(deprecated)* with config:

  `['target' => '5.4']`
* [@PHPUnit55Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit55MigrationRisky.html) *(deprecated)* with config:

  `['target' => '5.5']`
* [@PHPUnit56Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit56MigrationRisky.html) *(deprecated)* with config:

  `['target' => '5.5']`
* [@PHPUnit57Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit57MigrationRisky.html) *(deprecated)* with config:

  `['target' => '5.5']`
* [@PHPUnit60Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit60MigrationRisky.html) *(deprecated)* with config:

  `['target' => '5.5']`
* [@PHPUnit75Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit75MigrationRisky.html) *(deprecated)* with config:

  `['target' => '5.5']`
* [@PHPUnit84Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit84MigrationRisky.html) *(deprecated)* with config:

  `['target' => '5.5']`
* [@PHPUnit91Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit91MigrationRisky.html) *(deprecated)* with config:

  `['target' => '5.5']`
* [@PHPUnit100Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit100MigrationRisky.html) *(deprecated)* with config:

  `['target' => '5.5']`

## References[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_mock.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\PhpUnit\PhpUnitMockFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/PhpUnit/PhpUnitMockFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\PhpUnit\PhpUnitMockFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/PhpUnit/PhpUnitMockFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
