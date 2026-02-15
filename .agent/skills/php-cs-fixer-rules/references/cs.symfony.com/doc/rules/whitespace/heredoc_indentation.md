---
title: "Rule heredoc_indentation - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/whitespace/heredoc_indentation"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `heredoc_indentation`[¶](https://cs.symfony.com/doc/rules/whitespace/heredoc_indentation.html#rule-heredoc-indentation "Permalink to this heading")

Heredoc/nowdoc content must be properly indented.

## Warning[¶](https://cs.symfony.com/doc/rules/whitespace/heredoc_indentation.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/whitespace/heredoc_indentation.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `indentation`.

## Configuration[¶](https://cs.symfony.com/doc/rules/whitespace/heredoc_indentation.html#configuration "Permalink to this heading")

### `indentation`[¶](https://cs.symfony.com/doc/rules/whitespace/heredoc_indentation.html#indentation "Permalink to this heading")

Whether the indentation should be the same as in the start token line or one
level more.

Allowed values: `'same_as_start'` and `'start_plus_one'`

Default value: `'start_plus_one'`

## Examples[¶](https://cs.symfony.com/doc/rules/whitespace/heredoc_indentation.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/whitespace/heredoc_indentation.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
     $heredoc = <<<EOD
-abc
-    def
-EOD;
+        abc
+            def
+        EOD;

     $nowdoc = <<<'EOD'
-abc
-    def
-EOD;
+        abc
+            def
+        EOD;
```

### Example #2[¶](https://cs.symfony.com/doc/rules/whitespace/heredoc_indentation.html#example-2 "Permalink to this heading")

With configuration: `['indentation' => 'same_as_start']`.

```
--- Original
+++ New
 <?php
     $nowdoc = <<<'EOD'
-abc
-    def
-EOD;
+    abc
+        def
+    EOD;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/whitespace/heredoc_indentation.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PHP7x3Migration](https://cs.symfony.com/doc/ruleSets/PHP7x3Migration.html)
* [@PHP7x4Migration](https://cs.symfony.com/doc/ruleSets/PHP7x4Migration.html)
* [@PHP8x0Migration](https://cs.symfony.com/doc/ruleSets/PHP8x0Migration.html)
* [@PHP8x1Migration](https://cs.symfony.com/doc/ruleSets/PHP8x1Migration.html)
* [@PHP8x2Migration](https://cs.symfony.com/doc/ruleSets/PHP8x2Migration.html)
* [@PHP8x3Migration](https://cs.symfony.com/doc/ruleSets/PHP8x3Migration.html)
* [@PHP8x4Migration](https://cs.symfony.com/doc/ruleSets/PHP8x4Migration.html)
* [@PHP8x5Migration](https://cs.symfony.com/doc/ruleSets/PHP8x5Migration.html)
* [@PHP73Migration](https://cs.symfony.com/doc/ruleSets/PHP73Migration.html) *(deprecated)*
* [@PHP74Migration](https://cs.symfony.com/doc/ruleSets/PHP74Migration.html) *(deprecated)*
* [@PHP80Migration](https://cs.symfony.com/doc/ruleSets/PHP80Migration.html) *(deprecated)*
* [@PHP81Migration](https://cs.symfony.com/doc/ruleSets/PHP81Migration.html) *(deprecated)*
* [@PHP82Migration](https://cs.symfony.com/doc/ruleSets/PHP82Migration.html) *(deprecated)*
* [@PHP83Migration](https://cs.symfony.com/doc/ruleSets/PHP83Migration.html) *(deprecated)*
* [@PHP84Migration](https://cs.symfony.com/doc/ruleSets/PHP84Migration.html) *(deprecated)*
* [@PHP85Migration](https://cs.symfony.com/doc/ruleSets/PHP85Migration.html) *(deprecated)*

## References[¶](https://cs.symfony.com/doc/rules/whitespace/heredoc_indentation.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Whitespace\HeredocIndentationFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Whitespace/HeredocIndentationFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Whitespace\HeredocIndentationFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Whitespace/HeredocIndentationFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
