---
title: "Rule attribute_empty_parentheses - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/attribute_notation/attribute_empty_parentheses"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `attribute_empty_parentheses`[¶](https://cs.symfony.com/doc/rules/attribute_notation/attribute_empty_parentheses.html#rule-attribute-empty-parentheses "Permalink to this heading")

PHP attributes declared without arguments must (not) be followed by empty
parentheses.

## Warning[¶](https://cs.symfony.com/doc/rules/attribute_notation/attribute_empty_parentheses.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/attribute_notation/attribute_empty_parentheses.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `use_parentheses`.

## Configuration[¶](https://cs.symfony.com/doc/rules/attribute_notation/attribute_empty_parentheses.html#configuration "Permalink to this heading")

### `use_parentheses`[¶](https://cs.symfony.com/doc/rules/attribute_notation/attribute_empty_parentheses.html#use-parentheses "Permalink to this heading")

Whether attributes should be followed by parentheses or not.

Allowed types: `bool`

Default value: `false`

## Examples[¶](https://cs.symfony.com/doc/rules/attribute_notation/attribute_empty_parentheses.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/attribute_notation/attribute_empty_parentheses.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php

-#[Foo()]
+#[Foo]
 class Sample1 {}

-#[Bar(), Baz()]
+#[Bar, Baz]
 class Sample2 {}
```

### Example #2[¶](https://cs.symfony.com/doc/rules/attribute_notation/attribute_empty_parentheses.html#example-2 "Permalink to this heading")

With configuration: `['use_parentheses' => true]`.

```
--- Original
+++ New
 <?php

-#[Foo]
+#[Foo()]
 class Sample1 {}

-#[Bar, Baz]
+#[Bar(), Baz()]
 class Sample2 {}
```

## References[¶](https://cs.symfony.com/doc/rules/attribute_notation/attribute_empty_parentheses.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\AttributeNotation\AttributeEmptyParenthesesFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/AttributeNotation/AttributeEmptyParenthesesFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\AttributeNotation\AttributeEmptyParenthesesFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/AttributeNotation/AttributeEmptyParenthesesFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
