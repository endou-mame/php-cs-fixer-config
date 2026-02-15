---
title: "Rule phpdoc_order_by_value - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/phpdoc_order_by_value"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `phpdoc_order_by_value`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_order_by_value.html#rule-phpdoc-order-by-value "Permalink to this heading")

Order PHPDoc tags by value.

## Warning[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_order_by_value.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_order_by_value.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `annotations`.

## Configuration[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_order_by_value.html#configuration "Permalink to this heading")

### `annotations`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_order_by_value.html#annotations "Permalink to this heading")

List of annotations to order, e.g. `["covers"]`.

Allowed values: a subset of `['author', 'covers', 'coversNothing', 'dataProvider', 'depends', 'group', 'internal', 'method', 'mixin', 'property', 'property-read', 'property-write', 'requires', 'throws', 'uses']`

Default value: `['covers']`

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_order_by_value.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_order_by_value.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 /**
+ * @covers Bar
  * @covers Foo
- * @covers Bar
  */
 final class MyTest extends \PHPUnit_Framework_TestCase
 {}
```

### Example #2[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_order_by_value.html#example-2 "Permalink to this heading")

With configuration: `['annotations' => ['author']]`.

```
--- Original
+++ New
 <?php
 /**
+ * @author Alice
  * @author Bob
- * @author Alice
  */
 final class MyTest extends \PHPUnit_Framework_TestCase
 {}
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_order_by_value.html#rule-sets "Permalink to this heading")

The rule is part of the following rule set:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_order_by_value.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\PhpdocOrderByValueFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/PhpdocOrderByValueFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\PhpdocOrderByValueFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/PhpdocOrderByValueFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
