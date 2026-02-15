---
title: "Rule function_declaration - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/function_notation/function_declaration"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `function_declaration`[¶](https://cs.symfony.com/doc/rules/function_notation/function_declaration.html#rule-function-declaration "Permalink to this heading")

Spaces should be properly placed in a function declaration.

## Warning[¶](https://cs.symfony.com/doc/rules/function_notation/function_declaration.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/function_notation/function_declaration.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `closure_fn_spacing`,
`closure_function_spacing`, `trailing_comma_single_line`.

## Configuration[¶](https://cs.symfony.com/doc/rules/function_notation/function_declaration.html#configuration "Permalink to this heading")

### `closure_fn_spacing`[¶](https://cs.symfony.com/doc/rules/function_notation/function_declaration.html#closure-fn-spacing "Permalink to this heading")

Spacing to use before open parenthesis for short arrow functions.

Allowed values: `'none'` and `'one'`

Default value: `'one'`

Default value (future-mode): `'none'`

### `closure_function_spacing`[¶](https://cs.symfony.com/doc/rules/function_notation/function_declaration.html#closure-function-spacing "Permalink to this heading")

Spacing to use before open parenthesis for closures.

Allowed values: `'none'` and `'one'`

Default value: `'one'`

### `trailing_comma_single_line`[¶](https://cs.symfony.com/doc/rules/function_notation/function_declaration.html#trailing-comma-single-line "Permalink to this heading")

Whether trailing commas are allowed in single line signatures.

Allowed types: `bool`

Default value: `false`

## Examples[¶](https://cs.symfony.com/doc/rules/function_notation/function_declaration.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/function_notation/function_declaration.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php

 class Foo
 {
-    public static function  bar   ( $baz , $foo )
+    public static function bar($baz , $foo)
     {
         return false;
     }
 }

-function  foo  ($bar, $baz)
+function foo($bar, $baz)
 {
     return false;
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/function_notation/function_declaration.html#example-2 "Permalink to this heading")

With configuration: `['closure_function_spacing' => 'none']`.

```
--- Original
+++ New
 <?php
-$f = function () {};
+$f = function() {};
```

### Example #3[¶](https://cs.symfony.com/doc/rules/function_notation/function_declaration.html#example-3 "Permalink to this heading")

With configuration: `['closure_fn_spacing' => 'none']`.

```
--- Original
+++ New
 <?php
-$f = fn () => null;
+$f = fn() => null;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/function_notation/function_declaration.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)* with config:

  `['closure_fn_spacing' => 'none']`
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html) with config:

  `['closure_fn_spacing' => 'none']`
* [@PER-CS1.0](https://cs.symfony.com/doc/ruleSets/PER-CS1.0.html) *(deprecated)* with config:

  `['closure_fn_spacing' => 'one']`
* [@PER-CS1x0](https://cs.symfony.com/doc/ruleSets/PER-CS1x0.html) with config:

  `['closure_fn_spacing' => 'one']`
* [@PER-CS2.0](https://cs.symfony.com/doc/ruleSets/PER-CS2.0.html) *(deprecated)* with config:

  `['closure_fn_spacing' => 'none']`
* [@PER-CS2x0](https://cs.symfony.com/doc/ruleSets/PER-CS2x0.html) with config:

  `['closure_fn_spacing' => 'none']`
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)* with config:

  `['closure_fn_spacing' => 'none']`
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html) with config:

  `['closure_fn_spacing' => 'none']`
* [@PSR2](https://cs.symfony.com/doc/ruleSets/PSR2.html) with config:

  `['closure_fn_spacing' => 'one']`
* [@PSR12](https://cs.symfony.com/doc/ruleSets/PSR12.html) with config:

  `['closure_fn_spacing' => 'one']`
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html) with config:

  `['closure_fn_spacing' => 'one']`
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html) with config:

  `['closure_fn_spacing' => 'one']`

## References[¶](https://cs.symfony.com/doc/rules/function_notation/function_declaration.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\FunctionNotation\FunctionDeclarationFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/FunctionNotation/FunctionDeclarationFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\FunctionNotation\FunctionDeclarationFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/FunctionNotation/FunctionDeclarationFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
