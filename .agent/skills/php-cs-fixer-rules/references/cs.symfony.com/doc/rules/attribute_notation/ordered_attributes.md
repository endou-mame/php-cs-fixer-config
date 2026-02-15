---
title: "Rule ordered_attributes - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/attribute_notation/ordered_attributes"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `ordered_attributes`[¶](https://cs.symfony.com/doc/rules/attribute_notation/ordered_attributes.html#rule-ordered-attributes "Permalink to this heading")

Sorts attributes using the configured sort algorithm.

## Warning[¶](https://cs.symfony.com/doc/rules/attribute_notation/ordered_attributes.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/attribute_notation/ordered_attributes.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `order`,
`sort_algorithm`.

## Configuration[¶](https://cs.symfony.com/doc/rules/attribute_notation/ordered_attributes.html#configuration "Permalink to this heading")

### `order`[¶](https://cs.symfony.com/doc/rules/attribute_notation/ordered_attributes.html#order "Permalink to this heading")

A list of FQCNs of attributes defining the desired order used when custom
sorting algorithm is configured.

Allowed types: `list<string>`

Default value: `[]`

### `sort_algorithm`[¶](https://cs.symfony.com/doc/rules/attribute_notation/ordered_attributes.html#sort-algorithm "Permalink to this heading")

How the attributes should be sorted.

Allowed values: `'alpha'` and `'custom'`

Default value: `'alpha'`

## Examples[¶](https://cs.symfony.com/doc/rules/attribute_notation/ordered_attributes.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/attribute_notation/ordered_attributes.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php

+#[Bar(3)]
+#[Corge(a: 'test')]
 #[Foo]
-#[Bar(3)]
 #[Qux(new Bar(5))]
-#[Corge(a: 'test')]
 class Sample1 {}

 #[
+    Bar(3),
+    Corge(a: 'test'),
     Foo,
-    Bar(3),
     Qux(new Bar(5)),
-    Corge(a: 'test'),
 ]
 class Sample2 {}
```

### Example #2[¶](https://cs.symfony.com/doc/rules/attribute_notation/ordered_attributes.html#example-2 "Permalink to this heading")

With configuration: `['sort_algorithm' => 'custom', 'order' => ['A\\B\\Qux', 'A\\B\\Bar', 'A\\B\\Corge']]`.

```
--- Original
+++ New
 <?php

 use A\B\Foo;
 use A\B\Bar as BarAlias;
 use A\B as AB;

-#[Foo]
+#[AB\Qux(new Bar(5))]
 #[BarAlias(3)]
-#[AB\Qux(new Bar(5))]
 #[\A\B\Corge(a: 'test')]
+#[Foo]
 class Sample1 {}
```

## References[¶](https://cs.symfony.com/doc/rules/attribute_notation/ordered_attributes.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\AttributeNotation\OrderedAttributesFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/AttributeNotation/OrderedAttributesFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\AttributeNotation\OrderedAttributesFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/AttributeNotation/OrderedAttributesFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
