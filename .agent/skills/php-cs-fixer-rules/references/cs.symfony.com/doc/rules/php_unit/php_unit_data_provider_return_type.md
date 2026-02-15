---
title: "Rule php_unit_data_provider_return_type - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_return_type"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `php_unit_data_provider_return_type`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_return_type.html#rule-php-unit-data-provider-return-type "Permalink to this heading")

The return type of PHPUnit data provider must be `iterable`.

## Description[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_return_type.html#description "Permalink to this heading")

Data provider must return `iterable`, either an array of arrays or an object
that implements the `Traversable` interface.

## Warning[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_return_type.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_return_type.html#this-rule-is-risky "Permalink to this heading")

Risky when relying on signature of the data provider.

## Examples[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_return_type.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_return_type.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 class FooTest extends TestCase {
     /**
      * @dataProvider provideSomethingCases
      */
     public function testSomething($expected, $actual) {}
-    public function provideSomethingCases(): array {}
+    public function provideSomethingCases(): iterable {}
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_return_type.html#example-2 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 class FooTest extends TestCase {
     /**
      * @dataProvider provideSomethingCases
      */
     public function testSomething($expected, $actual) {}
-    public function provideSomethingCases() {}
+    public function provideSomethingCases(): iterable {}
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_return_type.html#rule-sets "Permalink to this heading")

The rule is part of the following rule set:

* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_return_type.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\PhpUnit\PhpUnitDataProviderReturnTypeFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/PhpUnit/PhpUnitDataProviderReturnTypeFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\PhpUnit\PhpUnitDataProviderReturnTypeFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/PhpUnit/PhpUnitDataProviderReturnTypeFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
