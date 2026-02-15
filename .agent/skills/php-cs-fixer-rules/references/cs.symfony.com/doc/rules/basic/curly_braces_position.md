---
title: "Rule curly_braces_position - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/basic/curly_braces_position"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `curly_braces_position`[¶](https://cs.symfony.com/doc/rules/basic/curly_braces_position.html#rule-curly-braces-position "Permalink to this heading")

Curly braces must be placed as configured.

## Warnings[¶](https://cs.symfony.com/doc/rules/basic/curly_braces_position.html#warnings "Permalink to this heading")

### This rule is DEPRECATED and will be removed in the next major version 4.0[¶](https://cs.symfony.com/doc/rules/basic/curly_braces_position.html#this-rule-is-deprecated-and-will-be-removed-in-the-next-major-version-4-0 "Permalink to this heading")

You should use `braces_position` instead.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/basic/curly_braces_position.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options:
`allow_single_line_anonymous_functions`,
`allow_single_line_empty_anonymous_classes`,
`anonymous_classes_opening_brace`, `anonymous_functions_opening_brace`,
`classes_opening_brace`, `control_structures_opening_brace`,
`functions_opening_brace`.

## Configuration[¶](https://cs.symfony.com/doc/rules/basic/curly_braces_position.html#configuration "Permalink to this heading")

### `allow_single_line_anonymous_functions`[¶](https://cs.symfony.com/doc/rules/basic/curly_braces_position.html#allow-single-line-anonymous-functions "Permalink to this heading")

Allow anonymous functions to have opening and closing braces on the same line.

Allowed types: `bool`

Default value: `true`

Default value (future-mode): `false`

### `allow_single_line_empty_anonymous_classes`[¶](https://cs.symfony.com/doc/rules/basic/curly_braces_position.html#allow-single-line-empty-anonymous-classes "Permalink to this heading")

Allow anonymous classes to have opening and closing braces on the same line.

Allowed types: `bool`

Default value: `true`

### `anonymous_classes_opening_brace`[¶](https://cs.symfony.com/doc/rules/basic/curly_braces_position.html#anonymous-classes-opening-brace "Permalink to this heading")

The position of the opening brace of anonymous classes‘ body.

Allowed values: `'next_line_unless_newline_at_signature_end'` and `'same_line'`

Default value: `'same_line'`

### `anonymous_functions_opening_brace`[¶](https://cs.symfony.com/doc/rules/basic/curly_braces_position.html#anonymous-functions-opening-brace "Permalink to this heading")

The position of the opening brace of anonymous functions‘ body.

Allowed values: `'next_line_unless_newline_at_signature_end'` and `'same_line'`

Default value: `'same_line'`

### `classes_opening_brace`[¶](https://cs.symfony.com/doc/rules/basic/curly_braces_position.html#classes-opening-brace "Permalink to this heading")

The position of the opening brace of classes‘ body.

Allowed values: `'next_line_unless_newline_at_signature_end'` and `'same_line'`

Default value: `'next_line_unless_newline_at_signature_end'`

### `control_structures_opening_brace`[¶](https://cs.symfony.com/doc/rules/basic/curly_braces_position.html#control-structures-opening-brace "Permalink to this heading")

The position of the opening brace of control structures‘ body.

Allowed values: `'next_line_unless_newline_at_signature_end'` and `'same_line'`

Default value: `'same_line'`

### `functions_opening_brace`[¶](https://cs.symfony.com/doc/rules/basic/curly_braces_position.html#functions-opening-brace "Permalink to this heading")

The position of the opening brace of functions‘ body.

Allowed values: `'next_line_unless_newline_at_signature_end'` and `'same_line'`

Default value: `'next_line_unless_newline_at_signature_end'`

## Examples[¶](https://cs.symfony.com/doc/rules/basic/curly_braces_position.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/basic/curly_braces_position.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-class Foo {
+class Foo
+{
 }

-function foo() {
+function foo()
+{
 }

-$foo = function()
-{
+$foo = function() {
 };

-if (foo())
-{
+if (foo()) {
     bar();
 }

-$foo = new class
-{
+$foo = new class {
 };
```

### Example #2[¶](https://cs.symfony.com/doc/rules/basic/curly_braces_position.html#example-2 "Permalink to this heading")

With configuration: `['control_structures_opening_brace' => 'next_line_unless_newline_at_signature_end']`.

```
--- Original
+++ New
 <?php
-if (foo()) {
+if (foo())
+{
     bar();
 }
```

### Example #3[¶](https://cs.symfony.com/doc/rules/basic/curly_braces_position.html#example-3 "Permalink to this heading")

With configuration: `['functions_opening_brace' => 'same_line']`.

```
--- Original
+++ New
 <?php
-function foo()
-{
+function foo() {
 }
```

### Example #4[¶](https://cs.symfony.com/doc/rules/basic/curly_braces_position.html#example-4 "Permalink to this heading")

With configuration: `['anonymous_functions_opening_brace' => 'next_line_unless_newline_at_signature_end']`.

```
--- Original
+++ New
 <?php
-$foo = function () {
+$foo = function ()
+{
 };
```

### Example #5[¶](https://cs.symfony.com/doc/rules/basic/curly_braces_position.html#example-5 "Permalink to this heading")

With configuration: `['classes_opening_brace' => 'same_line']`.

```
--- Original
+++ New
 <?php
-class Foo
-{
+class Foo {
 }
```

### Example #6[¶](https://cs.symfony.com/doc/rules/basic/curly_braces_position.html#example-6 "Permalink to this heading")

With configuration: `['anonymous_classes_opening_brace' => 'next_line_unless_newline_at_signature_end']`.

```
--- Original
+++ New
 <?php
-$foo = new class {
+$foo = new class
+{
 };
```

### Example #7[¶](https://cs.symfony.com/doc/rules/basic/curly_braces_position.html#example-7 "Permalink to this heading")

With configuration: `['allow_single_line_empty_anonymous_classes' => true]`.

```
--- Original
+++ New
 <?php
 $foo = new class { };
-$bar = new class { private $baz; };
+$bar = new class {
+private $baz;
+};
```

### Example #8[¶](https://cs.symfony.com/doc/rules/basic/curly_braces_position.html#example-8 "Permalink to this heading")

With configuration: `['allow_single_line_anonymous_functions' => true]`.

```
--- Original
+++ New
 <?php
 $foo = function () { return true; };
-$bar = function () { $result = true;
-    return $result; };
+$bar = function () {
+$result = true;
+    return $result;
+};
```

## References[¶](https://cs.symfony.com/doc/rules/basic/curly_braces_position.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Basic\CurlyBracesPositionFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Basic/CurlyBracesPositionFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Basic\CurlyBracesPositionFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Basic/CurlyBracesPositionFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
