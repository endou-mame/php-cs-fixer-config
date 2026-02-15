---
title: "Rule switch_case_semicolon_to_colon - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/control_structure/switch_case_semicolon_to_colon"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `switch_case_semicolon_to_colon`[¶](https://cs.symfony.com/doc/rules/control_structure/switch_case_semicolon_to_colon.html#rule-switch-case-semicolon-to-colon "Permalink to this heading")

A case should be followed by a colon and not a semicolon.

## Examples[¶](https://cs.symfony.com/doc/rules/control_structure/switch_case_semicolon_to_colon.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/control_structure/switch_case_semicolon_to_colon.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
     switch ($a) {
-        case 1;
+        case 1:
             break;
-        default;
+        default:
             break;
     }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/control_structure/switch_case_semicolon_to_colon.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)*
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html)
* [@PER-CS1.0](https://cs.symfony.com/doc/ruleSets/PER-CS1.0.html) *(deprecated)*
* [@PER-CS1x0](https://cs.symfony.com/doc/ruleSets/PER-CS1x0.html)
* [@PER-CS2.0](https://cs.symfony.com/doc/ruleSets/PER-CS2.0.html) *(deprecated)*
* [@PER-CS2x0](https://cs.symfony.com/doc/ruleSets/PER-CS2x0.html)
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)*
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html)
* [@PHP8x5Migration](https://cs.symfony.com/doc/ruleSets/PHP8x5Migration.html)
* [@PHP85Migration](https://cs.symfony.com/doc/ruleSets/PHP85Migration.html) *(deprecated)*
* [@PSR2](https://cs.symfony.com/doc/ruleSets/PSR2.html)
* [@PSR12](https://cs.symfony.com/doc/ruleSets/PSR12.html)
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/control_structure/switch_case_semicolon_to_colon.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ControlStructure\SwitchCaseSemicolonToColonFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ControlStructure/SwitchCaseSemicolonToColonFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ControlStructure\SwitchCaseSemicolonToColonFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ControlStructure/SwitchCaseSemicolonToColonFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
