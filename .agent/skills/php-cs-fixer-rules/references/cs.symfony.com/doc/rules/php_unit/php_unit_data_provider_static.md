---
title: "Rule php_unit_data_provider_static - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_static"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `php_unit_data_provider_static`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_static.html#rule-php-unit-data-provider-static "Permalink to this heading")

Data providers must be static.

## Warnings[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_static.html#warnings "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_static.html#this-rule-is-risky "Permalink to this heading")

Fixer could be risky if one is calling data provider function dynamically.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_static.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `force`.

## Configuration[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_static.html#configuration "Permalink to this heading")

### `force`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_static.html#force "Permalink to this heading")

Whether to make the data providers static even if they have a dynamic class call
(may introduce fatal error “using $this when not in object context”, and you may
have to adjust the code manually by converting dynamic calls to static ones).

Allowed types: `bool`

Default value: `false`

## Examples[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_static.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_static.html#example-1 "Permalink to this heading")

*Default* configuration.

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
+    public static function provideSomethingCases() {}
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_static.html#example-2 "Permalink to this heading")

With configuration: `['force' => true]`.

```
--- Original
+++ New
 <?php
 class FooTest extends TestCase {
     /**
      * @dataProvider provideSomethingCases1
      * @dataProvider provideSomethingCases2
      */
     public function testSomething($expected, $actual) {}
-    public function provideSomethingCases1() { $this->getData1(); }
-    public function provideSomethingCases2() { self::getData2(); }
+    public static function provideSomethingCases1() { $this->getData1(); }
+    public static function provideSomethingCases2() { self::getData2(); }
 }
```

### Example #3[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_static.html#example-3 "Permalink to this heading")

With configuration: `['force' => false]`.

```
--- Original
+++ New
 <?php
 class FooTest extends TestCase {
     /**
      * @dataProvider provideSomething1Cases
      * @dataProvider provideSomething2Cases
      */
     public function testSomething($expected, $actual) {}
     public function provideSomething1Cases() { $this->getData1(); }
-    public function provideSomething2Cases() { self::getData2(); }
+    public static function provideSomething2Cases() { self::getData2(); }
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_static.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PHPUnit10x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit10x0MigrationRisky.html) with config:

  `['force' => true]`
* [@PHPUnit11x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit11x0MigrationRisky.html) with config:

  `['force' => true]`
* [@PHPUnit100Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit100MigrationRisky.html) *(deprecated)* with config:

  `['force' => true]`
* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html) with config:

  `['force' => true]`

## References[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_static.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\PhpUnit\PhpUnitDataProviderStaticFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/PhpUnit/PhpUnitDataProviderStaticFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\PhpUnit\PhpUnitDataProviderStaticFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/PhpUnit/PhpUnitDataProviderStaticFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
