---
title: "Rule return_assignment - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/return_notation/return_assignment"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `return_assignment`[¶](https://cs.symfony.com/doc/rules/return_notation/return_assignment.html#rule-return-assignment "Permalink to this heading")

Local, dynamic and directly referenced variables should not be assigned and
directly returned by a function or method.

## Examples[¶](https://cs.symfony.com/doc/rules/return_notation/return_assignment.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/return_notation/return_assignment.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 function a() {
-    $a = 1;
-    return $a;
+    return 1;
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/return_notation/return_assignment.html#rule-sets "Permalink to this heading")

The rule is part of the following rule set:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)

## References[¶](https://cs.symfony.com/doc/rules/return_notation/return_assignment.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ReturnNotation\ReturnAssignmentFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ReturnNotation/ReturnAssignmentFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ReturnNotation\ReturnAssignmentFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ReturnNotation/ReturnAssignmentFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
