---
title: "Rule phpdoc_readonly_class_comment_to_keyword - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/class_notation/phpdoc_readonly_class_comment_to_keyword"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `phpdoc_readonly_class_comment_to_keyword`[¶](https://cs.symfony.com/doc/rules/class_notation/phpdoc_readonly_class_comment_to_keyword.html#rule-phpdoc-readonly-class-comment-to-keyword "Permalink to this heading")

Converts readonly comment on classes to the readonly keyword.

## Warning[¶](https://cs.symfony.com/doc/rules/class_notation/phpdoc_readonly_class_comment_to_keyword.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/class_notation/phpdoc_readonly_class_comment_to_keyword.html#this-rule-is-risky "Permalink to this heading")

If classes marked with `@readonly` annotation were extended anyway, applying
this fixer may break the inheritance for their child classes.

## Examples[¶](https://cs.symfony.com/doc/rules/class_notation/phpdoc_readonly_class_comment_to_keyword.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/class_notation/phpdoc_readonly_class_comment_to_keyword.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
     <?php
-    /** @readonly */
-    class C {
+
+    readonly class C {
     }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/class_notation/phpdoc_readonly_class_comment_to_keyword.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PHP8x2Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x2MigrationRisky.html)
* [@PHP8x3Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x3MigrationRisky.html)
* [@PHP8x4Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x4MigrationRisky.html)
* [@PHP8x5Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x5MigrationRisky.html)
* [@PHP82Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP82MigrationRisky.html) *(deprecated)*

## References[¶](https://cs.symfony.com/doc/rules/class_notation/phpdoc_readonly_class_comment_to_keyword.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ClassNotation\PhpdocReadonlyClassCommentToKeywordFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ClassNotation/PhpdocReadonlyClassCommentToKeywordFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ClassNotation\PhpdocReadonlyClassCommentToKeywordFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ClassNotation/PhpdocReadonlyClassCommentToKeywordFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
