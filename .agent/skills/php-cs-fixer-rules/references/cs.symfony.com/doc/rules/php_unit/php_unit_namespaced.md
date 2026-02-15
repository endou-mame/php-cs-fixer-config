---
title: "Rule php_unit_namespaced - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/php_unit/php_unit_namespaced"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `php_unit_namespaced`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_namespaced.html#rule-php-unit-namespaced "Permalink to this heading")

PHPUnit classes MUST be used in namespaced version, e.g.
`\PHPUnit\Framework\TestCase` instead of `\PHPUnit_Framework_TestCase`.

## Description[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_namespaced.html#description "Permalink to this heading")

PHPUnit v6 has finally fully switched to namespaces.
You could start preparing the upgrade by switching from non-namespaced TestCase
to namespaced one.
Forward compatibility layer (`\PHPUnit\Framework\TestCase` class) was
backported to PHPUnit v4.8.35 and PHPUnit v5.4.0.
Extended forward compatibility layer (`PHPUnit\Framework\Assert`,
`PHPUnit\Framework\BaseTestListener`, `PHPUnit\Framework\TestListener`
classes) was introduced in v5.7.0.

## Warnings[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_namespaced.html#warnings "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_namespaced.html#this-rule-is-risky "Permalink to this heading")

Risky when PHPUnit classes are overridden or not accessible, or when project has
PHPUnit incompatibilities.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_namespaced.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `target`.

## Configuration[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_namespaced.html#configuration "Permalink to this heading")

### `target`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_namespaced.html#target "Permalink to this heading")

Target version of PHPUnit.

Allowed values: `'4.8'`, `'5.7'`, `'6.0'` and `'newest'`

Default value: `'newest'`

## Examples[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_namespaced.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_namespaced.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-final class MyTest extends \PHPUnit_Framework_TestCase
+final class MyTest extends \PHPUnit\Framework\TestCase
 {
     public function testSomething()
     {
-        PHPUnit_Framework_Assert::assertTrue(true);
+        PHPUnit\Framework\Assert::assertTrue(true);
     }
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_namespaced.html#example-2 "Permalink to this heading")

With configuration: `['target' => '4.8']`.

```
--- Original
+++ New
 <?php
-final class MyTest extends \PHPUnit_Framework_TestCase
+final class MyTest extends \PHPUnit\Framework\TestCase
 {
     public function testSomething()
     {
         PHPUnit_Framework_Assert::assertTrue(true);
     }
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_namespaced.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PHPUnit4x8Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit4x8MigrationRisky.html) with config:

  `['target' => '4.8']`
* [@PHPUnit5x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit5x0MigrationRisky.html) with config:

  `['target' => '4.8']`
* [@PHPUnit5x2Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit5x2MigrationRisky.html) with config:

  `['target' => '4.8']`
* [@PHPUnit5x4Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit5x4MigrationRisky.html) with config:

  `['target' => '4.8']`
* [@PHPUnit5x5Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit5x5MigrationRisky.html) with config:

  `['target' => '4.8']`
* [@PHPUnit5x6Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit5x6MigrationRisky.html) with config:

  `['target' => '4.8']`
* [@PHPUnit5x7Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit5x7MigrationRisky.html) with config:

  `['target' => '5.7']`
* [@PHPUnit6x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit6x0MigrationRisky.html) with config:

  `['target' => '6.0']`
* [@PHPUnit7x5Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit7x5MigrationRisky.html) with config:

  `['target' => '6.0']`
* [@PHPUnit8x4Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit8x4MigrationRisky.html) with config:

  `['target' => '6.0']`
* [@PHPUnit9x1Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit9x1MigrationRisky.html) with config:

  `['target' => '6.0']`
* [@PHPUnit10x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit10x0MigrationRisky.html) with config:

  `['target' => '6.0']`
* [@PHPUnit11x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit11x0MigrationRisky.html) with config:

  `['target' => '6.0']`
* [@PHPUnit48Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit48MigrationRisky.html) *(deprecated)* with config:

  `['target' => '4.8']`
* [@PHPUnit50Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit50MigrationRisky.html) *(deprecated)* with config:

  `['target' => '4.8']`
* [@PHPUnit52Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit52MigrationRisky.html) *(deprecated)* with config:

  `['target' => '4.8']`
* [@PHPUnit54Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit54MigrationRisky.html) *(deprecated)* with config:

  `['target' => '4.8']`
* [@PHPUnit55Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit55MigrationRisky.html) *(deprecated)* with config:

  `['target' => '4.8']`
* [@PHPUnit56Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit56MigrationRisky.html) *(deprecated)* with config:

  `['target' => '4.8']`
* [@PHPUnit57Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit57MigrationRisky.html) *(deprecated)* with config:

  `['target' => '5.7']`
* [@PHPUnit60Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit60MigrationRisky.html) *(deprecated)* with config:

  `['target' => '6.0']`
* [@PHPUnit75Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit75MigrationRisky.html) *(deprecated)* with config:

  `['target' => '6.0']`
* [@PHPUnit84Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit84MigrationRisky.html) *(deprecated)* with config:

  `['target' => '6.0']`
* [@PHPUnit91Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit91MigrationRisky.html) *(deprecated)* with config:

  `['target' => '6.0']`
* [@PHPUnit100Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit100MigrationRisky.html) *(deprecated)* with config:

  `['target' => '6.0']`

## References[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_namespaced.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\PhpUnit\PhpUnitNamespacedFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/PhpUnit/PhpUnitNamespacedFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\PhpUnit\PhpUnitNamespacedFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/PhpUnit/PhpUnitNamespacedFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
