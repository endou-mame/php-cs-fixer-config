---
title: "Rule heredoc_to_nowdoc - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/string_notation/heredoc_to_nowdoc"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `heredoc_to_nowdoc`[¶](https://cs.symfony.com/doc/rules/string_notation/heredoc_to_nowdoc.html#rule-heredoc-to-nowdoc "Permalink to this heading")

Convert `heredoc` to `nowdoc` where possible.

## Examples[¶](https://cs.symfony.com/doc/rules/string_notation/heredoc_to_nowdoc.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/string_notation/heredoc_to_nowdoc.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
-<?php $a = <<<"TEST"
+<?php $a = <<<'TEST'
 Foo
 TEST;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/string_notation/heredoc_to_nowdoc.html#rule-sets "Permalink to this heading")

The rule is part of the following rule set:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)

## References[¶](https://cs.symfony.com/doc/rules/string_notation/heredoc_to_nowdoc.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\StringNotation\HeredocToNowdocFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/StringNotation/HeredocToNowdocFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\StringNotation\HeredocToNowdocFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/StringNotation/HeredocToNowdocFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
