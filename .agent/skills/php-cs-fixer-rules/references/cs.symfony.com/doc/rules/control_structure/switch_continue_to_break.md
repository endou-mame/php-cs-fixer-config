---
title: "Rule switch_continue_to_break - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/control_structure/switch_continue_to_break"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `switch_continue_to_break`[¶](https://cs.symfony.com/doc/rules/control_structure/switch_continue_to_break.html#rule-switch-continue-to-break "Permalink to this heading")

Switch case must not be ended with `continue` but with `break`.

## Examples[¶](https://cs.symfony.com/doc/rules/control_structure/switch_continue_to_break.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/control_structure/switch_continue_to_break.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 switch ($foo) {
     case 1:
-        continue;
+        break;
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/control_structure/switch_continue_to_break.html#example-2 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 switch ($foo) {
     case 1:
         while($bar) {
             do {
-                continue 3;
+                break 3;
             } while(false);

             if ($foo + 1 > 3) {
                 continue;
             }

-            continue 2;
+            break 2;
         }
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/control_structure/switch_continue_to_break.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/control_structure/switch_continue_to_break.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ControlStructure\SwitchContinueToBreakFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ControlStructure/SwitchContinueToBreakFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ControlStructure\SwitchContinueToBreakFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ControlStructure/SwitchContinueToBreakFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
