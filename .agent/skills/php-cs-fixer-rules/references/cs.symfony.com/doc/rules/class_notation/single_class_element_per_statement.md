---
title: "Rule single_class_element_per_statement - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/class_notation/single_class_element_per_statement"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `single_class_element_per_statement`[¶](https://cs.symfony.com/doc/rules/class_notation/single_class_element_per_statement.html#rule-single-class-element-per-statement "Permalink to this heading")

There MUST NOT be more than one property or constant declared per statement.

## Warning[¶](https://cs.symfony.com/doc/rules/class_notation/single_class_element_per_statement.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/class_notation/single_class_element_per_statement.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `elements`.

## Configuration[¶](https://cs.symfony.com/doc/rules/class_notation/single_class_element_per_statement.html#configuration "Permalink to this heading")

### `elements`[¶](https://cs.symfony.com/doc/rules/class_notation/single_class_element_per_statement.html#elements "Permalink to this heading")

List of strings which element should be modified.

Allowed values: a subset of `['const', 'property']`

Default value: `['const', 'property']`

## Examples[¶](https://cs.symfony.com/doc/rules/class_notation/single_class_element_per_statement.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/class_notation/single_class_element_per_statement.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 final class Example
 {
-    const FOO_1 = 1, FOO_2 = 2;
-    private static $bar1 = array(1,2,3), $bar2 = [1,2,3];
+    const FOO_1 = 1;
+    const FOO_2 = 2;
+    private static $bar1 = array(1,2,3);
+    private static $bar2 = [1,2,3];
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/class_notation/single_class_element_per_statement.html#example-2 "Permalink to this heading")

With configuration: `['elements' => ['property']]`.

```
--- Original
+++ New
 <?php
 final class Example
 {
     const FOO_1 = 1, FOO_2 = 2;
-    private static $bar1 = array(1,2,3), $bar2 = [1,2,3];
+    private static $bar1 = array(1,2,3);
+    private static $bar2 = [1,2,3];
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/class_notation/single_class_element_per_statement.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)*
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html)
* [@PER-CS1.0](https://cs.symfony.com/doc/ruleSets/PER-CS1.0.html) *(deprecated)* with config:

  `['elements' => ['property']]`
* [@PER-CS1x0](https://cs.symfony.com/doc/ruleSets/PER-CS1x0.html) with config:

  `['elements' => ['property']]`
* [@PER-CS2.0](https://cs.symfony.com/doc/ruleSets/PER-CS2.0.html) *(deprecated)* with config:

  `['elements' => ['property']]`
* [@PER-CS2x0](https://cs.symfony.com/doc/ruleSets/PER-CS2x0.html) with config:

  `['elements' => ['property']]`
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)*
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html)
* [@PSR2](https://cs.symfony.com/doc/ruleSets/PSR2.html) with config:

  `['elements' => ['property']]`
* [@PSR12](https://cs.symfony.com/doc/ruleSets/PSR12.html) with config:

  `['elements' => ['property']]`
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/class_notation/single_class_element_per_statement.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ClassNotation\SingleClassElementPerStatementFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ClassNotation/SingleClassElementPerStatementFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ClassNotation\SingleClassElementPerStatementFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ClassNotation/SingleClassElementPerStatementFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
