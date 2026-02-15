---
title: "Rule comment_to_phpdoc - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/comment/comment_to_phpdoc"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `comment_to_phpdoc`[¶](https://cs.symfony.com/doc/rules/comment/comment_to_phpdoc.html#rule-comment-to-phpdoc "Permalink to this heading")

Comments with annotation should be docblock when used on structural elements.

## Warnings[¶](https://cs.symfony.com/doc/rules/comment/comment_to_phpdoc.html#warnings "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/comment/comment_to_phpdoc.html#this-rule-is-risky "Permalink to this heading")

Risky as new docblocks might mean more, e.g. a Doctrine entity might have a new
column in database.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/comment/comment_to_phpdoc.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `ignored_tags`.

## Configuration[¶](https://cs.symfony.com/doc/rules/comment/comment_to_phpdoc.html#configuration "Permalink to this heading")

### `ignored_tags`[¶](https://cs.symfony.com/doc/rules/comment/comment_to_phpdoc.html#ignored-tags "Permalink to this heading")

List of ignored tags.

Allowed types: `list<string>`

Default value: `[]`

## Examples[¶](https://cs.symfony.com/doc/rules/comment/comment_to_phpdoc.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/comment/comment_to_phpdoc.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
-<?php /* header */ $x = true; /* @var bool $isFoo */ $isFoo = true;
+<?php /* header */ $x = true; /** @var bool $isFoo */ $isFoo = true;
```

### Example #2[¶](https://cs.symfony.com/doc/rules/comment/comment_to_phpdoc.html#example-2 "Permalink to this heading")

With configuration: `['ignored_tags' => ['todo']]`.

```
--- Original
+++ New
 <?php
 // @todo do something later
 $foo = 1;

-// @var int $a
+/** @var int $a */
 $a = foo();
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/comment/comment_to_phpdoc.html#rule-sets "Permalink to this heading")

The rule is part of the following rule set:

* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/comment/comment_to_phpdoc.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Comment\CommentToPhpdocFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Comment/CommentToPhpdocFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Comment\CommentToPhpdocFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Comment/CommentToPhpdocFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
