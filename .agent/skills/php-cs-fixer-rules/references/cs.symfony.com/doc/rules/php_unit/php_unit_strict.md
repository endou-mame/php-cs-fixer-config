---
title: "Rule php_unit_strict - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/php_unit/php_unit_strict"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `php_unit_strict`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_strict.html#rule-php-unit-strict "Permalink to this heading")

PHPUnit methods like `assertSame` should be used instead of `assertEquals`.

## Warnings[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_strict.html#warnings "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_strict.html#this-rule-is-risky "Permalink to this heading")

Risky when any of the functions are overridden or when testing object equality.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_strict.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `assertions`.

## Configuration[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_strict.html#configuration "Permalink to this heading")

### `assertions`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_strict.html#assertions "Permalink to this heading")

List of assertion methods to fix.

Allowed values: a subset of `['assertAttributeEquals', 'assertAttributeNotEquals', 'assertEquals', 'assertNotEquals']`

Default value: `['assertAttributeEquals', 'assertAttributeNotEquals', 'assertEquals', 'assertNotEquals']`

## Examples[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_strict.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_strict.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 final class MyTest extends \PHPUnit_Framework_TestCase
 {
     public function testSomeTest()
     {
-        $this->assertAttributeEquals(a(), b());
-        $this->assertAttributeNotEquals(a(), b());
-        $this->assertEquals(a(), b());
-        $this->assertNotEquals(a(), b());
+        $this->assertAttributeSame(a(), b());
+        $this->assertAttributeNotSame(a(), b());
+        $this->assertSame(a(), b());
+        $this->assertNotSame(a(), b());
     }
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_strict.html#example-2 "Permalink to this heading")

With configuration: `['assertions' => ['assertEquals']]`.

```
--- Original
+++ New
 <?php
 final class MyTest extends \PHPUnit_Framework_TestCase
 {
     public function testSomeTest()
     {
         $this->assertAttributeEquals(a(), b());
         $this->assertAttributeNotEquals(a(), b());
-        $this->assertEquals(a(), b());
+        $this->assertSame(a(), b());
         $this->assertNotEquals(a(), b());
     }
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_strict.html#rule-sets "Permalink to this heading")

The rule is part of the following rule set:

* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_strict.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\PhpUnit\PhpUnitStrictFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/PhpUnit/PhpUnitStrictFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\PhpUnit\PhpUnitStrictFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/PhpUnit/PhpUnitStrictFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
