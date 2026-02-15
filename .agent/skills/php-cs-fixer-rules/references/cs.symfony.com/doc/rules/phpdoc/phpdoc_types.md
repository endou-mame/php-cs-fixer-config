---
title: "Rule phpdoc_types - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `phpdoc_types`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types.html#rule-phpdoc-types "Permalink to this heading")

The correct case must be used for standard PHP types in PHPDoc.

## Warning[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `groups`.

## Configuration[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types.html#configuration "Permalink to this heading")

### `groups`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types.html#groups "Permalink to this heading")

Type groups to fix.

Allowed values: a subset of `['alias', 'meta', 'simple']`

Default value: `['alias', 'meta', 'simple']`

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 /**
- * @param STRING|String[] $bar
+ * @param string|string[] $bar
  *
- * @return inT[]
+ * @return int[]
  */
```

### Example #2[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types.html#example-2 "Permalink to this heading")

With configuration: `['groups' => ['simple', 'alias']]`.

```
--- Original
+++ New
 <?php
 /**
- * @param BOOL $foo
+ * @param bool $foo
  *
  * @return MIXED
  */
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\PhpdocTypesFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/PhpdocTypesFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\PhpdocTypesFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/PhpdocTypesFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
