---
title: "Rule trailing_comma_in_multiline - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/control_structure/trailing_comma_in_multiline"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `trailing_comma_in_multiline`[¶](https://cs.symfony.com/doc/rules/control_structure/trailing_comma_in_multiline.html#rule-trailing-comma-in-multiline "Permalink to this heading")

Arguments lists, array destructuring lists, arrays that are multi-line,
`match`-lines and parameters lists must have a trailing comma.

## Warning[¶](https://cs.symfony.com/doc/rules/control_structure/trailing_comma_in_multiline.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/control_structure/trailing_comma_in_multiline.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `after_heredoc`,
`elements`.

## Configuration[¶](https://cs.symfony.com/doc/rules/control_structure/trailing_comma_in_multiline.html#configuration "Permalink to this heading")

### `after_heredoc`[¶](https://cs.symfony.com/doc/rules/control_structure/trailing_comma_in_multiline.html#after-heredoc "Permalink to this heading")

Whether a trailing comma should also be placed after heredoc end.

Allowed types: `bool`

Default value: `false`

Default value (future-mode): `true`

### `elements`[¶](https://cs.symfony.com/doc/rules/control_structure/trailing_comma_in_multiline.html#elements "Permalink to this heading")

Where to fix multiline trailing comma (PHP >= 8.0 for `parameters` and
`match`).

Allowed values: a subset of `['arguments', 'array_destructuring', 'arrays', 'match', 'parameters']`

Default value: `['arrays']`

## Examples[¶](https://cs.symfony.com/doc/rules/control_structure/trailing_comma_in_multiline.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/control_structure/trailing_comma_in_multiline.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 array(
     1,
-    2
+    2,
 );
```

### Example #2[¶](https://cs.symfony.com/doc/rules/control_structure/trailing_comma_in_multiline.html#example-2 "Permalink to this heading")

With configuration: `['after_heredoc' => true]`.

```
--- Original
+++ New
 <?php
     $x = [
         'foo',
         <<<EOD
             bar
-            EOD
+            EOD,
     ];
```

### Example #3[¶](https://cs.symfony.com/doc/rules/control_structure/trailing_comma_in_multiline.html#example-3 "Permalink to this heading")

With configuration: `['elements' => ['arguments']]`.

```
--- Original
+++ New
 <?php
 foo(
     1,
-    2
+    2,
 );
```

### Example #4[¶](https://cs.symfony.com/doc/rules/control_structure/trailing_comma_in_multiline.html#example-4 "Permalink to this heading")

With configuration: `['elements' => ['parameters']]`.

```
--- Original
+++ New
 <?php
 function foo(
     $x,
-    $y
+    $y,
 )
 {
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/control_structure/trailing_comma_in_multiline.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)* with config:

  `['after_heredoc' => true, 'elements' => ['arguments', 'array_destructuring', 'arrays', 'match', 'parameters']]`
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html) with config:

  `['after_heredoc' => true, 'elements' => ['arguments', 'array_destructuring', 'arrays', 'match', 'parameters']]`
* [@PER-CS2.0](https://cs.symfony.com/doc/ruleSets/PER-CS2.0.html) *(deprecated)* with config:

  `['after_heredoc' => true, 'elements' => ['arguments', 'array_destructuring', 'arrays', 'match', 'parameters']]`
* [@PER-CS2x0](https://cs.symfony.com/doc/ruleSets/PER-CS2x0.html) with config:

  `['after_heredoc' => true, 'elements' => ['arguments', 'array_destructuring', 'arrays', 'match', 'parameters']]`
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)* with config:

  `['after_heredoc' => true, 'elements' => ['arguments', 'array_destructuring', 'arrays', 'match', 'parameters']]`
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html) with config:

  `['after_heredoc' => true, 'elements' => ['arguments', 'array_destructuring', 'arrays', 'match', 'parameters']]`
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
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html) with config:

  `['after_heredoc' => true, 'elements' => ['array_destructuring', 'arrays']]`
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html) with config:

  `['after_heredoc' => true, 'elements' => ['array_destructuring', 'arrays', 'match', 'parameters']]`

## References[¶](https://cs.symfony.com/doc/rules/control_structure/trailing_comma_in_multiline.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ControlStructure\TrailingCommaInMultilineFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ControlStructure/TrailingCommaInMultilineFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ControlStructure\TrailingCommaInMultilineFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ControlStructure/TrailingCommaInMultilineFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
