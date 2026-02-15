---
title: "Rule single_line_comment_spacing - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/comment/single_line_comment_spacing"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `single_line_comment_spacing`[¶](https://cs.symfony.com/doc/rules/comment/single_line_comment_spacing.html#rule-single-line-comment-spacing "Permalink to this heading")

Single-line comments must have proper spacing.

## Examples[¶](https://cs.symfony.com/doc/rules/comment/single_line_comment_spacing.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/comment/single_line_comment_spacing.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-//comment 1
-#comment 2
-/*comment 3*/
+// comment 1
+# comment 2
+/* comment 3 */
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/comment/single_line_comment_spacing.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/comment/single_line_comment_spacing.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Comment\SingleLineCommentSpacingFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Comment/SingleLineCommentSpacingFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Comment\SingleLineCommentSpacingFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Comment/SingleLineCommentSpacingFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
