---
title: "Rule array_syntax - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/array_notation/array_syntax"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `array_syntax`[¶](https://cs.symfony.com/doc/rules/array_notation/array_syntax.html#rule-array-syntax "Permalink to this heading")

PHP arrays should be declared using the configured syntax.

## Warning[¶](https://cs.symfony.com/doc/rules/array_notation/array_syntax.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/array_notation/array_syntax.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `syntax`.

## Configuration[¶](https://cs.symfony.com/doc/rules/array_notation/array_syntax.html#configuration "Permalink to this heading")

### `syntax`[¶](https://cs.symfony.com/doc/rules/array_notation/array_syntax.html#syntax "Permalink to this heading")

Whether to use the `long` or `short` array syntax.

Allowed values: `'long'` and `'short'`

Default value: `'short'`

## Examples[¶](https://cs.symfony.com/doc/rules/array_notation/array_syntax.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/array_notation/array_syntax.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-array(1,2);
+[1,2];
```

### Example #2[¶](https://cs.symfony.com/doc/rules/array_notation/array_syntax.html#example-2 "Permalink to this heading")

With configuration: `['syntax' => 'long']`.

```
--- Original
+++ New
 <?php
-[1,2];
+array(1,2);
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/array_notation/array_syntax.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)*
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html)
* [@PER-CS2.0](https://cs.symfony.com/doc/ruleSets/PER-CS2.0.html) *(deprecated)*
* [@PER-CS2x0](https://cs.symfony.com/doc/ruleSets/PER-CS2x0.html)
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)*
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html)
* [@PHP5x4Migration](https://cs.symfony.com/doc/ruleSets/PHP5x4Migration.html)
* [@PHP7x0Migration](https://cs.symfony.com/doc/ruleSets/PHP7x0Migration.html)
* [@PHP7x1Migration](https://cs.symfony.com/doc/ruleSets/PHP7x1Migration.html)
* [@PHP7x3Migration](https://cs.symfony.com/doc/ruleSets/PHP7x3Migration.html)
* [@PHP7x4Migration](https://cs.symfony.com/doc/ruleSets/PHP7x4Migration.html)
* [@PHP8x0Migration](https://cs.symfony.com/doc/ruleSets/PHP8x0Migration.html)
* [@PHP8x1Migration](https://cs.symfony.com/doc/ruleSets/PHP8x1Migration.html)
* [@PHP8x2Migration](https://cs.symfony.com/doc/ruleSets/PHP8x2Migration.html)
* [@PHP8x3Migration](https://cs.symfony.com/doc/ruleSets/PHP8x3Migration.html)
* [@PHP8x4Migration](https://cs.symfony.com/doc/ruleSets/PHP8x4Migration.html)
* [@PHP8x5Migration](https://cs.symfony.com/doc/ruleSets/PHP8x5Migration.html)
* [@PHP54Migration](https://cs.symfony.com/doc/ruleSets/PHP54Migration.html) *(deprecated)*
* [@PHP70Migration](https://cs.symfony.com/doc/ruleSets/PHP70Migration.html) *(deprecated)*
* [@PHP71Migration](https://cs.symfony.com/doc/ruleSets/PHP71Migration.html) *(deprecated)*
* [@PHP73Migration](https://cs.symfony.com/doc/ruleSets/PHP73Migration.html) *(deprecated)*
* [@PHP74Migration](https://cs.symfony.com/doc/ruleSets/PHP74Migration.html) *(deprecated)*
* [@PHP80Migration](https://cs.symfony.com/doc/ruleSets/PHP80Migration.html) *(deprecated)*
* [@PHP81Migration](https://cs.symfony.com/doc/ruleSets/PHP81Migration.html) *(deprecated)*
* [@PHP82Migration](https://cs.symfony.com/doc/ruleSets/PHP82Migration.html) *(deprecated)*
* [@PHP83Migration](https://cs.symfony.com/doc/ruleSets/PHP83Migration.html) *(deprecated)*
* [@PHP84Migration](https://cs.symfony.com/doc/ruleSets/PHP84Migration.html) *(deprecated)*
* [@PHP85Migration](https://cs.symfony.com/doc/ruleSets/PHP85Migration.html) *(deprecated)*
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/array_notation/array_syntax.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ArrayNotation/ArraySyntaxFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ArrayNotation\ArraySyntaxFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ArrayNotation/ArraySyntaxFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
