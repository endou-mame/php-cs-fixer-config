---
title: "Rule multiline_string_to_heredoc - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/string_notation/multiline_string_to_heredoc"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `multiline_string_to_heredoc`[¶](https://cs.symfony.com/doc/rules/string_notation/multiline_string_to_heredoc.html#rule-multiline-string-to-heredoc "Permalink to this heading")

Convert multiline string to `heredoc` or `nowdoc`.

## Examples[¶](https://cs.symfony.com/doc/rules/string_notation/multiline_string_to_heredoc.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/string_notation/multiline_string_to_heredoc.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-$a = 'line1
-line2';
+$a = <<<'EOD'
+line1
+line2
+EOD;
```

### Example #2[¶](https://cs.symfony.com/doc/rules/string_notation/multiline_string_to_heredoc.html#example-2 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-$a = "line1
-{$obj->getName()}";
+$a = <<<EOD
+line1
+{$obj->getName()}
+EOD;
```

## References[¶](https://cs.symfony.com/doc/rules/string_notation/multiline_string_to_heredoc.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\StringNotation\MultilineStringToHeredocFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/StringNotation/MultilineStringToHeredocFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\StringNotation\MultilineStringToHeredocFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/StringNotation/MultilineStringToHeredocFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
