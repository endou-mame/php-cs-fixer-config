---
title: "Rule php_unit_dedicate_assert_internal_type - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/php_unit/php_unit_dedicate_assert_internal_type"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `php_unit_dedicate_assert_internal_type`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_dedicate_assert_internal_type.html#rule-php-unit-dedicate-assert-internal-type "Permalink to this heading")

PHPUnit assertions like `assertIsArray` should be used over
`assertInternalType`.

## Warnings[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_dedicate_assert_internal_type.html#warnings "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_dedicate_assert_internal_type.html#this-rule-is-risky "Permalink to this heading")

Risky when PHPUnit methods are overridden or when project has PHPUnit
incompatibilities.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_dedicate_assert_internal_type.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `target`.

## Configuration[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_dedicate_assert_internal_type.html#configuration "Permalink to this heading")

### `target`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_dedicate_assert_internal_type.html#target "Permalink to this heading")

Target version of PHPUnit.

Allowed values: `'7.5'` and `'newest'`

Default value: `'newest'`

## Examples[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_dedicate_assert_internal_type.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_dedicate_assert_internal_type.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 final class MyTest extends \PHPUnit\Framework\TestCase
 {
     public function testMe()
     {
-        $this->assertInternalType("array", $var);
-        $this->assertInternalType("boolean", $var);
+        $this->assertIsArray($var);
+        $this->assertIsBool($var);
     }
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_dedicate_assert_internal_type.html#example-2 "Permalink to this heading")

With configuration: `['target' => '7.5']`.

```
--- Original
+++ New
 <?php
 final class MyTest extends \PHPUnit\Framework\TestCase
 {
     public function testMe()
     {
-        $this->assertInternalType("array", $var);
-        $this->assertInternalType("boolean", $var);
+        $this->assertIsArray($var);
+        $this->assertIsBool($var);
     }
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_dedicate_assert_internal_type.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PHPUnit7x5Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit7x5MigrationRisky.html) with config:

  `['target' => '7.5']`
* [@PHPUnit8x4Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit8x4MigrationRisky.html) with config:

  `['target' => '7.5']`
* [@PHPUnit9x1Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit9x1MigrationRisky.html) with config:

  `['target' => '7.5']`
* [@PHPUnit10x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit10x0MigrationRisky.html) with config:

  `['target' => '7.5']`
* [@PHPUnit11x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit11x0MigrationRisky.html) with config:

  `['target' => '7.5']`
* [@PHPUnit75Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit75MigrationRisky.html) *(deprecated)* with config:

  `['target' => '7.5']`
* [@PHPUnit84Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit84MigrationRisky.html) *(deprecated)* with config:

  `['target' => '7.5']`
* [@PHPUnit91Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit91MigrationRisky.html) *(deprecated)* with config:

  `['target' => '7.5']`
* [@PHPUnit100Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit100MigrationRisky.html) *(deprecated)* with config:

  `['target' => '7.5']`

## References[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_dedicate_assert_internal_type.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\PhpUnit\PhpUnitDedicateAssertInternalTypeFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/PhpUnit/PhpUnitDedicateAssertInternalTypeFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\PhpUnit\PhpUnitDedicateAssertInternalTypeFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/PhpUnit/PhpUnitDedicateAssertInternalTypeFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
