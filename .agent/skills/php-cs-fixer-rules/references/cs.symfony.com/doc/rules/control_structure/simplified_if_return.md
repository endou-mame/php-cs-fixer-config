---
title: "Rule simplified_if_return - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/control_structure/simplified_if_return"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `simplified_if_return`[¶](https://cs.symfony.com/doc/rules/control_structure/simplified_if_return.html#rule-simplified-if-return "Permalink to this heading")

Simplify `if` control structures that return the boolean result of their
condition.

## Examples[¶](https://cs.symfony.com/doc/rules/control_structure/simplified_if_return.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/control_structure/simplified_if_return.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-if ($foo) { return true; } return false;
+return (bool) ($foo)      ;
```

## References[¶](https://cs.symfony.com/doc/rules/control_structure/simplified_if_return.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ControlStructure\SimplifiedIfReturnFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ControlStructure/SimplifiedIfReturnFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ControlStructure\SimplifiedIfReturnFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ControlStructure/SimplifiedIfReturnFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
