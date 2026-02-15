---
title: "Rule general_attribute_remove - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/attribute_notation/general_attribute_remove"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `general_attribute_remove`[¶](https://cs.symfony.com/doc/rules/attribute_notation/general_attribute_remove.html#rule-general-attribute-remove "Permalink to this heading")

Removes configured attributes by their respective FQN.

## Warning[¶](https://cs.symfony.com/doc/rules/attribute_notation/general_attribute_remove.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/attribute_notation/general_attribute_remove.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `attributes`.

## Configuration[¶](https://cs.symfony.com/doc/rules/attribute_notation/general_attribute_remove.html#configuration "Permalink to this heading")

### `attributes`[¶](https://cs.symfony.com/doc/rules/attribute_notation/general_attribute_remove.html#attributes "Permalink to this heading")

List of FQNs of attributes for removal.

Allowed types: `list<class-string>`

Default value: `[]`

## Examples[¶](https://cs.symfony.com/doc/rules/attribute_notation/general_attribute_remove.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/attribute_notation/general_attribute_remove.html#example-1 "Permalink to this heading")

With configuration: `['attributes' => ['\\A\\B\\Foo']]`.

```
--- Original
+++ New
 <?php
-#[\A\B\Foo]
 function foo() {}
```

### Example #2[¶](https://cs.symfony.com/doc/rules/attribute_notation/general_attribute_remove.html#example-2 "Permalink to this heading")

With configuration: `['attributes' => ['\\A\\B\\Foo', 'A\\B\\Bar']]`.

```
--- Original
+++ New
 <?php
 use A\B\Bar as BarAlias;

-#[\A\B\Foo]
-#[BarAlias]
 function foo() {}
```

## References[¶](https://cs.symfony.com/doc/rules/attribute_notation/general_attribute_remove.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\AttributeNotation\GeneralAttributeRemoveFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/AttributeNotation/GeneralAttributeRemoveFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\AttributeNotation\GeneralAttributeRemoveFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/AttributeNotation/GeneralAttributeRemoveFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
