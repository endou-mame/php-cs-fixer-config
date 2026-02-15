---
title: "Rule multiline_comment_opening_closing - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/comment/multiline_comment_opening_closing"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `multiline_comment_opening_closing`[¶](https://cs.symfony.com/doc/rules/comment/multiline_comment_opening_closing.html#rule-multiline-comment-opening-closing "Permalink to this heading")

DocBlocks must start with two asterisks, multiline comments must start with a
single asterisk, after the opening slash. Both must end with a single asterisk
before the closing slash.

## Examples[¶](https://cs.symfony.com/doc/rules/comment/multiline_comment_opening_closing.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/comment/multiline_comment_opening_closing.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php

-/******
+/*
  * Multiline comment with arbitrary asterisks count
- ******/
+ */

-/**\
+/*\
  * Multiline comment that seems a DocBlock
  */

 /**
  * DocBlock with arbitrary asterisk count at the end
- **/
+ */
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/comment/multiline_comment_opening_closing.html#rule-sets "Permalink to this heading")

The rule is part of the following rule set:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)

## References[¶](https://cs.symfony.com/doc/rules/comment/multiline_comment_opening_closing.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Comment\MultilineCommentOpeningClosingFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Comment/MultilineCommentOpeningClosingFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Comment\MultilineCommentOpeningClosingFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Comment/MultilineCommentOpeningClosingFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
