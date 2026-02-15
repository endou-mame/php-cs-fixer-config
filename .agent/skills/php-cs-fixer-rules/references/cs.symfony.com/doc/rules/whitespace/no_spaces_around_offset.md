---
title: "Rule no_spaces_around_offset - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/whitespace/no_spaces_around_offset"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_spaces_around_offset`[¶](https://cs.symfony.com/doc/rules/whitespace/no_spaces_around_offset.html#rule-no-spaces-around-offset "Permalink to this heading")

There MUST NOT be spaces around offset braces.

## Warning[¶](https://cs.symfony.com/doc/rules/whitespace/no_spaces_around_offset.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/whitespace/no_spaces_around_offset.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `positions`.

## Configuration[¶](https://cs.symfony.com/doc/rules/whitespace/no_spaces_around_offset.html#configuration "Permalink to this heading")

### `positions`[¶](https://cs.symfony.com/doc/rules/whitespace/no_spaces_around_offset.html#positions "Permalink to this heading")

Whether spacing should be fixed inside and/or outside the offset braces.

Allowed values: a subset of `['inside', 'outside']`

Default value: `['inside', 'outside']`

## Examples[¶](https://cs.symfony.com/doc/rules/whitespace/no_spaces_around_offset.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/whitespace/no_spaces_around_offset.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-$sample = $b [ 'a' ] [ 'b' ];
+$sample = $b['a']['b'];
```

### Example #2[¶](https://cs.symfony.com/doc/rules/whitespace/no_spaces_around_offset.html#example-2 "Permalink to this heading")

With configuration: `['positions' => ['inside']]`.

```
--- Original
+++ New
 <?php
-$sample = $b [ 'a' ] [ 'b' ];
+$sample = $b ['a'] ['b'];
```

### Example #3[¶](https://cs.symfony.com/doc/rules/whitespace/no_spaces_around_offset.html#example-3 "Permalink to this heading")

With configuration: `['positions' => ['outside']]`.

```
--- Original
+++ New
 <?php
-$sample = $b [ 'a' ] [ 'b' ];
+$sample = $b[ 'a' ][ 'b' ];
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/whitespace/no_spaces_around_offset.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/whitespace/no_spaces_around_offset.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Whitespace\NoSpacesAroundOffsetFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Whitespace/NoSpacesAroundOffsetFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Whitespace\NoSpacesAroundOffsetFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Whitespace/NoSpacesAroundOffsetFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
