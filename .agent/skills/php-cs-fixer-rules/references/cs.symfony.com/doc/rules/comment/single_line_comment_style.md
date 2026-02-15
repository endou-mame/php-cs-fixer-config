---
title: "Rule single_line_comment_style - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/comment/single_line_comment_style"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `single_line_comment_style`[¶](https://cs.symfony.com/doc/rules/comment/single_line_comment_style.html#rule-single-line-comment-style "Permalink to this heading")

Single-line comments and multi-line comments with only one line of actual
content should use the `//` syntax.

## Warning[¶](https://cs.symfony.com/doc/rules/comment/single_line_comment_style.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/comment/single_line_comment_style.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `comment_types`.

## Configuration[¶](https://cs.symfony.com/doc/rules/comment/single_line_comment_style.html#configuration "Permalink to this heading")

### `comment_types`[¶](https://cs.symfony.com/doc/rules/comment/single_line_comment_style.html#comment-types "Permalink to this heading")

List of comment types to fix.

Allowed values: a subset of `['asterisk', 'hash']`

Default value: `['asterisk', 'hash']`

## Examples[¶](https://cs.symfony.com/doc/rules/comment/single_line_comment_style.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/comment/single_line_comment_style.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-/* asterisk comment */
+// asterisk comment
 $a = 1;

-# hash comment
+// hash comment
 $b = 2;

 /*
  * multi-line
  * comment
  */
 $c = 3;
```

### Example #2[¶](https://cs.symfony.com/doc/rules/comment/single_line_comment_style.html#example-2 "Permalink to this heading")

With configuration: `['comment_types' => ['asterisk']]`.

```
--- Original
+++ New
 <?php
-/* first comment */
+// first comment
 $a = 1;

-/*
- * second comment
- */
+// second comment
 $b = 2;

 /*
  * third
  * comment
  */
 $c = 3;
```

### Example #3[¶](https://cs.symfony.com/doc/rules/comment/single_line_comment_style.html#example-3 "Permalink to this heading")

With configuration: `['comment_types' => ['hash']]`.

```
--- Original
+++ New
-<?php # comment
+<?php // comment
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/comment/single_line_comment_style.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html) with config:

  `['comment_types' => ['hash']]`

## References[¶](https://cs.symfony.com/doc/rules/comment/single_line_comment_style.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Comment\SingleLineCommentStyleFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Comment/SingleLineCommentStyleFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Comment\SingleLineCommentStyleFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Comment/SingleLineCommentStyleFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
