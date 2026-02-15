---
title: "Rule php_unit_no_expectation_annotation - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/php_unit/php_unit_no_expectation_annotation"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `php_unit_no_expectation_annotation`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_no_expectation_annotation.html#rule-php-unit-no-expectation-annotation "Permalink to this heading")

Usages of `@expectedException*` annotations MUST be replaced by
`->setExpectedException*` methods.

## Warnings[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_no_expectation_annotation.html#warnings "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_no_expectation_annotation.html#this-rule-is-risky "Permalink to this heading")

Risky when PHPUnit classes are overridden or not accessible, or when project has
PHPUnit incompatibilities.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_no_expectation_annotation.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `target`,
`use_class_const`.

## Configuration[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_no_expectation_annotation.html#configuration "Permalink to this heading")

### `target`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_no_expectation_annotation.html#target "Permalink to this heading")

Target version of PHPUnit.

Allowed values: `'3.2'`, `'4.3'` and `'newest'`

Default value: `'newest'`

### `use_class_const`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_no_expectation_annotation.html#use-class-const "Permalink to this heading")

Use ::class notation.

Allowed types: `bool`

Default value: `true`

## Examples[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_no_expectation_annotation.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_no_expectation_annotation.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 final class MyTest extends \PHPUnit_Framework_TestCase
 {
     /**
-     * @expectedException FooException
-     * @expectedExceptionMessageRegExp /foo.*$/
-     * @expectedExceptionCode 123
      */
     function testAaa()
     {
+        $this->setExpectedExceptionRegExp(\FooException::class, '/foo.*$/', 123);
+
         aaa();
     }
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_no_expectation_annotation.html#example-2 "Permalink to this heading")

With configuration: `['target' => '3.2']`.

```
--- Original
+++ New
 <?php
 final class MyTest extends \PHPUnit_Framework_TestCase
 {
     /**
-     * @expectedException FooException
-     * @expectedExceptionCode 123
      */
     function testBbb()
     {
+        $this->setExpectedException(\FooException::class, null, 123);
+
         bbb();
     }

     /**
      * @expectedException FooException
      * @expectedExceptionMessageRegExp /foo.*$/
      */
     function testCcc()
     {
         ccc();
     }
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_no_expectation_annotation.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PHPUnit3x2Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit3x2MigrationRisky.html) with config:

  `['target' => '3.2']`
* [@PHPUnit3x5Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit3x5MigrationRisky.html) with config:

  `['target' => '3.2']`
* [@PHPUnit4x3Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit4x3MigrationRisky.html) with config:

  `['target' => '4.3']`
* [@PHPUnit4x8Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit4x8MigrationRisky.html) with config:

  `['target' => '4.3']`
* [@PHPUnit5x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit5x0MigrationRisky.html) with config:

  `['target' => '4.3']`
* [@PHPUnit5x2Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit5x2MigrationRisky.html) with config:

  `['target' => '4.3']`
* [@PHPUnit5x4Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit5x4MigrationRisky.html) with config:

  `['target' => '4.3']`
* [@PHPUnit5x5Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit5x5MigrationRisky.html) with config:

  `['target' => '4.3']`
* [@PHPUnit5x6Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit5x6MigrationRisky.html) with config:

  `['target' => '4.3']`
* [@PHPUnit5x7Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit5x7MigrationRisky.html) with config:

  `['target' => '4.3']`
* [@PHPUnit6x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit6x0MigrationRisky.html) with config:

  `['target' => '4.3']`
* [@PHPUnit7x5Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit7x5MigrationRisky.html) with config:

  `['target' => '4.3']`
* [@PHPUnit8x4Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit8x4MigrationRisky.html) with config:

  `['target' => '4.3']`
* [@PHPUnit9x1Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit9x1MigrationRisky.html) with config:

  `['target' => '4.3']`
* [@PHPUnit10x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit10x0MigrationRisky.html) with config:

  `['target' => '4.3']`
* [@PHPUnit11x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit11x0MigrationRisky.html) with config:

  `['target' => '4.3']`
* [@PHPUnit32Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit32MigrationRisky.html) *(deprecated)* with config:

  `['target' => '3.2']`
* [@PHPUnit35Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit35MigrationRisky.html) *(deprecated)* with config:

  `['target' => '3.2']`
* [@PHPUnit43Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit43MigrationRisky.html) *(deprecated)* with config:

  `['target' => '4.3']`
* [@PHPUnit48Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit48MigrationRisky.html) *(deprecated)* with config:

  `['target' => '4.3']`
* [@PHPUnit50Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit50MigrationRisky.html) *(deprecated)* with config:

  `['target' => '4.3']`
* [@PHPUnit52Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit52MigrationRisky.html) *(deprecated)* with config:

  `['target' => '4.3']`
* [@PHPUnit54Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit54MigrationRisky.html) *(deprecated)* with config:

  `['target' => '4.3']`
* [@PHPUnit55Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit55MigrationRisky.html) *(deprecated)* with config:

  `['target' => '4.3']`
* [@PHPUnit56Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit56MigrationRisky.html) *(deprecated)* with config:

  `['target' => '4.3']`
* [@PHPUnit57Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit57MigrationRisky.html) *(deprecated)* with config:

  `['target' => '4.3']`
* [@PHPUnit60Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit60MigrationRisky.html) *(deprecated)* with config:

  `['target' => '4.3']`
* [@PHPUnit75Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit75MigrationRisky.html) *(deprecated)* with config:

  `['target' => '4.3']`
* [@PHPUnit84Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit84MigrationRisky.html) *(deprecated)* with config:

  `['target' => '4.3']`
* [@PHPUnit91Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit91MigrationRisky.html) *(deprecated)* with config:

  `['target' => '4.3']`
* [@PHPUnit100Migration:risky](https://cs.symfony.com/doc/ruleSets/PHPUnit100MigrationRisky.html) *(deprecated)* with config:

  `['target' => '4.3']`

## References[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_no_expectation_annotation.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\PhpUnit\PhpUnitNoExpectationAnnotationFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/PhpUnit/PhpUnitNoExpectationAnnotationFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\PhpUnit\PhpUnitNoExpectationAnnotationFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/PhpUnit/PhpUnitNoExpectationAnnotationFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
