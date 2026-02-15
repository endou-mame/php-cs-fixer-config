---
title: "Rule phpdoc_scalar - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/phpdoc_scalar"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `phpdoc_scalar`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_scalar.html#rule-phpdoc-scalar "Permalink to this heading")

Scalar types should always be written in the same form. `int` not `integer`,
`bool` not `boolean`, `float` not `real` or `double`.

## Warning[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_scalar.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_scalar.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `types`.

## Configuration[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_scalar.html#configuration "Permalink to this heading")

### `types`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_scalar.html#types "Permalink to this heading")

A list of types to fix.

Allowed values: a subset of `['boolean', 'callback', 'double', 'integer', 'never-return', 'never-returns', 'no-return', 'real', 'str']`

Default value: `['boolean', 'callback', 'double', 'integer', 'real', 'str']`

Default value (future-mode): `['boolean', 'callback', 'double', 'integer', 'never-return', 'never-returns', 'no-return', 'real', 'str']`

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_scalar.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_scalar.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 /**
- * @param integer $a
- * @param boolean $b
- * @param real $c
+ * @param int $a
+ * @param bool $b
+ * @param float $c
  *
- * @return double
+ * @return float
  */
 function sample($a, $b, $c)
 {
     return sample2($a, $b, $c);
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_scalar.html#example-2 "Permalink to this heading")

With configuration: `['types' => ['boolean']]`.

```
--- Original
+++ New
 <?php
 /**
  * @param integer $a
- * @param boolean $b
+ * @param bool $b
  * @param real $c
  */
 function sample($a, $b, $c)
 {
     return sample2($a, $b, $c);
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_scalar.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html) with config:

  `['types' => ['boolean', 'callback', 'double', 'integer', 'never-return', 'never-returns', 'no-return', 'real', 'str']]`
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html) with config:

  `['types' => ['boolean', 'callback', 'double', 'integer', 'never-return', 'never-returns', 'no-return', 'real', 'str']]`

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_scalar.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\PhpdocScalarFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/PhpdocScalarFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\PhpdocScalarFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/PhpdocScalarFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
