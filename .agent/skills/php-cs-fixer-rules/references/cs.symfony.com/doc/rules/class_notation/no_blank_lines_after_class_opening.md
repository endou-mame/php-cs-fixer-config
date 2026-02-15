---
title: "Rule no_blank_lines_after_class_opening - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/class_notation/no_blank_lines_after_class_opening"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_blank_lines_after_class_opening`[¶](https://cs.symfony.com/doc/rules/class_notation/no_blank_lines_after_class_opening.html#rule-no-blank-lines-after-class-opening "Permalink to this heading")

There should be no empty lines after class opening brace.

## Examples[¶](https://cs.symfony.com/doc/rules/class_notation/no_blank_lines_after_class_opening.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/class_notation/no_blank_lines_after_class_opening.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 final class Sample
 {
-
     protected function foo()
     {
     }
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/class_notation/no_blank_lines_after_class_opening.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)*
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html)
* [@PER-CS1.0](https://cs.symfony.com/doc/ruleSets/PER-CS1.0.html) *(deprecated)*
* [@PER-CS1x0](https://cs.symfony.com/doc/ruleSets/PER-CS1x0.html)
* [@PER-CS2.0](https://cs.symfony.com/doc/ruleSets/PER-CS2.0.html) *(deprecated)*
* [@PER-CS2x0](https://cs.symfony.com/doc/ruleSets/PER-CS2x0.html)
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)*
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html)
* [@PSR12](https://cs.symfony.com/doc/ruleSets/PSR12.html)
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/class_notation/no_blank_lines_after_class_opening.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ClassNotation\NoBlankLinesAfterClassOpeningFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ClassNotation/NoBlankLinesAfterClassOpeningFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ClassNotation\NoBlankLinesAfterClassOpeningFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ClassNotation/NoBlankLinesAfterClassOpeningFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
