---
title: "Rule nullable_type_declaration_for_default_null_value - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/function_notation/nullable_type_declaration_for_default_null_value"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `nullable_type_declaration_for_default_null_value`[¶](https://cs.symfony.com/doc/rules/function_notation/nullable_type_declaration_for_default_null_value.html#rule-nullable-type-declaration-for-default-null-value "Permalink to this heading")

Adds or removes `?` before single type declarations or `|null` at the end of
union types when parameters have a default `null` value.

## Warning[¶](https://cs.symfony.com/doc/rules/function_notation/nullable_type_declaration_for_default_null_value.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/function_notation/nullable_type_declaration_for_default_null_value.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option:
`use_nullable_type_declaration`.

## Configuration[¶](https://cs.symfony.com/doc/rules/function_notation/nullable_type_declaration_for_default_null_value.html#configuration "Permalink to this heading")

### `use_nullable_type_declaration`[¶](https://cs.symfony.com/doc/rules/function_notation/nullable_type_declaration_for_default_null_value.html#use-nullable-type-declaration "Permalink to this heading")

Warning

This option is deprecated and will be removed in the next major version. Behaviour will follow default one.

Whether to add or remove `?` or `|null` to parameters with a default
`null` value.

Allowed types: `bool`

Default value: `true`

## Examples[¶](https://cs.symfony.com/doc/rules/function_notation/nullable_type_declaration_for_default_null_value.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/function_notation/nullable_type_declaration_for_default_null_value.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-function sample(string $str = null)
+function sample(?string $str = null)
 {}
```

### Example #2[¶](https://cs.symfony.com/doc/rules/function_notation/nullable_type_declaration_for_default_null_value.html#example-2 "Permalink to this heading")

With configuration: `['use_nullable_type_declaration' => false]`.

```
--- Original
+++ New
 <?php
-function sample(?string $str = null)
+function sample(string $str = null)
 {}
```

### Example #3[¶](https://cs.symfony.com/doc/rules/function_notation/nullable_type_declaration_for_default_null_value.html#example-3 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-function sample(string|int $str = null)
+function sample(string|int|null $str = null)
 {}
```

### Example #4[¶](https://cs.symfony.com/doc/rules/function_notation/nullable_type_declaration_for_default_null_value.html#example-4 "Permalink to this heading")

With configuration: `['use_nullable_type_declaration' => false]`.

```
--- Original
+++ New
 <?php
-function sample(string|int|null $str = null)
+function sample(string|int $str = null)
 {}
```

### Example #5[¶](https://cs.symfony.com/doc/rules/function_notation/nullable_type_declaration_for_default_null_value.html#example-5 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-function sample(\Foo&\Bar $str = null)
+function sample((\Foo&\Bar)|null $str = null)
 {}
```

### Example #6[¶](https://cs.symfony.com/doc/rules/function_notation/nullable_type_declaration_for_default_null_value.html#example-6 "Permalink to this heading")

With configuration: `['use_nullable_type_declaration' => false]`.

```
--- Original
+++ New
 <?php
-function sample((\Foo&\Bar)|null $str = null)
+function sample(\Foo&\Bar $str = null)
 {}
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/function_notation/nullable_type_declaration_for_default_null_value.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PHP8x4Migration](https://cs.symfony.com/doc/ruleSets/PHP8x4Migration.html)
* [@PHP8x5Migration](https://cs.symfony.com/doc/ruleSets/PHP8x5Migration.html)
* [@PHP84Migration](https://cs.symfony.com/doc/ruleSets/PHP84Migration.html) *(deprecated)*
* [@PHP85Migration](https://cs.symfony.com/doc/ruleSets/PHP85Migration.html) *(deprecated)*
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/function_notation/nullable_type_declaration_for_default_null_value.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\FunctionNotation\NullableTypeDeclarationForDefaultNullValueFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/FunctionNotation/NullableTypeDeclarationForDefaultNullValueFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\FunctionNotation\NullableTypeDeclarationForDefaultNullValueFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/FunctionNotation/NullableTypeDeclarationForDefaultNullValueFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
