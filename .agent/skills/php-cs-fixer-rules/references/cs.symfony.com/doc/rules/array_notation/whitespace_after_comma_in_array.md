---
title: "Rule whitespace_after_comma_in_array - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/array_notation/whitespace_after_comma_in_array"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `whitespace_after_comma_in_array`[¶](https://cs.symfony.com/doc/rules/array_notation/whitespace_after_comma_in_array.html#rule-whitespace-after-comma-in-array "Permalink to this heading")

In array declaration, there MUST be a whitespace after each comma.

## Warning[¶](https://cs.symfony.com/doc/rules/array_notation/whitespace_after_comma_in_array.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/array_notation/whitespace_after_comma_in_array.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `ensure_single_space`.

## Configuration[¶](https://cs.symfony.com/doc/rules/array_notation/whitespace_after_comma_in_array.html#configuration "Permalink to this heading")

### `ensure_single_space`[¶](https://cs.symfony.com/doc/rules/array_notation/whitespace_after_comma_in_array.html#ensure-single-space "Permalink to this heading")

If there are only horizontal whitespaces after the comma then ensure it is a
single space.

Allowed types: `bool`

Default value: `false`

## Examples[¶](https://cs.symfony.com/doc/rules/array_notation/whitespace_after_comma_in_array.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/array_notation/whitespace_after_comma_in_array.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-$sample = array(1,'a',$b,);
+$sample = array(1, 'a', $b, );
```

### Example #2[¶](https://cs.symfony.com/doc/rules/array_notation/whitespace_after_comma_in_array.html#example-2 "Permalink to this heading")

With configuration: `['ensure_single_space' => true]`.

```
--- Original
+++ New
 <?php
-$sample = [1,2, 3,  4,    5];
+$sample = [1, 2, 3, 4, 5];
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/array_notation/whitespace_after_comma_in_array.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html) with config:

  `['ensure_single_space' => true]`
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/array_notation/whitespace_after_comma_in_array.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ArrayNotation\WhitespaceAfterCommaInArrayFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ArrayNotation/WhitespaceAfterCommaInArrayFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ArrayNotation\WhitespaceAfterCommaInArrayFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ArrayNotation/WhitespaceAfterCommaInArrayFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
