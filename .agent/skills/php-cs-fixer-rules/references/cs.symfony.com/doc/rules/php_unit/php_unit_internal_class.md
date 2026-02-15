---
title: "Rule php_unit_internal_class - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/php_unit/php_unit_internal_class"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `php_unit_internal_class`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_internal_class.html#rule-php-unit-internal-class "Permalink to this heading")

All PHPUnit test classes should be marked as internal.

## Warning[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_internal_class.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_internal_class.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `types`.

## Configuration[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_internal_class.html#configuration "Permalink to this heading")

### `types`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_internal_class.html#types "Permalink to this heading")

What types of classes to mark as internal.

Allowed values: a subset of `['abstract', 'final', 'normal']`

Default value: `['normal', 'final']`

## Examples[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_internal_class.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_internal_class.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
+
+/**
+ * @internal
+ */
 class MyTest extends TestCase {}
```

### Example #2[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_internal_class.html#example-2 "Permalink to this heading")

With configuration: `['types' => ['final']]`.

```
--- Original
+++ New
 <?php
 class MyTest extends TestCase {}
+/**
+ * @internal
+ */
 final class FinalTest extends TestCase {}
 abstract class AbstractTest extends TestCase {}
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_internal_class.html#rule-sets "Permalink to this heading")

The rule is part of the following rule set:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)

## References[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_internal_class.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\PhpUnit\PhpUnitInternalClassFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/PhpUnit/PhpUnitInternalClassFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\PhpUnit\PhpUnitInternalClassFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/PhpUnit/PhpUnitInternalClassFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
