---
title: "Rule semicolon_after_instruction - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/semicolon/semicolon_after_instruction"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `semicolon_after_instruction`[¶](https://cs.symfony.com/doc/rules/semicolon/semicolon_after_instruction.html#rule-semicolon-after-instruction "Permalink to this heading")

Instructions must be terminated with a semicolon.

## Examples[¶](https://cs.symfony.com/doc/rules/semicolon/semicolon_after_instruction.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/semicolon/semicolon_after_instruction.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
-<?php echo 1 ?>
+<?php echo 1; ?>
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/semicolon/semicolon_after_instruction.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/semicolon/semicolon_after_instruction.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Semicolon\SemicolonAfterInstructionFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Semicolon/SemicolonAfterInstructionFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Semicolon\SemicolonAfterInstructionFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Semicolon/SemicolonAfterInstructionFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
