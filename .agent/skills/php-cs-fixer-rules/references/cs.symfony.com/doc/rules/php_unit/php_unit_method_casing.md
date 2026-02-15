---
title: "Rule php_unit_method_casing - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/php_unit/php_unit_method_casing"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `php_unit_method_casing`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_method_casing.html#rule-php-unit-method-casing "Permalink to this heading")

Enforce camel (or snake) case for PHPUnit test methods, following configuration.

## Warning[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_method_casing.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_method_casing.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `case`.

## Configuration[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_method_casing.html#configuration "Permalink to this heading")

### `case`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_method_casing.html#case "Permalink to this heading")

Apply camel or snake case to test methods.

Allowed values: `'camel_case'` and `'snake_case'`

Default value: `'camel_case'`

## Examples[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_method_casing.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_method_casing.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 class MyTest extends \PhpUnit\FrameWork\TestCase
 {
-    public function test_my_code() {}
+    public function testMyCode() {}
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_method_casing.html#example-2 "Permalink to this heading")

With configuration: `['case' => 'snake_case']`.

```
--- Original
+++ New
 <?php
 class MyTest extends \PhpUnit\FrameWork\TestCase
 {
-    public function testMyCode() {}
+    public function test_my_code() {}
 }
```

### Example #3[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_method_casing.html#example-3 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 use \PHPUnit\Framework\Attributes\Test;
 class MyTest extends \PhpUnit\FrameWork\TestCase
 {
     #[PHPUnit\Framework\Attributes\Test]
-    public function test_my_code() {}
+    public function testMyCode() {}
 }
```

### Example #4[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_method_casing.html#example-4 "Permalink to this heading")

With configuration: `['case' => 'snake_case']`.

```
--- Original
+++ New
 <?php
 use \PHPUnit\Framework\Attributes\Test;
 class MyTest extends \PhpUnit\FrameWork\TestCase
 {
     #[PHPUnit\Framework\Attributes\Test]
-    public function testMyCode() {}
+    public function test_my_code() {}
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_method_casing.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_method_casing.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\PhpUnit\PhpUnitMethodCasingFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/PhpUnit/PhpUnitMethodCasingFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\PhpUnit\PhpUnitMethodCasingFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/PhpUnit/PhpUnitMethodCasingFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
