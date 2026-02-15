---
title: "Rule switch_case_space - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/control_structure/switch_case_space"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `switch_case_space`[¶](https://cs.symfony.com/doc/rules/control_structure/switch_case_space.html#rule-switch-case-space "Permalink to this heading")

Removes extra spaces between colon and case value.

## Examples[¶](https://cs.symfony.com/doc/rules/control_structure/switch_case_space.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/control_structure/switch_case_space.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
     switch($a) {
-        case 1   :
+        case 1:
             break;
-        default     :
+        default:
             return 2;
     }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/control_structure/switch_case_space.html#rule-sets "Permalink to this heading")

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

## References[¶](https://cs.symfony.com/doc/rules/control_structure/switch_case_space.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ControlStructure\SwitchCaseSpaceFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ControlStructure/SwitchCaseSpaceFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ControlStructure\SwitchCaseSpaceFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ControlStructure/SwitchCaseSpaceFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
