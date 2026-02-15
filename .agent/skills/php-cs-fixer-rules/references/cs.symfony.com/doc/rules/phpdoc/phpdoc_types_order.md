---
title: "Rule phpdoc_types_order - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types_order"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `phpdoc_types_order`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types_order.html#rule-phpdoc-types-order "Permalink to this heading")

Sorts PHPDoc types.

## Warning[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types_order.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types_order.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `case_sensitive`,
`null_adjustment`, `sort_algorithm`.

## Configuration[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types_order.html#configuration "Permalink to this heading")

### `case_sensitive`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types_order.html#case-sensitive "Permalink to this heading")

Whether the sorting should be case sensitive.

Allowed types: `bool`

Default value: `false`

### `null_adjustment`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types_order.html#null-adjustment "Permalink to this heading")

Forces the position of `null` (overrides `sort_algorithm`).

Allowed values: `'always_first'`, `'always_last'` and `'none'`

Default value: `'always_first'`

### `sort_algorithm`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types_order.html#sort-algorithm "Permalink to this heading")

The sorting algorithm to apply.

Allowed values: `'alpha'` and `'none'`

Default value: `'alpha'`

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types_order.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types_order.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 /**
- * @param string|null $bar
+ * @param null|string $bar
  */
```

### Example #2[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types_order.html#example-2 "Permalink to this heading")

With configuration: `['null_adjustment' => 'always_last']`.

```
--- Original
+++ New
 <?php
 /**
- * @param null|string $bar
+ * @param string|null $bar
  */
```

### Example #3[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types_order.html#example-3 "Permalink to this heading")

With configuration: `['sort_algorithm' => 'alpha']`.

```
--- Original
+++ New
 <?php
 /**
- * @param null|string|int|\Foo $bar
+ * @param null|\Foo|int|string $bar
  */
```

### Example #4[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types_order.html#example-4 "Permalink to this heading")

With configuration: `['sort_algorithm' => 'alpha', 'null_adjustment' => 'always_last']`.

```
--- Original
+++ New
 <?php
 /**
- * @param null|string|int|\Foo $bar
+ * @param \Foo|int|string|null $bar
  */
```

### Example #5[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types_order.html#example-5 "Permalink to this heading")

With configuration: `['sort_algorithm' => 'alpha', 'null_adjustment' => 'none']`.

```
--- Original
+++ New
 <?php
 /**
- * @param null|string|int|\Foo $bar
+ * @param \Foo|int|null|string $bar
  */
```

### Example #6[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types_order.html#example-6 "Permalink to this heading")

With configuration: `['case_sensitive' => true]`.

```
--- Original
+++ New
 <?php
 /**
- * @param Aaa|AA $bar
+ * @param AA|Aaa $bar
  */
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types_order.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html) with config:

  `['null_adjustment' => 'always_last', 'sort_algorithm' => 'none']`

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types_order.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\PhpdocTypesOrderFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/PhpdocTypesOrderFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\PhpdocTypesOrderFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/PhpdocTypesOrderFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
