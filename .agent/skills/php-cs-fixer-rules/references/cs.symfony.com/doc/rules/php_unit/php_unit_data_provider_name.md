---
title: "Rule php_unit_data_provider_name - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_name"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `php_unit_data_provider_name`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_name.html#rule-php-unit-data-provider-name "Permalink to this heading")

Data provider names must match the name of the test.

## Warnings[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_name.html#warnings "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_name.html#this-rule-is-risky "Permalink to this heading")

Fixer could be risky if one is calling data provider by name as function.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_name.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `prefix`, `suffix`.

## Configuration[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_name.html#configuration "Permalink to this heading")

### `prefix`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_name.html#prefix "Permalink to this heading")

Prefix that replaces “test”.

Allowed types: `string`

Default value: `'provide'`

### `suffix`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_name.html#suffix "Permalink to this heading")

Suffix to be present at the end.

Allowed types: `string`

Default value: `'Cases'`

## Examples[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_name.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_name.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 class FooTest extends TestCase {
     /**
-     * @dataProvider dataProvider
+     * @dataProvider provideSomethingCases
      */
     public function testSomething($expected, $actual) {}
-    public function dataProvider() {}
+    public function provideSomethingCases() {}
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_name.html#example-2 "Permalink to this heading")

With configuration: `['prefix' => 'data_', 'suffix' => '']`.

```
--- Original
+++ New
 <?php
 class FooTest extends TestCase {
     /**
-     * @dataProvider dt_prvdr_ftr
+     * @dataProvider data_feature
      */
     public function test_feature($expected, $actual) {}
-    public function dt_prvdr_ftr() {}
+    public function data_feature() {}
 }
```

### Example #3[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_name.html#example-3 "Permalink to this heading")

With configuration: `['prefix' => 'provides', 'suffix' => 'Data']`.

```
--- Original
+++ New
 <?php
 class FooTest extends TestCase {
     /**
      * @dataProvider dataProviderUsedInMultipleTests
      */
     public function testA($expected, $actual) {}
     /**
      * @dataProvider dataProviderUsedInMultipleTests
      */
     public function testB($expected, $actual) {}
     /**
-     * @dataProvider dataProviderUsedInSingleTest
+     * @dataProvider providesCData
      */
     public function testC($expected, $actual) {}
     /**
      * @dataProvider dataProviderUsedAsFirstInTest
      * @dataProvider dataProviderUsedAsSecondInTest
      */
     public function testD($expected, $actual) {}

     public function dataProviderUsedInMultipleTests() {}
-    public function dataProviderUsedInSingleTest() {}
+    public function providesCData() {}
     public function dataProviderUsedAsFirstInTest() {}
     public function dataProviderUsedAsSecondInTest() {}
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_name.html#rule-sets "Permalink to this heading")

The rule is part of the following rule set:

* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_name.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\PhpUnit\PhpUnitDataProviderNameFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/PhpUnit/PhpUnitDataProviderNameFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\PhpUnit\PhpUnitDataProviderNameFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/PhpUnit/PhpUnitDataProviderNameFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
