---
title: "Rule phpdoc_indent - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/phpdoc_indent"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `phpdoc_indent`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_indent.html#rule-phpdoc-indent "Permalink to this heading")

Docblocks should have the same indentation as the documented subject.

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_indent.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_indent.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 class DocBlocks
 {
-/**
- * Test constants
- */
+    /**
+     * Test constants
+     */
     const INDENT = 1;
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_indent.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_indent.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\PhpdocIndentFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/PhpdocIndentFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\PhpdocIndentFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/PhpdocIndentFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
