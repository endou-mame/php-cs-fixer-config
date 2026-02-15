---
title: "Rule blank_line_after_opening_tag - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/php_tag/blank_line_after_opening_tag"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `blank_line_after_opening_tag`[¶](https://cs.symfony.com/doc/rules/php_tag/blank_line_after_opening_tag.html#rule-blank-line-after-opening-tag "Permalink to this heading")

Ensure there is no code on the same line as the PHP open tag and it is followed
by a blank line.

## Examples[¶](https://cs.symfony.com/doc/rules/php_tag/blank_line_after_opening_tag.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/php_tag/blank_line_after_opening_tag.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
-<?php $a = 1;
+<?php
+
+$a = 1;
 $b = 1;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/php_tag/blank_line_after_opening_tag.html#rule-sets "Permalink to this heading")

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

## References[¶](https://cs.symfony.com/doc/rules/php_tag/blank_line_after_opening_tag.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\PhpTag\BlankLineAfterOpeningTagFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/PhpTag/BlankLineAfterOpeningTagFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\PhpTag\BlankLineAfterOpeningTagFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/PhpTag/BlankLineAfterOpeningTagFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
