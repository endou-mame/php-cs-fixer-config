---
title: "Rule phpdoc_to_return_type - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/function_notation/phpdoc_to_return_type"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `phpdoc_to_return_type`[¶](https://cs.symfony.com/doc/rules/function_notation/phpdoc_to_return_type.html#rule-phpdoc-to-return-type "Permalink to this heading")

Takes `@return` annotation of non-mixed types and adjusts accordingly the
function signature.

## Warnings[¶](https://cs.symfony.com/doc/rules/function_notation/phpdoc_to_return_type.html#warnings "Permalink to this heading")

### This rule is EXPERIMENTAL[¶](https://cs.symfony.com/doc/rules/function_notation/phpdoc_to_return_type.html#this-rule-is-experimental "Permalink to this heading")

Rule is not covered with backward compatibility promise and may produce unstable
or unexpected results, use it at your own risk. Rule’s behaviour may be changed
at any point, including rule’s name; its options’ names, availability and
allowed values; its default configuration. Rule may be even removed without
prior notice. Feel free to provide feedback and help with determining final
state of the rule.

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/function_notation/phpdoc_to_return_type.html#this-rule-is-risky "Permalink to this heading")

The `@return` annotation is mandatory for the fixer to make changes,
signatures of methods without it (no docblock, inheritdocs) will not be fixed.
Manual actions are required if inherited signatures are not properly documented.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/function_notation/phpdoc_to_return_type.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `scalar_types`,
`types_map`, `union_types`.

## Configuration[¶](https://cs.symfony.com/doc/rules/function_notation/phpdoc_to_return_type.html#configuration "Permalink to this heading")

### `scalar_types`[¶](https://cs.symfony.com/doc/rules/function_notation/phpdoc_to_return_type.html#scalar-types "Permalink to this heading")

Fix also scalar types; may have unexpected behaviour due to PHP bad type
coercion system.

Allowed types: `bool`

Default value: `true`

### `types_map`[¶](https://cs.symfony.com/doc/rules/function_notation/phpdoc_to_return_type.html#types-map "Permalink to this heading")

Map of custom types, e.g. template types from PHPStan.

Allowed types: `array<string, string>`

Default value: `[]`

### `union_types`[¶](https://cs.symfony.com/doc/rules/function_notation/phpdoc_to_return_type.html#union-types "Permalink to this heading")

Fix also union types; turned on by default on PHP >= 8.0.0.

Allowed types: `bool`

Default value: `true`

## Examples[¶](https://cs.symfony.com/doc/rules/function_notation/phpdoc_to_return_type.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/function_notation/phpdoc_to_return_type.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php

 /** @return \My\Bar */
-function f1()
+function f1(): \My\Bar
 {}

 /** @return void */
-function f2()
+function f2(): void
 {}

 /** @return object */
-function my_foo()
+function my_foo(): object
 {}
```

### Example #2[¶](https://cs.symfony.com/doc/rules/function_notation/phpdoc_to_return_type.html#example-2 "Permalink to this heading")

With configuration: `['scalar_types' => false]`.

```
--- Original
+++ New
 <?php

 /** @return Foo */
-function foo() {}
+function foo(): Foo {}
 /** @return string */
 function bar() {}
```

### Example #3[¶](https://cs.symfony.com/doc/rules/function_notation/phpdoc_to_return_type.html#example-3 "Permalink to this heading")

With configuration: `['union_types' => false]`.

```
--- Original
+++ New
 <?php

 /** @return Foo */
-function foo() {}
+function foo(): Foo {}
 /** @return int|string */
 function bar() {}
```

### Example #4[¶](https://cs.symfony.com/doc/rules/function_notation/phpdoc_to_return_type.html#example-4 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 final class Foo {
     /**
      * @return static
      */
-    public function create($prototype) {
+    public function create($prototype): static {
         return new static($prototype);
     }
 }
```

## References[¶](https://cs.symfony.com/doc/rules/function_notation/phpdoc_to_return_type.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\FunctionNotation\PhpdocToReturnTypeFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/FunctionNotation/PhpdocToReturnTypeFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\FunctionNotation\PhpdocToReturnTypeFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/FunctionNotation/PhpdocToReturnTypeFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
