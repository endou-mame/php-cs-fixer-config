---
title: "Rule multiline_whitespace_before_semicolons - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/semicolon/multiline_whitespace_before_semicolons"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `multiline_whitespace_before_semicolons`[¶](https://cs.symfony.com/doc/rules/semicolon/multiline_whitespace_before_semicolons.html#rule-multiline-whitespace-before-semicolons "Permalink to this heading")

Forbid multi-line whitespace before the closing semicolon or move the semicolon
to the new line for chained calls.

## Warning[¶](https://cs.symfony.com/doc/rules/semicolon/multiline_whitespace_before_semicolons.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/semicolon/multiline_whitespace_before_semicolons.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `strategy`.

## Configuration[¶](https://cs.symfony.com/doc/rules/semicolon/multiline_whitespace_before_semicolons.html#configuration "Permalink to this heading")

### `strategy`[¶](https://cs.symfony.com/doc/rules/semicolon/multiline_whitespace_before_semicolons.html#strategy "Permalink to this heading")

Forbid multi-line whitespace or move the semicolon to the new line for chained
calls.

Allowed values: `'new_line_for_chained_calls'` and `'no_multi_line'`

Default value: `'no_multi_line'`

## Examples[¶](https://cs.symfony.com/doc/rules/semicolon/multiline_whitespace_before_semicolons.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/semicolon/multiline_whitespace_before_semicolons.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 function foo() {
-    return 1 + 2
-        ;
+    return 1 + 2;
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/semicolon/multiline_whitespace_before_semicolons.html#example-2 "Permalink to this heading")

With configuration: `['strategy' => 'new_line_for_chained_calls']`.

```
--- Original
+++ New
 <?php
 $object->method1()
     ->method2()
-    ->method(3);
+    ->method(3)
+;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/semicolon/multiline_whitespace_before_semicolons.html#rule-sets "Permalink to this heading")

The rule is part of the following rule set:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html) with config:

  `['strategy' => 'new_line_for_chained_calls']`

## References[¶](https://cs.symfony.com/doc/rules/semicolon/multiline_whitespace_before_semicolons.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Semicolon\MultilineWhitespaceBeforeSemicolonsFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Semicolon/MultilineWhitespaceBeforeSemicolonsFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Semicolon\MultilineWhitespaceBeforeSemicolonsFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Semicolon/MultilineWhitespaceBeforeSemicolonsFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
