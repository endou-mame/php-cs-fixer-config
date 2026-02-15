---
title: "Rule no_break_comment - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/control_structure/no_break_comment"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_break_comment`[¶](https://cs.symfony.com/doc/rules/control_structure/no_break_comment.html#rule-no-break-comment "Permalink to this heading")

There must be a comment when fall-through is intentional in a non-empty case
body.

## Description[¶](https://cs.symfony.com/doc/rules/control_structure/no_break_comment.html#description "Permalink to this heading")

Adds a “no break” comment before fall-through cases, and removes it if there is
no fall-through.

## Warning[¶](https://cs.symfony.com/doc/rules/control_structure/no_break_comment.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/control_structure/no_break_comment.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `comment_text`.

## Configuration[¶](https://cs.symfony.com/doc/rules/control_structure/no_break_comment.html#configuration "Permalink to this heading")

### `comment_text`[¶](https://cs.symfony.com/doc/rules/control_structure/no_break_comment.html#comment-text "Permalink to this heading")

The text to use in the added comment and to detect it.

Allowed types: `string`

Default value: `'no break'`

## Examples[¶](https://cs.symfony.com/doc/rules/control_structure/no_break_comment.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/control_structure/no_break_comment.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 switch ($foo) {
     case 1:
         foo();
+        // no break
     case 2:
         bar();
-        // no break
         break;
     case 3:
         baz();
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/control_structure/no_break_comment.html#example-2 "Permalink to this heading")

With configuration: `['comment_text' => 'some comment']`.

```
--- Original
+++ New
 <?php
 switch ($foo) {
     case 1:
         foo();
+        // some comment
     case 2:
         foo();
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/control_structure/no_break_comment.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)*
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html)
* [@PER-CS1.0](https://cs.symfony.com/doc/ruleSets/PER-CS1.0.html) *(deprecated)*
* [@PER-CS1x0](https://cs.symfony.com/doc/ruleSets/PER-CS1x0.html)
* [@PER-CS2.0](https://cs.symfony.com/doc/ruleSets/PER-CS2.0.html) *(deprecated)*
* [@PER-CS2x0](https://cs.symfony.com/doc/ruleSets/PER-CS2x0.html)
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)*
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html)
* [@PSR2](https://cs.symfony.com/doc/ruleSets/PSR2.html)
* [@PSR12](https://cs.symfony.com/doc/ruleSets/PSR12.html)
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/control_structure/no_break_comment.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ControlStructure\NoBreakCommentFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ControlStructure/NoBreakCommentFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ControlStructure\NoBreakCommentFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ControlStructure/NoBreakCommentFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
