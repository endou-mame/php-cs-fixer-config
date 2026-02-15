---
title: "Rule echo_tag_syntax - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/php_tag/echo_tag_syntax"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `echo_tag_syntax`[¶](https://cs.symfony.com/doc/rules/php_tag/echo_tag_syntax.html#rule-echo-tag-syntax "Permalink to this heading")

Replaces short-echo `<?=` with long format `<?php echo`/`<?php print`
syntax, or vice-versa.

## Warning[¶](https://cs.symfony.com/doc/rules/php_tag/echo_tag_syntax.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/php_tag/echo_tag_syntax.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `format`,
`long_function`, `shorten_simple_statements_only`.

## Configuration[¶](https://cs.symfony.com/doc/rules/php_tag/echo_tag_syntax.html#configuration "Permalink to this heading")

### `format`[¶](https://cs.symfony.com/doc/rules/php_tag/echo_tag_syntax.html#format "Permalink to this heading")

The desired language construct.

Allowed values: `'long'` and `'short'`

Default value: `'long'`

### `long_function`[¶](https://cs.symfony.com/doc/rules/php_tag/echo_tag_syntax.html#long-function "Permalink to this heading")

The function to be used to expand the short echo tags.

Allowed values: `'echo'` and `'print'`

Default value: `'echo'`

### `shorten_simple_statements_only`[¶](https://cs.symfony.com/doc/rules/php_tag/echo_tag_syntax.html#shorten-simple-statements-only "Permalink to this heading")

Render short-echo tags only in case of simple code.

Allowed types: `bool`

Default value: `true`

## Examples[¶](https://cs.symfony.com/doc/rules/php_tag/echo_tag_syntax.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/php_tag/echo_tag_syntax.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
-<?=1?>
+<?php echo 1?>
 <?php print '2' . '3'; ?>
 <?php /* comment */ echo '2' . '3'; ?>
 <?php print '2' . '3'; someFunction(); ?>
```

### Example #2[¶](https://cs.symfony.com/doc/rules/php_tag/echo_tag_syntax.html#example-2 "Permalink to this heading")

With configuration: `['format' => 'long']`.

```
--- Original
+++ New
-<?=1?>
+<?php echo 1?>
 <?php print '2' . '3'; ?>
 <?php /* comment */ echo '2' . '3'; ?>
 <?php print '2' . '3'; someFunction(); ?>
```

### Example #3[¶](https://cs.symfony.com/doc/rules/php_tag/echo_tag_syntax.html#example-3 "Permalink to this heading")

With configuration: `['format' => 'long', 'long_function' => 'print']`.

```
--- Original
+++ New
-<?=1?>
+<?php print 1?>
 <?php print '2' . '3'; ?>
 <?php /* comment */ echo '2' . '3'; ?>
 <?php print '2' . '3'; someFunction(); ?>
```

### Example #4[¶](https://cs.symfony.com/doc/rules/php_tag/echo_tag_syntax.html#example-4 "Permalink to this heading")

With configuration: `['format' => 'short']`.

```
--- Original
+++ New
 <?=1?>
-<?php print '2' . '3'; ?>
-<?php /* comment */ echo '2' . '3'; ?>
+<?= '2' . '3'; ?>
+<?=/* comment */ '2' . '3'; ?>
 <?php print '2' . '3'; someFunction(); ?>
```

### Example #5[¶](https://cs.symfony.com/doc/rules/php_tag/echo_tag_syntax.html#example-5 "Permalink to this heading")

With configuration: `['format' => 'short', 'shorten_simple_statements_only' => false]`.

```
--- Original
+++ New
 <?=1?>
-<?php print '2' . '3'; ?>
-<?php /* comment */ echo '2' . '3'; ?>
-<?php print '2' . '3'; someFunction(); ?>
+<?= '2' . '3'; ?>
+<?=/* comment */ '2' . '3'; ?>
+<?= '2' . '3'; someFunction(); ?>
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/php_tag/echo_tag_syntax.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/php_tag/echo_tag_syntax.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\PhpTag\EchoTagSyntaxFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/PhpTag/EchoTagSyntaxFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\PhpTag\EchoTagSyntaxFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/PhpTag/EchoTagSyntaxFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
