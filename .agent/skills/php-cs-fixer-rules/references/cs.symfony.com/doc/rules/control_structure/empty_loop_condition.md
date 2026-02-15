---
title: "Rule empty_loop_condition - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/control_structure/empty_loop_condition"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `empty_loop_condition`[¶](https://cs.symfony.com/doc/rules/control_structure/empty_loop_condition.html#rule-empty-loop-condition "Permalink to this heading")

Empty loop-condition must be in configured style.

## Warning[¶](https://cs.symfony.com/doc/rules/control_structure/empty_loop_condition.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/control_structure/empty_loop_condition.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `style`.

## Configuration[¶](https://cs.symfony.com/doc/rules/control_structure/empty_loop_condition.html#configuration "Permalink to this heading")

### `style`[¶](https://cs.symfony.com/doc/rules/control_structure/empty_loop_condition.html#style "Permalink to this heading")

Style of empty loop-condition.

Allowed values: `'for'` and `'while'`

Default value: `'while'`

## Examples[¶](https://cs.symfony.com/doc/rules/control_structure/empty_loop_condition.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/control_structure/empty_loop_condition.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-for(;;) {
+while (true) {
     foo();
 }

-do {
+while (true) {
     foo();
-} while(true); // do while
+}  // do while
```

### Example #2[¶](https://cs.symfony.com/doc/rules/control_structure/empty_loop_condition.html#example-2 "Permalink to this heading")

With configuration: `['style' => 'for']`.

```
--- Original
+++ New
 <?php
-while(true) {
+for(;;) {
     foo();
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/control_structure/empty_loop_condition.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/control_structure/empty_loop_condition.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ControlStructure\EmptyLoopConditionFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ControlStructure/EmptyLoopConditionFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ControlStructure\EmptyLoopConditionFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ControlStructure/EmptyLoopConditionFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
