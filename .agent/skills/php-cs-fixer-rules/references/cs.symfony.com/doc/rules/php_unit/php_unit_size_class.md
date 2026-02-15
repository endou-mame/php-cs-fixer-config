---
title: "Rule php_unit_size_class - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/php_unit/php_unit_size_class"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `php_unit_size_class`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_size_class.html#rule-php-unit-size-class "Permalink to this heading")

All PHPUnit test cases should have `@small`, `@medium` or `@large`
annotation to enable run time limits.

## Description[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_size_class.html#description "Permalink to this heading")

The special groups [small, medium, large] provides a way to identify tests that
are taking long to be executed.

## Warning[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_size_class.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_size_class.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `group`.

## Configuration[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_size_class.html#configuration "Permalink to this heading")

### `group`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_size_class.html#group "Permalink to this heading")

Define a specific group to be used in case no group is already in use.

Allowed values: `'large'`, `'medium'` and `'small'`

Default value: `'small'`

## Examples[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_size_class.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_size_class.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
+
+/**
+ * @small
+ */
 class MyTest extends TestCase {}
```

### Example #2[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_size_class.html#example-2 "Permalink to this heading")

With configuration: `['group' => 'medium']`.

```
--- Original
+++ New
 <?php
+
+/**
+ * @medium
+ */
 class MyTest extends TestCase {}
```

## References[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_size_class.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\PhpUnit\PhpUnitSizeClassFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/PhpUnit/PhpUnitSizeClassFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\PhpUnit\PhpUnitSizeClassFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/PhpUnit/PhpUnitSizeClassFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
