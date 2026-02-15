---
title: "Rule phpdoc_trim_consecutive_blank_line_separation - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/phpdoc_trim_consecutive_blank_line_separation"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `phpdoc_trim_consecutive_blank_line_separation`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_trim_consecutive_blank_line_separation.html#rule-phpdoc-trim-consecutive-blank-line-separation "Permalink to this heading")

Removes extra blank lines after summary and after description in PHPDoc.

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_trim_consecutive_blank_line_separation.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_trim_consecutive_blank_line_separation.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 /**
  * Summary.
  *
- *
  * Description that contain 4 lines,
  *
  *
  * while 2 of them are blank!
  *
- *
  * @param string $foo
- *
  *
  * @dataProvider provideFixCases
  */
 function fnc($foo) {}
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_trim_consecutive_blank_line_separation.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_trim_consecutive_blank_line_separation.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\PhpdocTrimConsecutiveBlankLineSeparationFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/PhpdocTrimConsecutiveBlankLineSeparationFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\PhpdocTrimConsecutiveBlankLineSeparationFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/PhpdocTrimConsecutiveBlankLineSeparationFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
