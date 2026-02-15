---
title: "Rule no_empty_comment - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/comment/no_empty_comment"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_empty_comment`[¶](https://cs.symfony.com/doc/rules/comment/no_empty_comment.html#rule-no-empty-comment "Permalink to this heading")

There should not be any empty comments.

## Examples[¶](https://cs.symfony.com/doc/rules/comment/no_empty_comment.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/comment/no_empty_comment.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-//
-#
-/* */
+
+
+
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/comment/no_empty_comment.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/comment/no_empty_comment.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Comment\NoEmptyCommentFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Comment/NoEmptyCommentFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Comment\NoEmptyCommentFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Comment/NoEmptyCommentFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
