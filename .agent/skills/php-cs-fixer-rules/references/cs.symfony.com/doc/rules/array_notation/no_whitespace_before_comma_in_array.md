---
title: "Rule no_whitespace_before_comma_in_array - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/array_notation/no_whitespace_before_comma_in_array"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_whitespace_before_comma_in_array`[¶](https://cs.symfony.com/doc/rules/array_notation/no_whitespace_before_comma_in_array.html#rule-no-whitespace-before-comma-in-array "Permalink to this heading")

In array declaration, there MUST NOT be a whitespace before each comma.

## Warning[¶](https://cs.symfony.com/doc/rules/array_notation/no_whitespace_before_comma_in_array.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/array_notation/no_whitespace_before_comma_in_array.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `after_heredoc`.

## Configuration[¶](https://cs.symfony.com/doc/rules/array_notation/no_whitespace_before_comma_in_array.html#configuration "Permalink to this heading")

### `after_heredoc`[¶](https://cs.symfony.com/doc/rules/array_notation/no_whitespace_before_comma_in_array.html#after-heredoc "Permalink to this heading")

Whether the whitespace between heredoc end and comma should be removed.

Allowed types: `bool`

Default value: `false`

Default value (future-mode): `true`

## Examples[¶](https://cs.symfony.com/doc/rules/array_notation/no_whitespace_before_comma_in_array.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/array_notation/no_whitespace_before_comma_in_array.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
-<?php $x = array(1 , "2");
+<?php $x = array(1, "2");
```

### Example #2[¶](https://cs.symfony.com/doc/rules/array_notation/no_whitespace_before_comma_in_array.html#example-2 "Permalink to this heading")

With configuration: `['after_heredoc' => true]`.

```
--- Original
+++ New
 <?php
     $x = [<<<EOD
 foo
-EOD
-        , 'bar'
+EOD, 'bar'
     ];
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/array_notation/no_whitespace_before_comma_in_array.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PHP7x3Migration](https://cs.symfony.com/doc/ruleSets/PHP7x3Migration.html) with config:

  `['after_heredoc' => true]`
* [@PHP7x4Migration](https://cs.symfony.com/doc/ruleSets/PHP7x4Migration.html) with config:

  `['after_heredoc' => true]`
* [@PHP8x0Migration](https://cs.symfony.com/doc/ruleSets/PHP8x0Migration.html) with config:

  `['after_heredoc' => true]`
* [@PHP8x1Migration](https://cs.symfony.com/doc/ruleSets/PHP8x1Migration.html) with config:

  `['after_heredoc' => true]`
* [@PHP8x2Migration](https://cs.symfony.com/doc/ruleSets/PHP8x2Migration.html) with config:

  `['after_heredoc' => true]`
* [@PHP8x3Migration](https://cs.symfony.com/doc/ruleSets/PHP8x3Migration.html) with config:

  `['after_heredoc' => true]`
* [@PHP8x4Migration](https://cs.symfony.com/doc/ruleSets/PHP8x4Migration.html) with config:

  `['after_heredoc' => true]`
* [@PHP8x5Migration](https://cs.symfony.com/doc/ruleSets/PHP8x5Migration.html) with config:

  `['after_heredoc' => true]`
* [@PHP73Migration](https://cs.symfony.com/doc/ruleSets/PHP73Migration.html) *(deprecated)* with config:

  `['after_heredoc' => true]`
* [@PHP74Migration](https://cs.symfony.com/doc/ruleSets/PHP74Migration.html) *(deprecated)* with config:

  `['after_heredoc' => true]`
* [@PHP80Migration](https://cs.symfony.com/doc/ruleSets/PHP80Migration.html) *(deprecated)* with config:

  `['after_heredoc' => true]`
* [@PHP81Migration](https://cs.symfony.com/doc/ruleSets/PHP81Migration.html) *(deprecated)* with config:

  `['after_heredoc' => true]`
* [@PHP82Migration](https://cs.symfony.com/doc/ruleSets/PHP82Migration.html) *(deprecated)* with config:

  `['after_heredoc' => true]`
* [@PHP83Migration](https://cs.symfony.com/doc/ruleSets/PHP83Migration.html) *(deprecated)* with config:

  `['after_heredoc' => true]`
* [@PHP84Migration](https://cs.symfony.com/doc/ruleSets/PHP84Migration.html) *(deprecated)* with config:

  `['after_heredoc' => true]`
* [@PHP85Migration](https://cs.symfony.com/doc/ruleSets/PHP85Migration.html) *(deprecated)* with config:

  `['after_heredoc' => true]`
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html) with config:

  `['after_heredoc' => true]`
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html) with config:

  `['after_heredoc' => true]`

## References[¶](https://cs.symfony.com/doc/rules/array_notation/no_whitespace_before_comma_in_array.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ArrayNotation\NoWhitespaceBeforeCommaInArrayFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ArrayNotation/NoWhitespaceBeforeCommaInArrayFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ArrayNotation\NoWhitespaceBeforeCommaInArrayFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ArrayNotation/NoWhitespaceBeforeCommaInArrayFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
