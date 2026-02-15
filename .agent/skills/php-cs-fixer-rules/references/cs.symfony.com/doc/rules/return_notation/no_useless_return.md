---
title: "Rule no_useless_return - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/return_notation/no_useless_return"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_useless_return`[¶](https://cs.symfony.com/doc/rules/return_notation/no_useless_return.html#rule-no-useless-return "Permalink to this heading")

There should not be an empty `return` statement at the end of a function.

## Examples[¶](https://cs.symfony.com/doc/rules/return_notation/no_useless_return.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/return_notation/no_useless_return.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 function example($b) {
     if ($b) {
         return;
     }
-    return;
+
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/return_notation/no_useless_return.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/return_notation/no_useless_return.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ReturnNotation\NoUselessReturnFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ReturnNotation/NoUselessReturnFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ReturnNotation\NoUselessReturnFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ReturnNotation/NoUselessReturnFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
