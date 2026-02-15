---
title: "Rule concat_space - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/operator/concat_space"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `concat_space`[¶](https://cs.symfony.com/doc/rules/operator/concat_space.html#rule-concat-space "Permalink to this heading")

Concatenation should be spaced according to configuration.

## Warning[¶](https://cs.symfony.com/doc/rules/operator/concat_space.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/operator/concat_space.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `spacing`.

## Configuration[¶](https://cs.symfony.com/doc/rules/operator/concat_space.html#configuration "Permalink to this heading")

### `spacing`[¶](https://cs.symfony.com/doc/rules/operator/concat_space.html#spacing "Permalink to this heading")

Spacing to apply around concatenation operator.

Allowed values: `'none'` and `'one'`

Default value: `'none'`

## Examples[¶](https://cs.symfony.com/doc/rules/operator/concat_space.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/operator/concat_space.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-$foo = 'bar' . 3 . 'baz'.'qux';
+$foo = 'bar'. 3 .'baz'.'qux';
```

### Example #2[¶](https://cs.symfony.com/doc/rules/operator/concat_space.html#example-2 "Permalink to this heading")

With configuration: `['spacing' => 'none']`.

```
--- Original
+++ New
 <?php
-$foo = 'bar' . 3 . 'baz'.'qux';
+$foo = 'bar'. 3 .'baz'.'qux';
```

### Example #3[¶](https://cs.symfony.com/doc/rules/operator/concat_space.html#example-3 "Permalink to this heading")

With configuration: `['spacing' => 'one']`.

```
--- Original
+++ New
 <?php
-$foo = 'bar' . 3 . 'baz'.'qux';
+$foo = 'bar' . 3 . 'baz' . 'qux';
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/operator/concat_space.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)* with config:

  `['spacing' => 'one']`
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html) with config:

  `['spacing' => 'one']`
* [@PER-CS2.0](https://cs.symfony.com/doc/ruleSets/PER-CS2.0.html) *(deprecated)* with config:

  `['spacing' => 'one']`
* [@PER-CS2x0](https://cs.symfony.com/doc/ruleSets/PER-CS2x0.html) with config:

  `['spacing' => 'one']`
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)* with config:

  `['spacing' => 'one']`
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html) with config:

  `['spacing' => 'one']`
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/operator/concat_space.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Operator\ConcatSpaceFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Operator/ConcatSpaceFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Operator\ConcatSpaceFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Operator/ConcatSpaceFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
