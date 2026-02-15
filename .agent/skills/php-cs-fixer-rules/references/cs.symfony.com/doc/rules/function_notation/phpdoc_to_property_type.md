---
title: "Rule phpdoc_to_property_type - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/function_notation/phpdoc_to_property_type"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `phpdoc_to_property_type`[¶](https://cs.symfony.com/doc/rules/function_notation/phpdoc_to_property_type.html#rule-phpdoc-to-property-type "Permalink to this heading")

Takes `@var` annotation of non-mixed types and adjusts accordingly the
property signature..

## Warnings[¶](https://cs.symfony.com/doc/rules/function_notation/phpdoc_to_property_type.html#warnings "Permalink to this heading")

### This rule is EXPERIMENTAL[¶](https://cs.symfony.com/doc/rules/function_notation/phpdoc_to_property_type.html#this-rule-is-experimental "Permalink to this heading")

Rule is not covered with backward compatibility promise and may produce unstable
or unexpected results, use it at your own risk. Rule’s behaviour may be changed
at any point, including rule’s name; its options’ names, availability and
allowed values; its default configuration. Rule may be even removed without
prior notice. Feel free to provide feedback and help with determining final
state of the rule.

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/function_notation/phpdoc_to_property_type.html#this-rule-is-risky "Permalink to this heading")

The `@var` annotation is mandatory for the fixer to make changes, signatures
of properties without it (no docblock) will not be fixed. Manual actions might
be required for newly typed properties that are read before initialization.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/function_notation/phpdoc_to_property_type.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `scalar_types`,
`types_map`, `union_types`.

## Configuration[¶](https://cs.symfony.com/doc/rules/function_notation/phpdoc_to_property_type.html#configuration "Permalink to this heading")

### `scalar_types`[¶](https://cs.symfony.com/doc/rules/function_notation/phpdoc_to_property_type.html#scalar-types "Permalink to this heading")

Fix also scalar types; may have unexpected behaviour due to PHP bad type
coercion system.

Allowed types: `bool`

Default value: `true`

### `types_map`[¶](https://cs.symfony.com/doc/rules/function_notation/phpdoc_to_property_type.html#types-map "Permalink to this heading")

Map of custom types, e.g. template types from PHPStan.

Allowed types: `array<string, string>`

Default value: `[]`

### `union_types`[¶](https://cs.symfony.com/doc/rules/function_notation/phpdoc_to_property_type.html#union-types "Permalink to this heading")

Fix also union types; turned on by default on PHP >= 8.0.0.

Allowed types: `bool`

Default value: `true`

## Examples[¶](https://cs.symfony.com/doc/rules/function_notation/phpdoc_to_property_type.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/function_notation/phpdoc_to_property_type.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 class Foo {
     /** @var int */
-    private $foo;
+    private int $foo;
     /** @var \Traversable */
-    private $bar;
+    private \Traversable $bar;
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/function_notation/phpdoc_to_property_type.html#example-2 "Permalink to this heading")

With configuration: `['scalar_types' => false]`.

```
--- Original
+++ New
 <?php
 class Foo {
     /** @var int */
     private $foo;
     /** @var \Traversable */
-    private $bar;
+    private \Traversable $bar;
 }
```

### Example #3[¶](https://cs.symfony.com/doc/rules/function_notation/phpdoc_to_property_type.html#example-3 "Permalink to this heading")

With configuration: `['union_types' => false]`.

```
--- Original
+++ New
 <?php
 class Foo {
     /** @var int|string */
     private $foo;
     /** @var \Traversable */
-    private $bar;
+    private \Traversable $bar;
 }
```

## References[¶](https://cs.symfony.com/doc/rules/function_notation/phpdoc_to_property_type.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\FunctionNotation\PhpdocToPropertyTypeFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/FunctionNotation/PhpdocToPropertyTypeFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\FunctionNotation\PhpdocToPropertyTypeFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/FunctionNotation/PhpdocToPropertyTypeFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
