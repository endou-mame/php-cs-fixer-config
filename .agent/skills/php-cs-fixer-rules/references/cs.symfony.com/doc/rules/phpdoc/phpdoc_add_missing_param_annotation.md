---
title: "Rule phpdoc_add_missing_param_annotation - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/phpdoc_add_missing_param_annotation"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `phpdoc_add_missing_param_annotation`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_add_missing_param_annotation.html#rule-phpdoc-add-missing-param-annotation "Permalink to this heading")

PHPDoc should contain `@param` for all params.

## Warning[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_add_missing_param_annotation.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_add_missing_param_annotation.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `only_untyped`.

## Configuration[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_add_missing_param_annotation.html#configuration "Permalink to this heading")

### `only_untyped`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_add_missing_param_annotation.html#only-untyped "Permalink to this heading")

Whether to add missing `@param` annotations for untyped parameters only.

Allowed types: `bool`

Default value: `true`

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_add_missing_param_annotation.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_add_missing_param_annotation.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 /**
  * @param int $bar
+ * @param mixed $baz
  *
  * @return void
  */
 function f9(string $foo, $bar, $baz) {}
```

### Example #2[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_add_missing_param_annotation.html#example-2 "Permalink to this heading")

With configuration: `['only_untyped' => true]`.

```
--- Original
+++ New
 <?php
 /**
  * @param int $bar
+ * @param mixed $baz
  *
  * @return void
  */
 function f9(string $foo, $bar, $baz) {}
```

### Example #3[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_add_missing_param_annotation.html#example-3 "Permalink to this heading")

With configuration: `['only_untyped' => false]`.

```
--- Original
+++ New
 <?php
 /**
  * @param int $bar
+ * @param string $foo
+ * @param mixed $baz
  *
  * @return void
  */
 function f9(string $foo, $bar, $baz) {}
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_add_missing_param_annotation.html#rule-sets "Permalink to this heading")

The rule is part of the following rule set:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_add_missing_param_annotation.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\PhpdocAddMissingParamAnnotationFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/PhpdocAddMissingParamAnnotationFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\PhpdocAddMissingParamAnnotationFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/PhpdocAddMissingParamAnnotationFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
