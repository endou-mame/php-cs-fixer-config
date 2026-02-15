---
title: "Rule yoda_style - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/control_structure/yoda_style"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `yoda_style`[¶](https://cs.symfony.com/doc/rules/control_structure/yoda_style.html#rule-yoda-style "Permalink to this heading")

Write conditions in Yoda style (`true`), non-Yoda style (`['equal' => false,
'identical' => false, 'less_and_greater' => false]`) or ignore those conditions
(`null`) based on configuration.

## Warning[¶](https://cs.symfony.com/doc/rules/control_structure/yoda_style.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/control_structure/yoda_style.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options:
`always_move_variable`, `equal`, `identical`, `less_and_greater`.

## Configuration[¶](https://cs.symfony.com/doc/rules/control_structure/yoda_style.html#configuration "Permalink to this heading")

### `always_move_variable`[¶](https://cs.symfony.com/doc/rules/control_structure/yoda_style.html#always-move-variable "Permalink to this heading")

Whether variables should always be on non assignable side when applying Yoda
style.

Allowed types: `bool`

Default value: `false`

### `equal`[¶](https://cs.symfony.com/doc/rules/control_structure/yoda_style.html#equal "Permalink to this heading")

Style for equal (`==`, `!=`) statements.

Allowed types: `bool` and `null`

Default value: `true`

### `identical`[¶](https://cs.symfony.com/doc/rules/control_structure/yoda_style.html#identical "Permalink to this heading")

Style for identical (`===`, `!==`) statements.

Allowed types: `bool` and `null`

Default value: `true`

### `less_and_greater`[¶](https://cs.symfony.com/doc/rules/control_structure/yoda_style.html#less-and-greater "Permalink to this heading")

Style for less and greater than (`<`, `<=`, `>`, `>=`) statements.

Allowed types: `bool` and `null`

Default value: `null`

## Examples[¶](https://cs.symfony.com/doc/rules/control_structure/yoda_style.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/control_structure/yoda_style.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-    if ($a === null) {
+    if (null === $a) {
         echo "null";
     }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/control_structure/yoda_style.html#example-2 "Permalink to this heading")

With configuration: `['equal' => true, 'identical' => false, 'less_and_greater' => null]`.

```
--- Original
+++ New
 <?php
-    $b = $c != 1;  // equal
-    $a = 1 === $b; // identical
+    $b = 1 != $c;  // equal
+    $a = $b === 1; // identical
     $c = $c > 3;   // less than
```

### Example #3[¶](https://cs.symfony.com/doc/rules/control_structure/yoda_style.html#example-3 "Permalink to this heading")

With configuration: `['always_move_variable' => true]`.

```
--- Original
+++ New
 <?php
-return $foo === count($bar);
+return count($bar) === $foo;
```

### Example #4[¶](https://cs.symfony.com/doc/rules/control_structure/yoda_style.html#example-4 "Permalink to this heading")

With configuration: `['equal' => false, 'identical' => false, 'less_and_greater' => false]`.

```
--- Original
+++ New
 <?php
     // Enforce non-Yoda style.
-    if (null === $a) {
+    if ($a === null) {
         echo "null";
     }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/control_structure/yoda_style.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/control_structure/yoda_style.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ControlStructure\YodaStyleFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ControlStructure/YodaStyleFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ControlStructure\YodaStyleFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ControlStructure/YodaStyleFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
