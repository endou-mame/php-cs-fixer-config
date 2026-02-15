---
title: "Rule statement_indentation - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/whitespace/statement_indentation"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `statement_indentation`[¶](https://cs.symfony.com/doc/rules/whitespace/statement_indentation.html#rule-statement-indentation "Permalink to this heading")

Each statement must be indented.

## Warning[¶](https://cs.symfony.com/doc/rules/whitespace/statement_indentation.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/whitespace/statement_indentation.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option:
`stick_comment_to_next_continuous_control_statement`.

## Configuration[¶](https://cs.symfony.com/doc/rules/whitespace/statement_indentation.html#configuration "Permalink to this heading")

### `stick_comment_to_next_continuous_control_statement`[¶](https://cs.symfony.com/doc/rules/whitespace/statement_indentation.html#stick-comment-to-next-continuous-control-statement "Permalink to this heading")

Last comment of code block counts as comment for next block.

Allowed types: `bool`

Default value: `false`

## Examples[¶](https://cs.symfony.com/doc/rules/whitespace/statement_indentation.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/whitespace/statement_indentation.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 if ($baz == true) {
-  echo "foo";
+    echo "foo";
 }
 else {
-      echo "bar";
+    echo "bar";
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/whitespace/statement_indentation.html#example-2 "Permalink to this heading")

With configuration: `['stick_comment_to_next_continuous_control_statement' => false]`.

```
--- Original
+++ New
 <?php
-        // foo
+// foo
 if ($foo) {
     echo "foo";
-        // this is treated as comment of `if` block, as `stick_comment_to_next_continuous_control_statement` is disabled
+    // this is treated as comment of `if` block, as `stick_comment_to_next_continuous_control_statement` is disabled
 } else {
     $aaa = 1;
 }
```

### Example #3[¶](https://cs.symfony.com/doc/rules/whitespace/statement_indentation.html#example-3 "Permalink to this heading")

With configuration: `['stick_comment_to_next_continuous_control_statement' => true]`.

```
--- Original
+++ New
 <?php
-        // foo
+// foo
 if ($foo) {
     echo "foo";
-        // this is treated as comment of `elseif(1)` block, as `stick_comment_to_next_continuous_control_statement` is enabled
+// this is treated as comment of `elseif(1)` block, as `stick_comment_to_next_continuous_control_statement` is enabled
 } elseif(1) {
     echo "bar";
 } elseif(2) {
-        // this is treated as comment of `elseif(2)` block, as the only content of that block
+    // this is treated as comment of `elseif(2)` block, as the only content of that block
 } elseif(3) {
     $aaa = 1;
-        // this is treated as comment of `elseif(3)` block, as it is a comment in the final block
+    // this is treated as comment of `elseif(3)` block, as it is a comment in the final block
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/whitespace/statement_indentation.html#rule-sets "Permalink to this heading")

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
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html) with config:

  `['stick_comment_to_next_continuous_control_statement' => true]`
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html) with config:

  `['stick_comment_to_next_continuous_control_statement' => true]`

## References[¶](https://cs.symfony.com/doc/rules/whitespace/statement_indentation.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Whitespace\StatementIndentationFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Whitespace/StatementIndentationFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Whitespace\StatementIndentationFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Whitespace/StatementIndentationFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
