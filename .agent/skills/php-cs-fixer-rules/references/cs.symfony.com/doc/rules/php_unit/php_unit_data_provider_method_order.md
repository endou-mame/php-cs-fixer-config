---
title: "Rule php_unit_data_provider_method_order - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_method_order"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `php_unit_data_provider_method_order`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_method_order.html#rule-php-unit-data-provider-method-order "Permalink to this heading")

Data provider method must be placed after/before the last/first test where used.

## Warning[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_method_order.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_method_order.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `placement`.

## Configuration[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_method_order.html#configuration "Permalink to this heading")

### `placement`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_method_order.html#placement "Permalink to this heading")

Where to place the data provider relative to the test where used.

Allowed values: `'after'` and `'before'`

Default value: `'after'`

## Examples[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_method_order.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_method_order.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 class FooTest extends TestCase {
-    public function dataProvider() {}
     /**
      * @dataProvider dataProvider
      */
     public function testSomething($expected, $actual) {}
+    public function dataProvider() {}
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_method_order.html#example-2 "Permalink to this heading")

With configuration: `['placement' => 'before']`.

```
--- Original
+++ New
 <?php
 class FooTest extends TestCase {
+    public function dataProvider() {}
     /**
      * @dataProvider dataProvider
      */
     public function testSomething($expected, $actual) {}
-    public function dataProvider() {}
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_method_order.html#rule-sets "Permalink to this heading")

The rule is part of the following rule set:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)

## References[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_method_order.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\PhpUnit\PhpUnitDataProviderMethodOrderFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/PhpUnit/PhpUnitDataProviderMethodOrderFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\PhpUnit\PhpUnitDataProviderMethodOrderFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/PhpUnit/PhpUnitDataProviderMethodOrderFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
