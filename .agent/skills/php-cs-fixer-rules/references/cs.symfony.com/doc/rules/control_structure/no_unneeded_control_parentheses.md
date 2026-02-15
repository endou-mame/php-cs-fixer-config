---
title: "Rule no_unneeded_control_parentheses - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/control_structure/no_unneeded_control_parentheses"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_unneeded_control_parentheses`[¶](https://cs.symfony.com/doc/rules/control_structure/no_unneeded_control_parentheses.html#rule-no-unneeded-control-parentheses "Permalink to this heading")

Removes unneeded parentheses around control statements.

## Warning[¶](https://cs.symfony.com/doc/rules/control_structure/no_unneeded_control_parentheses.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/control_structure/no_unneeded_control_parentheses.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `statements`.

## Configuration[¶](https://cs.symfony.com/doc/rules/control_structure/no_unneeded_control_parentheses.html#configuration "Permalink to this heading")

### `statements`[¶](https://cs.symfony.com/doc/rules/control_structure/no_unneeded_control_parentheses.html#statements "Permalink to this heading")

List of control statements to fix.

Allowed values: a subset of `['break', 'clone', 'continue', 'echo_print', 'negative_instanceof', 'others', 'return', 'switch_case', 'yield', 'yield_from']`

Default value: `['break', 'clone', 'continue', 'echo_print', 'return', 'switch_case', 'yield']`

## Examples[¶](https://cs.symfony.com/doc/rules/control_structure/no_unneeded_control_parentheses.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/control_structure/no_unneeded_control_parentheses.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-while ($x) { while ($y) { break (2); } }
-clone($a);
-while ($y) { continue (2); }
-echo("foo");
-print("foo");
-return (1 + 2);
-switch ($a) { case($x); }
-yield(2);
+while ($x) { while ($y) { break 2; } }
+clone $a;
+while ($y) { continue 2; }
+echo "foo";
+print "foo";
+return 1 + 2;
+switch ($a) { case $x; }
+yield 2;
```

### Example #2[¶](https://cs.symfony.com/doc/rules/control_structure/no_unneeded_control_parentheses.html#example-2 "Permalink to this heading")

With configuration: `['statements' => ['break', 'continue']]`.

```
--- Original
+++ New
 <?php
-while ($x) { while ($y) { break (2); } }
+while ($x) { while ($y) { break 2; } }

 clone($a);

-while ($y) { continue (2); }
+while ($y) { continue 2; }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/control_structure/no_unneeded_control_parentheses.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html) with config:

  `['statements' => ['break', 'clone', 'continue', 'echo_print', 'negative_instanceof', 'others', 'return', 'switch_case', 'yield', 'yield_from']]`
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html) with config:

  `['statements' => ['break', 'clone', 'continue', 'echo_print', 'negative_instanceof', 'others', 'return', 'switch_case', 'yield', 'yield_from']]`

## References[¶](https://cs.symfony.com/doc/rules/control_structure/no_unneeded_control_parentheses.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ControlStructure\NoUnneededControlParenthesesFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ControlStructure/NoUnneededControlParenthesesFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ControlStructure\NoUnneededControlParenthesesFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ControlStructure/NoUnneededControlParenthesesFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
