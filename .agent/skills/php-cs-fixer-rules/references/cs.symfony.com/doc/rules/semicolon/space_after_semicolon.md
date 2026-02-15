---
title: "Rule space_after_semicolon - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/semicolon/space_after_semicolon"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `space_after_semicolon`[¶](https://cs.symfony.com/doc/rules/semicolon/space_after_semicolon.html#rule-space-after-semicolon "Permalink to this heading")

Fix whitespace after a semicolon.

## Warning[¶](https://cs.symfony.com/doc/rules/semicolon/space_after_semicolon.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/semicolon/space_after_semicolon.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option:
`remove_in_empty_for_expressions`.

## Configuration[¶](https://cs.symfony.com/doc/rules/semicolon/space_after_semicolon.html#configuration "Permalink to this heading")

### `remove_in_empty_for_expressions`[¶](https://cs.symfony.com/doc/rules/semicolon/space_after_semicolon.html#remove-in-empty-for-expressions "Permalink to this heading")

Whether spaces should be removed for empty `for` expressions.

Allowed types: `bool`

Default value: `false`

## Examples[¶](https://cs.symfony.com/doc/rules/semicolon/space_after_semicolon.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/semicolon/space_after_semicolon.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-sample();     $test = 1;
-sample();$test = 2;
-for ( ;;++$sample) {
+sample(); $test = 1;
+sample(); $test = 2;
+for ( ; ; ++$sample) {
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/semicolon/space_after_semicolon.html#example-2 "Permalink to this heading")

With configuration: `['remove_in_empty_for_expressions' => true]`.

```
--- Original
+++ New
 <?php
-for ($i = 0; ; ++$i) {
+for ($i = 0;; ++$i) {
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/semicolon/space_after_semicolon.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html) with config:

  `['remove_in_empty_for_expressions' => true]`
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html) with config:

  `['remove_in_empty_for_expressions' => true]`

## References[¶](https://cs.symfony.com/doc/rules/semicolon/space_after_semicolon.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Semicolon\SpaceAfterSemicolonFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Semicolon/SpaceAfterSemicolonFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Semicolon\SpaceAfterSemicolonFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Semicolon/SpaceAfterSemicolonFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
