---
title: "Rule phpdoc_to_comment - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/phpdoc_to_comment"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `phpdoc_to_comment`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_to_comment.html#rule-phpdoc-to-comment "Permalink to this heading")

Docblocks should only be used on structural elements.

## Warning[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_to_comment.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_to_comment.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options:
`allow_before_return_statement`, `ignored_tags`.

## Configuration[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_to_comment.html#configuration "Permalink to this heading")

### `allow_before_return_statement`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_to_comment.html#allow-before-return-statement "Permalink to this heading")

Whether to allow PHPDoc before return statement.

Allowed types: `bool`

Default value: `false`

Default value (future-mode): `true`

### `ignored_tags`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_to_comment.html#ignored-tags "Permalink to this heading")

List of ignored tags (matched case insensitively).

Allowed types: `list<string>`

Default value: `[]`

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_to_comment.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_to_comment.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 $first = true;// needed because by default first docblock is never fixed.

-/** This should be a comment */
+/* This should be a comment */
 foreach($connections as $key => $sqlite) {
     $sqlite->open($path);
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_to_comment.html#example-2 "Permalink to this heading")

With configuration: `['ignored_tags' => ['todo']]`.

```
--- Original
+++ New
 <?php
 $first = true;// needed because by default first docblock is never fixed.

-/** This should be a comment */
+/* This should be a comment */
 foreach($connections as $key => $sqlite) {
     $sqlite->open($path);
 }

 /** @todo This should be a PHPDoc as the tag is on "ignored_tags" list */
 foreach($connections as $key => $sqlite) {
     $sqlite->open($path);
 }
```

### Example #3[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_to_comment.html#example-3 "Permalink to this heading")

With configuration: `['allow_before_return_statement' => true]`.

```
--- Original
+++ New
 <?php
 $first = true;// needed because by default first docblock is never fixed.

-/** This should be a comment */
+/* This should be a comment */
 foreach($connections as $key => $sqlite) {
     $sqlite->open($path);
 }

 function returnClassName() {
     /** @var class-string */
     return \StdClass::class;
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_to_comment.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html) with config:

  `['allow_before_return_statement' => false]`
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html) with config:

  `['allow_before_return_statement' => false]`

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_to_comment.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\PhpdocToCommentFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/PhpdocToCommentFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\PhpdocToCommentFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/PhpdocToCommentFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
