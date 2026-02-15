---
title: "Rule cast_spaces - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/cast_notation/cast_spaces"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `cast_spaces`[¶](https://cs.symfony.com/doc/rules/cast_notation/cast_spaces.html#rule-cast-spaces "Permalink to this heading")

A single space or none should be between cast and variable.

## Warning[¶](https://cs.symfony.com/doc/rules/cast_notation/cast_spaces.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/cast_notation/cast_spaces.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `space`.

## Configuration[¶](https://cs.symfony.com/doc/rules/cast_notation/cast_spaces.html#configuration "Permalink to this heading")

### `space`[¶](https://cs.symfony.com/doc/rules/cast_notation/cast_spaces.html#space "Permalink to this heading")

Spacing to apply between cast and variable.

Allowed values: `'none'` and `'single'`

Default value: `'single'`

## Examples[¶](https://cs.symfony.com/doc/rules/cast_notation/cast_spaces.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/cast_notation/cast_spaces.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-$bar = ( string )  $a;
-$foo = (int)$b;
+$bar = (string) $a;
+$foo = (int) $b;
```

### Example #2[¶](https://cs.symfony.com/doc/rules/cast_notation/cast_spaces.html#example-2 "Permalink to this heading")

With configuration: `['space' => 'single']`.

```
--- Original
+++ New
 <?php
-$bar = ( string )  $a;
-$foo = (int)$b;
+$bar = (string) $a;
+$foo = (int) $b;
```

### Example #3[¶](https://cs.symfony.com/doc/rules/cast_notation/cast_spaces.html#example-3 "Permalink to this heading")

With configuration: `['space' => 'none']`.

```
--- Original
+++ New
 <?php
-$bar = ( string )  $a;
-$foo = (int) $b;
+$bar = (string)$a;
+$foo = (int)$b;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/cast_notation/cast_spaces.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)*
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html)
* [@PER-CS2.0](https://cs.symfony.com/doc/ruleSets/PER-CS2.0.html) *(deprecated)*
* [@PER-CS2x0](https://cs.symfony.com/doc/ruleSets/PER-CS2x0.html)
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)*
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html)
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/cast_notation/cast_spaces.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\CastNotation\CastSpacesFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/CastNotation/CastSpacesFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\CastNotation\CastSpacesFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/CastNotation/CastSpacesFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
