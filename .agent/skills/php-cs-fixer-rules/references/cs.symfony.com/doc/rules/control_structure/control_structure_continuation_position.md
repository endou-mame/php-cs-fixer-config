---
title: "Rule control_structure_continuation_position - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/control_structure/control_structure_continuation_position"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `control_structure_continuation_position`[¶](https://cs.symfony.com/doc/rules/control_structure/control_structure_continuation_position.html#rule-control-structure-continuation-position "Permalink to this heading")

Control structure continuation keyword must be on the configured line.

## Warning[¶](https://cs.symfony.com/doc/rules/control_structure/control_structure_continuation_position.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/control_structure/control_structure_continuation_position.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `position`.

## Configuration[¶](https://cs.symfony.com/doc/rules/control_structure/control_structure_continuation_position.html#configuration "Permalink to this heading")

### `position`[¶](https://cs.symfony.com/doc/rules/control_structure/control_structure_continuation_position.html#position "Permalink to this heading")

The position of the keyword that continues the control structure.

Allowed values: `'next_line'` and `'same_line'`

Default value: `'same_line'`

## Examples[¶](https://cs.symfony.com/doc/rules/control_structure/control_structure_continuation_position.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/control_structure/control_structure_continuation_position.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 if ($baz == true) {
     echo "foo";
-}
-else {
+} else {
     echo "bar";
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/control_structure/control_structure_continuation_position.html#example-2 "Permalink to this heading")

With configuration: `['position' => 'next_line']`.

```
--- Original
+++ New
 <?php
 if ($baz == true) {
     echo "foo";
-} else {
+}
+else {
     echo "bar";
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/control_structure/control_structure_continuation_position.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)*
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html)
* [@PER-CS1.0](https://cs.symfony.com/doc/ruleSets/PER-CS1.0.html) *(deprecated)*
* [@PER-CS1x0](https://cs.symfony.com/doc/ruleSets/PER-CS1x0.html)
* [@PER-CS2.0](https://cs.symfony.com/doc/ruleSets/PER-CS2.0.html) *(deprecated)*
* [@PER-CS2x0](https://cs.symfony.com/doc/ruleSets/PER-CS2x0.html)
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)*
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html)
* [@PSR2](https://cs.symfony.com/doc/ruleSets/PSR2.html)
* [@PSR12](https://cs.symfony.com/doc/ruleSets/PSR12.html)
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/control_structure/control_structure_continuation_position.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ControlStructure\ControlStructureContinuationPositionFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ControlStructure/ControlStructureContinuationPositionFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ControlStructure\ControlStructureContinuationPositionFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ControlStructure/ControlStructureContinuationPositionFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
