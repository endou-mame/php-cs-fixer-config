---
title: "Rule braces - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/basic/braces"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `braces`[¶](https://cs.symfony.com/doc/rules/basic/braces.html#rule-braces "Permalink to this heading")

The body of each structure MUST be enclosed by braces. Braces should be properly
placed. Body of braces should be properly indented.

## Warnings[¶](https://cs.symfony.com/doc/rules/basic/braces.html#warnings "Permalink to this heading")

### This rule is DEPRECATED and will be removed in the next major version 4.0[¶](https://cs.symfony.com/doc/rules/basic/braces.html#this-rule-is-deprecated-and-will-be-removed-in-the-next-major-version-4-0 "Permalink to this heading")

You should use `single_space_around_construct`, `control_structure_braces`,
`control_structure_continuation_position`, `declare_parentheses`,
`no_multiple_statements_per_line`, `braces_position`,
`statement_indentation` and `no_extra_blank_lines` instead.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/basic/braces.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options:
`allow_single_line_anonymous_class_with_empty_body`,
`allow_single_line_closure`, `position_after_anonymous_constructs`,
`position_after_control_structures`,
`position_after_functions_and_oop_constructs`.

## Configuration[¶](https://cs.symfony.com/doc/rules/basic/braces.html#configuration "Permalink to this heading")

### `allow_single_line_anonymous_class_with_empty_body`[¶](https://cs.symfony.com/doc/rules/basic/braces.html#allow-single-line-anonymous-class-with-empty-body "Permalink to this heading")

Whether single line anonymous class with empty body notation should be allowed.

Allowed types: `bool`

Default value: `false`

### `allow_single_line_closure`[¶](https://cs.symfony.com/doc/rules/basic/braces.html#allow-single-line-closure "Permalink to this heading")

Whether single line lambda notation should be allowed.

Allowed types: `bool`

Default value: `false`

### `position_after_anonymous_constructs`[¶](https://cs.symfony.com/doc/rules/basic/braces.html#position-after-anonymous-constructs "Permalink to this heading")

Whether the opening brace should be placed on “next” or “same” line after
anonymous constructs (anonymous classes and lambda functions).

Allowed values: `'next'` and `'same'`

Default value: `'same'`

### `position_after_control_structures`[¶](https://cs.symfony.com/doc/rules/basic/braces.html#position-after-control-structures "Permalink to this heading")

Whether the opening brace should be placed on “next” or “same” line after
control structures.

Allowed values: `'next'` and `'same'`

Default value: `'same'`

### `position_after_functions_and_oop_constructs`[¶](https://cs.symfony.com/doc/rules/basic/braces.html#position-after-functions-and-oop-constructs "Permalink to this heading")

Whether the opening brace should be placed on “next” or “same” line after classy
constructs (non-anonymous classes, interfaces, traits, methods and non-lambda
functions).

Allowed values: `'next'` and `'same'`

Default value: `'next'`

## Examples[¶](https://cs.symfony.com/doc/rules/basic/braces.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/basic/braces.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php

-class Foo {
-    public function bar($baz) {
-        if ($baz = 900) echo "Hello!";
+class Foo
+{
+    public function bar($baz)
+    {
+        if ($baz = 900) {
+            echo "Hello!";
+        }

-        if ($baz = 9000)
+        if ($baz = 9000) {
             echo "Wait!";
+        }

-        if ($baz == true)
-        {
+        if ($baz == true) {
             echo "Why?";
-        }
-        else
-        {
+        } else {
             echo "Ha?";
         }

-        if (is_array($baz))
-            foreach ($baz as $b)
-            {
+        if (is_array($baz)) {
+            foreach ($baz as $b) {
                 echo $b;
             }
+        }
     }
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/basic/braces.html#example-2 "Permalink to this heading")

With configuration: `['allow_single_line_closure' => true]`.

```
--- Original
+++ New
 <?php
 $positive = function ($item) { return $item >= 0; };
 $negative = function ($item) {
-                return $item < 0; };
+    return $item < 0;
+};
```

### Example #3[¶](https://cs.symfony.com/doc/rules/basic/braces.html#example-3 "Permalink to this heading")

With configuration: `['position_after_functions_and_oop_constructs' => 'same']`.

```
--- Original
+++ New
 <?php

-class Foo
-{
-    public function bar($baz)
-    {
-        if ($baz = 900) echo "Hello!";
+class Foo {
+    public function bar($baz) {
+        if ($baz = 900) {
+            echo "Hello!";
+        }

-        if ($baz = 9000)
+        if ($baz = 9000) {
             echo "Wait!";
+        }

-        if ($baz == true)
-        {
+        if ($baz == true) {
             echo "Why?";
-        }
-        else
-        {
+        } else {
             echo "Ha?";
         }

-        if (is_array($baz))
-            foreach ($baz as $b)
-            {
+        if (is_array($baz)) {
+            foreach ($baz as $b) {
                 echo $b;
             }
+        }
     }
 }
```

## References[¶](https://cs.symfony.com/doc/rules/basic/braces.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Basic\BracesFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Basic/BracesFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Basic\BracesFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Basic/BracesFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
