---
title: "Rule phpdoc_order - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/phpdoc_order"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `phpdoc_order`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_order.html#rule-phpdoc-order "Permalink to this heading")

Annotations in PHPDoc should be ordered in defined sequence.

## Warning[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_order.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_order.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `order`.

## Configuration[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_order.html#configuration "Permalink to this heading")

### `order`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_order.html#order "Permalink to this heading")

Sequence in which annotations in PHPDoc should be ordered.

Allowed types: `list<string>`

Default value: `['param', 'throws', 'return']`

Default value (future-mode): `['param', 'return', 'throws']`

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_order.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_order.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 /**
  * Hello there!
  *
- * @throws Exception|RuntimeException foo
  * @custom Test!
- * @return int  Return the number of changes.
  * @param string $foo
  * @param bool   $bar Bar
+ * @throws Exception|RuntimeException foo
+ * @return int  Return the number of changes.
  */
```

### Example #2[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_order.html#example-2 "Permalink to this heading")

With configuration: `['order' => ['param', 'return', 'throws']]`.

```
--- Original
+++ New
 <?php
 /**
  * Hello there!
  *
- * @throws Exception|RuntimeException foo
  * @custom Test!
- * @return int  Return the number of changes.
  * @param string $foo
  * @param bool   $bar Bar
+ * @return int  Return the number of changes.
+ * @throws Exception|RuntimeException foo
  */
```

### Example #3[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_order.html#example-3 "Permalink to this heading")

With configuration: `['order' => ['param', 'throws', 'return']]`.

```
--- Original
+++ New
 <?php
 /**
  * Hello there!
  *
- * @throws Exception|RuntimeException foo
  * @custom Test!
- * @return int  Return the number of changes.
  * @param string $foo
  * @param bool   $bar Bar
+ * @throws Exception|RuntimeException foo
+ * @return int  Return the number of changes.
  */
```

### Example #4[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_order.html#example-4 "Permalink to this heading")

With configuration: `['order' => ['param', 'custom', 'throws', 'return']]`.

```
--- Original
+++ New
 <?php
 /**
  * Hello there!
  *
+ * @param string $foo
+ * @param bool   $bar Bar
+ * @custom Test!
  * @throws Exception|RuntimeException foo
- * @custom Test!
  * @return int  Return the number of changes.
- * @param string $foo
- * @param bool   $bar Bar
  */
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_order.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html) with config:

  `['order' => ['param', 'return', 'throws']]`
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html) with config:

  `['order' => ['param', 'return', 'throws']]`

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_order.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\PhpdocOrderFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/PhpdocOrderFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\PhpdocOrderFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/PhpdocOrderFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
