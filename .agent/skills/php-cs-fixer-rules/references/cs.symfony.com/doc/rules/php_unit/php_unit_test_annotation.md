---
title: "Rule php_unit_test_annotation - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/php_unit/php_unit_test_annotation"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `php_unit_test_annotation`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_test_annotation.html#rule-php-unit-test-annotation "Permalink to this heading")

Adds or removes @test annotations from tests, following configuration.

## Warnings[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_test_annotation.html#warnings "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_test_annotation.html#this-rule-is-risky "Permalink to this heading")

This fixer may change the name of your tests, and could cause incompatibility
with abstract classes or interfaces.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_test_annotation.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `style`.

## Configuration[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_test_annotation.html#configuration "Permalink to this heading")

### `style`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_test_annotation.html#style "Permalink to this heading")

Whether to use the @test annotation or not.

Allowed values: `'annotation'` and `'prefix'`

Default value: `'prefix'`

## Examples[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_test_annotation.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_test_annotation.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 class Test extends \PhpUnit\FrameWork\TestCase
 {
     /**
-     * @test
+     *
      */
-    public function itDoesSomething() {} }
+    public function testItDoesSomething() {} }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_test_annotation.html#example-2 "Permalink to this heading")

With configuration: `['style' => 'annotation']`.

```
--- Original
+++ New
 <?php
 class Test extends \PhpUnit\FrameWork\TestCase
 {
-public function testItDoesSomething() {}}
+/**
+ * @test
+ */
+public function itDoesSomething() {}}
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_test_annotation.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)
* [@Symfony:risky](https://cs.symfony.com/doc/ruleSets/SymfonyRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_test_annotation.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\PhpUnit\PhpUnitTestAnnotationFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/PhpUnit/PhpUnitTestAnnotationFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\PhpUnit\PhpUnitTestAnnotationFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/PhpUnit/PhpUnitTestAnnotationFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
