---
title: "Rule php_unit_construct - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/php_unit/php_unit_construct"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `php_unit_construct`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_construct.html#rule-php-unit-construct "Permalink to this heading")

PHPUnit assertion method calls like `->assertSame(true, $foo)` should be
written with dedicated method like `->assertTrue($foo)`.

## Warnings[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_construct.html#warnings "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_construct.html#this-rule-is-risky "Permalink to this heading")

Fixer could be risky if one is overriding PHPUnit’s native methods.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_construct.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `assertions`.

## Configuration[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_construct.html#configuration "Permalink to this heading")

### `assertions`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_construct.html#assertions "Permalink to this heading")

List of assertion methods to fix.

Allowed values: a subset of `['assertEquals', 'assertNotEquals', 'assertNotSame', 'assertSame']`

Default value: `['assertEquals', 'assertNotEquals', 'assertNotSame', 'assertSame']`

## Examples[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_construct.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_construct.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 final class FooTest extends \PHPUnit_Framework_TestCase {
     public function testSomething() {
-        $this->assertEquals(false, $b);
-        $this->assertSame(true, $a);
-        $this->assertNotEquals(null, $c);
-        $this->assertNotSame(null, $d);
+        $this->assertFalse($b);
+        $this->assertTrue($a);
+        $this->assertNotNull($c);
+        $this->assertNotNull($d);
     }
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_construct.html#example-2 "Permalink to this heading")

With configuration: `['assertions' => ['assertSame', 'assertNotSame']]`.

```
--- Original
+++ New
 <?php
 final class FooTest extends \PHPUnit_Framework_TestCase {
     public function testSomething() {
         $this->assertEquals(false, $b);
-        $this->assertSame(true, $a);
+        $this->assertTrue($a);
         $this->assertNotEquals(null, $c);
-        $this->assertNotSame(null, $d);
+        $this->assertNotNull($d);
     }
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_construct.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)
* [@Symfony:risky](https://cs.symfony.com/doc/ruleSets/SymfonyRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_construct.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\PhpUnit\PhpUnitConstructFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/PhpUnit/PhpUnitConstructFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\PhpUnit\PhpUnitConstructFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/PhpUnit/PhpUnitConstructFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
