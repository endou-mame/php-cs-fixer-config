---
title: "Rule align_multiline_comment - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/align_multiline_comment"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `align_multiline_comment`[¶](https://cs.symfony.com/doc/rules/phpdoc/align_multiline_comment.html#rule-align-multiline-comment "Permalink to this heading")

Each line of multi-line DocComments must have an asterisk [PSR-5] and must be
aligned with the first one.

## Warning[¶](https://cs.symfony.com/doc/rules/phpdoc/align_multiline_comment.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/phpdoc/align_multiline_comment.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `comment_type`.

## Configuration[¶](https://cs.symfony.com/doc/rules/phpdoc/align_multiline_comment.html#configuration "Permalink to this heading")

### `comment_type`[¶](https://cs.symfony.com/doc/rules/phpdoc/align_multiline_comment.html#comment-type "Permalink to this heading")

Whether to fix PHPDoc comments only (`phpdocs_only`), any multi-line comment
whose lines all start with an asterisk (`phpdocs_like`) or any multi-line
comment (`all_multiline`).

Allowed values: `'all_multiline'`, `'phpdocs_like'` and `'phpdocs_only'`

Default value: `'phpdocs_only'`

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/align_multiline_comment.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/align_multiline_comment.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
     /**
-            * This is a DOC Comment
-with a line not prefixed with asterisk
-
-   */
+     * This is a DOC Comment
+     * with a line not prefixed with asterisk
+     *
+     */
```

### Example #2[¶](https://cs.symfony.com/doc/rules/phpdoc/align_multiline_comment.html#example-2 "Permalink to this heading")

With configuration: `['comment_type' => 'phpdocs_like']`.

```
--- Original
+++ New
 <?php
     /*
-            * This is a doc-like multiline comment
-*/
+     * This is a doc-like multiline comment
+     */
```

### Example #3[¶](https://cs.symfony.com/doc/rules/phpdoc/align_multiline_comment.html#example-3 "Permalink to this heading")

With configuration: `['comment_type' => 'all_multiline']`.

```
--- Original
+++ New
 <?php
     /*
-            * This is a doc-like multiline comment
+     * This is a doc-like multiline comment
 with a line not prefixed with asterisk

-   */
+     */
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/phpdoc/align_multiline_comment.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/align_multiline_comment.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\AlignMultilineCommentFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/AlignMultilineCommentFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\AlignMultilineCommentFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/AlignMultilineCommentFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
