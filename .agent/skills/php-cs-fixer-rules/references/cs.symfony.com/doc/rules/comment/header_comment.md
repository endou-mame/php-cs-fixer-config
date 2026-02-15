---
title: "Rule header_comment - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/comment/header_comment"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `header_comment`[¶](https://cs.symfony.com/doc/rules/comment/header_comment.html#rule-header-comment "Permalink to this heading")

Add, replace or remove header comment.

## Warning[¶](https://cs.symfony.com/doc/rules/comment/header_comment.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/comment/header_comment.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `comment_type`,
`header`, `location`, `separate`, `validator`.

## Configuration[¶](https://cs.symfony.com/doc/rules/comment/header_comment.html#configuration "Permalink to this heading")

### `comment_type`[¶](https://cs.symfony.com/doc/rules/comment/header_comment.html#comment-type "Permalink to this heading")

Comment syntax type.

Allowed values: `'comment'` and `'PHPDoc'`

Default value: `'comment'`

### `header`[¶](https://cs.symfony.com/doc/rules/comment/header_comment.html#header "Permalink to this heading")

Proper header content.

Allowed types: `string`

This option is required.

### `location`[¶](https://cs.symfony.com/doc/rules/comment/header_comment.html#location "Permalink to this heading")

The location of the inserted header.

Allowed values: `'after_declare_strict'` and `'after_open'`

Default value: `'after_declare_strict'`

### `separate`[¶](https://cs.symfony.com/doc/rules/comment/header_comment.html#separate "Permalink to this heading")

Whether the header should be separated from the file content with a new line.

Allowed values: `'both'`, `'bottom'`, `'none'` and `'top'`

Default value: `'both'`

### `validator`[¶](https://cs.symfony.com/doc/rules/comment/header_comment.html#validator "Permalink to this heading")

RegEx validator for header content.

Allowed types: `string` and `null`

Default value: `null`

## Examples[¶](https://cs.symfony.com/doc/rules/comment/header_comment.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/comment/header_comment.html#example-1 "Permalink to this heading")

With configuration: `['header' => 'Made with love.']`.

```
--- Original
+++ New
 <?php
 declare(strict_types=1);

+/*
+ * Made with love.
+ */
+
 namespace A\B;

 echo 1;
```

### Example #2[¶](https://cs.symfony.com/doc/rules/comment/header_comment.html#example-2 "Permalink to this heading")

With configuration: `['header' => 'Made with love.', 'comment_type' => 'PHPDoc', 'location' => 'after_open', 'separate' => 'bottom']`.

```
--- Original
+++ New
 <?php
+/**
+ * Made with love.
+ */
+
 declare(strict_types=1);

 namespace A\B;

 echo 1;
```

### Example #3[¶](https://cs.symfony.com/doc/rules/comment/header_comment.html#example-3 "Permalink to this heading")

With configuration: `['header' => 'Made with love.', 'comment_type' => 'comment', 'location' => 'after_declare_strict']`.

```
--- Original
+++ New
 <?php
 declare(strict_types=1);

+/*
+ * Made with love.
+ */
+
 namespace A\B;

 echo 1;
```

### Example #4[¶](https://cs.symfony.com/doc/rules/comment/header_comment.html#example-4 "Permalink to this heading")

With configuration: `['header' => 'Made with love.', 'validator' => '/Made with love(?P<EXTRA>.*)??/s', 'comment_type' => 'comment', 'location' => 'after_declare_strict']`.

```
--- Original
+++ New
 <?php
 declare(strict_types=1);
+
 /*
  * Made with love.
  *
  * Extra content.
  */
+
 namespace A\B;

 echo 1;
```

### Example #5[¶](https://cs.symfony.com/doc/rules/comment/header_comment.html#example-5 "Permalink to this heading")

With configuration: `['header' => '']`.

```
--- Original
+++ New
 <?php
 declare(strict_types=1);

-/*
- * Comment is not wanted here.
- */
-
 namespace A\B;

 echo 1;
```

## References[¶](https://cs.symfony.com/doc/rules/comment/header_comment.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Comment\HeaderCommentFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Comment/HeaderCommentFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Comment\HeaderCommentFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Comment/HeaderCommentFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
