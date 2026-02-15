---
title: "Rule php_unit_test_case_static_method_calls - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/php_unit/php_unit_test_case_static_method_calls"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `php_unit_test_case_static_method_calls`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_test_case_static_method_calls.html#rule-php-unit-test-case-static-method-calls "Permalink to this heading")

Calls to `PHPUnit\Framework\TestCase` static methods (like assertions) must
all be of the same type, either `$this->`, `self::` or `static::`.

## Warnings[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_test_case_static_method_calls.html#warnings "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_test_case_static_method_calls.html#this-rule-is-risky "Permalink to this heading")

Risky when PHPUnit methods are overridden or not accessible, or when project has
PHPUnit incompatibilities.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_test_case_static_method_calls.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `call_type`,
`methods`, `target`.

## Configuration[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_test_case_static_method_calls.html#configuration "Permalink to this heading")

### `call_type`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_test_case_static_method_calls.html#call-type "Permalink to this heading")

The call type to use for referring to PHPUnit methods.

Allowed values: `'self'`, `'static'` and `'this'`

Default value: `'static'`

Default value (future-mode): `'this'`

### `methods`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_test_case_static_method_calls.html#methods "Permalink to this heading")

Dictionary of `method` => `call_type` values that differ from the default
strategy.

Allowed types: `array<string, string>`

Default value: `[]`

### `target`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_test_case_static_method_calls.html#target "Permalink to this heading")

Target version of PHPUnit.

Allowed values: `'10.0'`, `'11.0'` and `'newest'`

Default value: `'10.0'`

Default value (future-mode): `'newest'`

## Examples[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_test_case_static_method_calls.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_test_case_static_method_calls.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 final class MyTest extends \PHPUnit_Framework_TestCase
 {
     public function testMe()
     {
-        $this->assertSame(1, 2);
-        self::assertSame(1, 2);
+        static::assertSame(1, 2);
+        static::assertSame(1, 2);
         static::assertSame(1, 2);
         static::assertTrue(false);
     }
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_test_case_static_method_calls.html#example-2 "Permalink to this heading")

With configuration: `['call_type' => 'this']`.

```
--- Original
+++ New
 <?php
 final class MyTest extends \PHPUnit_Framework_TestCase
 {
     public function testMe()
     {
         $this->assertSame(1, 2);
-        self::assertSame(1, 2);
-        static::assertSame(1, 2);
-        static::assertTrue(false);
+        $this->assertSame(1, 2);
+        $this->assertSame(1, 2);
+        $this->assertTrue(false);
     }
 }
```

### Example #3[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_test_case_static_method_calls.html#example-3 "Permalink to this heading")

With configuration: `['methods' => ['assertTrue' => 'this']]`.

```
--- Original
+++ New
 <?php
 final class MyTest extends \PHPUnit_Framework_TestCase
 {
     public function testMe()
     {
-        $this->assertSame(1, 2);
-        self::assertSame(1, 2);
         static::assertSame(1, 2);
-        static::assertTrue(false);
+        static::assertSame(1, 2);
+        static::assertSame(1, 2);
+        $this->assertTrue(false);
     }
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_test_case_static_method_calls.html#rule-sets "Permalink to this heading")

The rule is part of the following rule set:

* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html) with config:

  `['call_type' => 'self']`

## References[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_test_case_static_method_calls.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\PhpUnit\PhpUnitTestCaseStaticMethodCallsFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/PhpUnit/PhpUnitTestCaseStaticMethodCallsFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\PhpUnit\PhpUnitTestCaseStaticMethodCallsFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/PhpUnit/PhpUnitTestCaseStaticMethodCallsFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
