---
title: "Rule method_argument_space - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/function_notation/method_argument_space"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `method_argument_space`[¶](https://cs.symfony.com/doc/rules/function_notation/method_argument_space.html#rule-method-argument-space "Permalink to this heading")

In method arguments and method call, there MUST NOT be a space before each comma
and there MUST be one space after each comma. Argument lists MAY be split across
multiple lines, where each subsequent line is indented once. When doing so, the
first item in the list MUST be on the next line, and there MUST be only one
argument per line.

## Description[¶](https://cs.symfony.com/doc/rules/function_notation/method_argument_space.html#description "Permalink to this heading")

This fixer covers rules defined in PSR2 ¶4.4, ¶4.6.

## Warning[¶](https://cs.symfony.com/doc/rules/function_notation/method_argument_space.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/function_notation/method_argument_space.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `after_heredoc`,
`attribute_placement`, `keep_multiple_spaces_after_comma`, `on_multiline`.

## Configuration[¶](https://cs.symfony.com/doc/rules/function_notation/method_argument_space.html#configuration "Permalink to this heading")

### `after_heredoc`[¶](https://cs.symfony.com/doc/rules/function_notation/method_argument_space.html#after-heredoc "Permalink to this heading")

Whether the whitespace between heredoc end and comma should be removed.

Allowed types: `bool`

Default value: `false`

Default value (future-mode): `true`

### `attribute_placement`[¶](https://cs.symfony.com/doc/rules/function_notation/method_argument_space.html#attribute-placement "Permalink to this heading")

Defines how to handle argument attributes when function definition is multiline.

Allowed values: `'ignore'`, `'same_line'` and `'standalone'`

Default value: `'standalone'`

### `keep_multiple_spaces_after_comma`[¶](https://cs.symfony.com/doc/rules/function_notation/method_argument_space.html#keep-multiple-spaces-after-comma "Permalink to this heading")

Whether keep multiple spaces after comma.

Allowed types: `bool`

Default value: `false`

### `on_multiline`[¶](https://cs.symfony.com/doc/rules/function_notation/method_argument_space.html#on-multiline "Permalink to this heading")

Defines how to handle function arguments lists that contain newlines.

Allowed values: `'ensure_fully_multiline'`, `'ensure_single_line'` and `'ignore'`

Default value: `'ensure_fully_multiline'`

## Examples[¶](https://cs.symfony.com/doc/rules/function_notation/method_argument_space.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/function_notation/method_argument_space.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-function sample($a=10,$b=20,$c=30) {}
-sample(1,  2);
+function sample($a=10, $b=20, $c=30) {}
+sample(1, 2);
```

### Example #2[¶](https://cs.symfony.com/doc/rules/function_notation/method_argument_space.html#example-2 "Permalink to this heading")

With configuration: `['keep_multiple_spaces_after_comma' => false]`.

```
--- Original
+++ New
 <?php
-function sample($a=10,$b=20,$c=30) {}
-sample(1,  2);
+function sample($a=10, $b=20, $c=30) {}
+sample(1, 2);
```

### Example #3[¶](https://cs.symfony.com/doc/rules/function_notation/method_argument_space.html#example-3 "Permalink to this heading")

With configuration: `['keep_multiple_spaces_after_comma' => true]`.

```
--- Original
+++ New
 <?php
-function sample($a=10,$b=20,$c=30) {}
+function sample($a=10, $b=20, $c=30) {}
 sample(1,  2);
```

### Example #4[¶](https://cs.symfony.com/doc/rules/function_notation/method_argument_space.html#example-4 "Permalink to this heading")

With configuration: `['on_multiline' => 'ensure_fully_multiline']`.

```
--- Original
+++ New
 <?php
-function sample($a=10,
-    $b=20,$c=30) {}
-sample(1,
-    2);
+function sample(
+    $a=10,
+    $b=20,
+    $c=30
+) {}
+sample(
+    1,
+    2
+);
```

### Example #5[¶](https://cs.symfony.com/doc/rules/function_notation/method_argument_space.html#example-5 "Permalink to this heading")

With configuration: `['on_multiline' => 'ensure_single_line']`.

```
--- Original
+++ New
 <?php
-function sample(
-    $a=10,
-    $b=20,
-    $c=30
-) {}
-sample(
-    1,
-    2
-);
+function sample($a=10, $b=20, $c=30) {}
+sample(1, 2);
```

### Example #6[¶](https://cs.symfony.com/doc/rules/function_notation/method_argument_space.html#example-6 "Permalink to this heading")

With configuration: `['on_multiline' => 'ensure_fully_multiline', 'keep_multiple_spaces_after_comma' => true]`.

```
--- Original
+++ New
 <?php
-function sample($a=10,
-    $b=20,$c=30) {}
-sample(1,
-    2);
+function sample(
+    $a=10,
+    $b=20,
+    $c=30
+) {}
+sample(
+    1,
+    2
+);
 sample('foo',    'foobarbaz', 'baz');
 sample('foobar', 'bar',       'baz');
```

### Example #7[¶](https://cs.symfony.com/doc/rules/function_notation/method_argument_space.html#example-7 "Permalink to this heading")

With configuration: `['on_multiline' => 'ensure_fully_multiline', 'keep_multiple_spaces_after_comma' => false]`.

```
--- Original
+++ New
 <?php
-function sample($a=10,
-    $b=20,$c=30) {}
-sample(1,
-    2);
-sample('foo',    'foobarbaz', 'baz');
-sample('foobar', 'bar',       'baz');
+function sample(
+    $a=10,
+    $b=20,
+    $c=30
+) {}
+sample(
+    1,
+    2
+);
+sample('foo', 'foobarbaz', 'baz');
+sample('foobar', 'bar', 'baz');
```

### Example #8[¶](https://cs.symfony.com/doc/rules/function_notation/method_argument_space.html#example-8 "Permalink to this heading")

With configuration: `['on_multiline' => 'ensure_fully_multiline', 'attribute_placement' => 'ignore']`.

```
--- Original
+++ New
 <?php
-function sample(#[Foo] #[Bar] $a=10,
-    $b=20,$c=30) {}
-sample(1,  2);
+function sample(
+    #[Foo] #[Bar] $a=10,
+    $b=20,
+    $c=30
+) {}
+sample(1, 2);
```

### Example #9[¶](https://cs.symfony.com/doc/rules/function_notation/method_argument_space.html#example-9 "Permalink to this heading")

With configuration: `['on_multiline' => 'ensure_fully_multiline', 'attribute_placement' => 'same_line']`.

```
--- Original
+++ New
 <?php
-function sample(#[Foo]
-    #[Bar]
-    $a=10,
-    $b=20,$c=30) {}
-sample(1,  2);
+function sample(
+    #[Foo] #[Bar] $a=10,
+    $b=20,
+    $c=30
+) {}
+sample(1, 2);
```

### Example #10[¶](https://cs.symfony.com/doc/rules/function_notation/method_argument_space.html#example-10 "Permalink to this heading")

With configuration: `['on_multiline' => 'ensure_fully_multiline', 'attribute_placement' => 'standalone']`.

```
--- Original
+++ New
 <?php
-function sample(#[Foo] #[Bar] $a=10,
-    $b=20,$c=30) {}
-sample(1,  2);
+function sample(
+    #[Foo]
+    #[Bar]
+    $a=10,
+    $b=20,
+    $c=30
+) {}
+sample(1, 2);
```

### Example #11[¶](https://cs.symfony.com/doc/rules/function_notation/method_argument_space.html#example-11 "Permalink to this heading")

With configuration: `['after_heredoc' => true]`.

```
--- Original
+++ New
 <?php
 sample(
     <<<EOD
         foo
-        EOD
-    ,
+        EOD,
     'bar'
 );
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/function_notation/method_argument_space.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)* with config:

  `['after_heredoc' => false]`
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html) with config:

  `['after_heredoc' => false]`
* [@PER-CS1.0](https://cs.symfony.com/doc/ruleSets/PER-CS1.0.html) *(deprecated)* with config:

  `['after_heredoc' => false, 'attribute_placement' => 'ignore', 'on_multiline' => 'ensure_fully_multiline']`
* [@PER-CS1x0](https://cs.symfony.com/doc/ruleSets/PER-CS1x0.html) with config:

  `['after_heredoc' => false, 'attribute_placement' => 'ignore', 'on_multiline' => 'ensure_fully_multiline']`
* [@PER-CS2.0](https://cs.symfony.com/doc/ruleSets/PER-CS2.0.html) *(deprecated)* with config:

  `['after_heredoc' => false]`
* [@PER-CS2x0](https://cs.symfony.com/doc/ruleSets/PER-CS2x0.html) with config:

  `['after_heredoc' => false]`
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)* with config:

  `['after_heredoc' => false]`
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html) with config:

  `['after_heredoc' => false]`
* [@PHP7x3Migration](https://cs.symfony.com/doc/ruleSets/PHP7x3Migration.html) with config:

  `['after_heredoc' => true]`
* [@PHP7x4Migration](https://cs.symfony.com/doc/ruleSets/PHP7x4Migration.html) with config:

  `['after_heredoc' => true]`
* [@PHP8x0Migration](https://cs.symfony.com/doc/ruleSets/PHP8x0Migration.html) with config:

  `['after_heredoc' => true]`
* [@PHP8x1Migration](https://cs.symfony.com/doc/ruleSets/PHP8x1Migration.html) with config:

  `['after_heredoc' => true]`
* [@PHP8x2Migration](https://cs.symfony.com/doc/ruleSets/PHP8x2Migration.html) with config:

  `['after_heredoc' => true]`
* [@PHP8x3Migration](https://cs.symfony.com/doc/ruleSets/PHP8x3Migration.html) with config:

  `['after_heredoc' => true]`
* [@PHP8x4Migration](https://cs.symfony.com/doc/ruleSets/PHP8x4Migration.html) with config:

  `['after_heredoc' => true]`
* [@PHP8x5Migration](https://cs.symfony.com/doc/ruleSets/PHP8x5Migration.html) with config:

  `['after_heredoc' => true]`
* [@PHP73Migration](https://cs.symfony.com/doc/ruleSets/PHP73Migration.html) *(deprecated)* with config:

  `['after_heredoc' => true]`
* [@PHP74Migration](https://cs.symfony.com/doc/ruleSets/PHP74Migration.html) *(deprecated)* with config:

  `['after_heredoc' => true]`
* [@PHP80Migration](https://cs.symfony.com/doc/ruleSets/PHP80Migration.html) *(deprecated)* with config:

  `['after_heredoc' => true]`
* [@PHP81Migration](https://cs.symfony.com/doc/ruleSets/PHP81Migration.html) *(deprecated)* with config:

  `['after_heredoc' => true]`
* [@PHP82Migration](https://cs.symfony.com/doc/ruleSets/PHP82Migration.html) *(deprecated)* with config:

  `['after_heredoc' => true]`
* [@PHP83Migration](https://cs.symfony.com/doc/ruleSets/PHP83Migration.html) *(deprecated)* with config:

  `['after_heredoc' => true]`
* [@PHP84Migration](https://cs.symfony.com/doc/ruleSets/PHP84Migration.html) *(deprecated)* with config:

  `['after_heredoc' => true]`
* [@PHP85Migration](https://cs.symfony.com/doc/ruleSets/PHP85Migration.html) *(deprecated)* with config:

  `['after_heredoc' => true]`
* [@PSR2](https://cs.symfony.com/doc/ruleSets/PSR2.html) with config:

  `['after_heredoc' => false, 'attribute_placement' => 'ignore', 'on_multiline' => 'ensure_fully_multiline']`
* [@PSR12](https://cs.symfony.com/doc/ruleSets/PSR12.html) with config:

  `['after_heredoc' => false, 'attribute_placement' => 'ignore', 'on_multiline' => 'ensure_fully_multiline']`
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html) with config:

  `['after_heredoc' => true, 'on_multiline' => 'ensure_fully_multiline']`
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html) with config:

  `['after_heredoc' => true, 'on_multiline' => 'ignore']`

## References[¶](https://cs.symfony.com/doc/rules/function_notation/method_argument_space.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\FunctionNotation\MethodArgumentSpaceFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/FunctionNotation/MethodArgumentSpaceFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\FunctionNotation\MethodArgumentSpaceFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/FunctionNotation/MethodArgumentSpaceFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
