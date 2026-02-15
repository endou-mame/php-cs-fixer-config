---
title: "Rule operator_linebreak - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/operator/operator_linebreak"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `operator_linebreak`[¶](https://cs.symfony.com/doc/rules/operator/operator_linebreak.html#rule-operator-linebreak "Permalink to this heading")

Operators - when multiline - must always be at the beginning or at the end of
the line.

## Warning[¶](https://cs.symfony.com/doc/rules/operator/operator_linebreak.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/operator/operator_linebreak.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `only_booleans`,
`position`.

## Configuration[¶](https://cs.symfony.com/doc/rules/operator/operator_linebreak.html#configuration "Permalink to this heading")

### `only_booleans`[¶](https://cs.symfony.com/doc/rules/operator/operator_linebreak.html#only-booleans "Permalink to this heading")

Whether to limit operators to only boolean ones.

Allowed types: `bool`

Default value: `false`

### `position`[¶](https://cs.symfony.com/doc/rules/operator/operator_linebreak.html#position "Permalink to this heading")

Whether to place operators at the beginning or at the end of the line.

Allowed values: `'beginning'` and `'end'`

Default value: `'beginning'`

## Examples[¶](https://cs.symfony.com/doc/rules/operator/operator_linebreak.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/operator/operator_linebreak.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-$a = $b ||
-    $c;
-$d = $e +
-    $f;
+$a = $b
+    || $c;
+$d = $e
+    + $f;
```

### Example #2[¶](https://cs.symfony.com/doc/rules/operator/operator_linebreak.html#example-2 "Permalink to this heading")

With configuration: `['only_booleans' => true]`.

```
--- Original
+++ New
 <?php
-$a = $b ||
-    $c;
+$a = $b
+    || $c;
 $d = $e +
     $f;
```

### Example #3[¶](https://cs.symfony.com/doc/rules/operator/operator_linebreak.html#example-3 "Permalink to this heading")

With configuration: `['position' => 'end']`.

```
--- Original
+++ New
 <?php
-$a = $b
-    || $c;
-$d = $e
-    + $f;
+$a = $b ||
+    $c;
+$d = $e +
+    $f;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/operator/operator_linebreak.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)*
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html)
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)*
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html)
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html) with config:

  `['only_booleans' => true]`

## References[¶](https://cs.symfony.com/doc/rules/operator/operator_linebreak.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Operator\OperatorLinebreakFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Operator/OperatorLinebreakFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Operator\OperatorLinebreakFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Operator/OperatorLinebreakFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
