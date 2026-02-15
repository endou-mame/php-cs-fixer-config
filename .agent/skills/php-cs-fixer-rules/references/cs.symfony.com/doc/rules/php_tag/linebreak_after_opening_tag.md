---
title: "Rule linebreak_after_opening_tag - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/php_tag/linebreak_after_opening_tag"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `linebreak_after_opening_tag`[¶](https://cs.symfony.com/doc/rules/php_tag/linebreak_after_opening_tag.html#rule-linebreak-after-opening-tag "Permalink to this heading")

Ensure there is no code on the same line as the PHP open tag.

## Examples[¶](https://cs.symfony.com/doc/rules/php_tag/linebreak_after_opening_tag.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/php_tag/linebreak_after_opening_tag.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
-<?php $a = 1;
+<?php
+$a = 1;
 $b = 3;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/php_tag/linebreak_after_opening_tag.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/php_tag/linebreak_after_opening_tag.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\PhpTag\LinebreakAfterOpeningTagFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/PhpTag/LinebreakAfterOpeningTagFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\PhpTag\LinebreakAfterOpeningTagFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/PhpTag/LinebreakAfterOpeningTagFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
