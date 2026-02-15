---
title: "Rule numeric_literal_separator - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/basic/numeric_literal_separator"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `numeric_literal_separator`[¶](https://cs.symfony.com/doc/rules/basic/numeric_literal_separator.html#rule-numeric-literal-separator "Permalink to this heading")

Adds separators to numeric literals of any kind.

## Warning[¶](https://cs.symfony.com/doc/rules/basic/numeric_literal_separator.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/basic/numeric_literal_separator.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `override_existing`,
`strategy`.

## Configuration[¶](https://cs.symfony.com/doc/rules/basic/numeric_literal_separator.html#configuration "Permalink to this heading")

### `override_existing`[¶](https://cs.symfony.com/doc/rules/basic/numeric_literal_separator.html#override-existing "Permalink to this heading")

Whether literals already containing underscores should be reformatted.

Allowed types: `bool`

Default value: `false`

### `strategy`[¶](https://cs.symfony.com/doc/rules/basic/numeric_literal_separator.html#strategy "Permalink to this heading")

Whether numeric literal should be separated by underscores or not.

Allowed values: `'no_separator'` and `'use_separator'`

Default value: `'use_separator'`

## Examples[¶](https://cs.symfony.com/doc/rules/basic/numeric_literal_separator.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/basic/numeric_literal_separator.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-$integer = 1234567890;
+$integer = 1_234_567_890;
```

### Example #2[¶](https://cs.symfony.com/doc/rules/basic/numeric_literal_separator.html#example-2 "Permalink to this heading")

With configuration: `['strategy' => 'no_separator']`.

```
--- Original
+++ New
 <?php
-$integer = 1234_5678;
-$octal = 01_234_56;
-$binary = 0b00_10_01_00;
-$hexadecimal = 0x3D45_8F4F;
+$integer = 12345678;
+$octal = 0123456;
+$binary = 0b00100100;
+$hexadecimal = 0x3D458F4F;
```

### Example #3[¶](https://cs.symfony.com/doc/rules/basic/numeric_literal_separator.html#example-3 "Permalink to this heading")

With configuration: `['strategy' => 'use_separator']`.

```
--- Original
+++ New
 <?php
-$integer = 12345678;
-$octal = 0123456;
-$binary = 0b0010010011011010;
-$hexadecimal = 0x3D458F4F;
+$integer = 12_345_678;
+$octal = 0123_456;
+$binary = 0b00100100_11011010;
+$hexadecimal = 0x3D_45_8F_4F;
```

### Example #4[¶](https://cs.symfony.com/doc/rules/basic/numeric_literal_separator.html#example-4 "Permalink to this heading")

With configuration: `['override_existing' => true]`.

```
--- Original
+++ New
-<?php $var = 24_40_21;
+<?php $var = 244_021;
```

## References[¶](https://cs.symfony.com/doc/rules/basic/numeric_literal_separator.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Basic\NumericLiteralSeparatorFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Basic/NumericLiteralSeparatorFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Basic\NumericLiteralSeparatorFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Basic/NumericLiteralSeparatorFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
