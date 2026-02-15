---
title: "Rule unary_operator_spaces - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/operator/unary_operator_spaces"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `unary_operator_spaces`[¶](https://cs.symfony.com/doc/rules/operator/unary_operator_spaces.html#rule-unary-operator-spaces "Permalink to this heading")

Unary operators should be placed adjacent to their operands.

## Warning[¶](https://cs.symfony.com/doc/rules/operator/unary_operator_spaces.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/operator/unary_operator_spaces.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `only_dec_inc`.

## Configuration[¶](https://cs.symfony.com/doc/rules/operator/unary_operator_spaces.html#configuration "Permalink to this heading")

### `only_dec_inc`[¶](https://cs.symfony.com/doc/rules/operator/unary_operator_spaces.html#only-dec-inc "Permalink to this heading")

Limit to increment and decrement operators.

Allowed types: `bool`

Default value: `false`

## Examples[¶](https://cs.symfony.com/doc/rules/operator/unary_operator_spaces.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/operator/unary_operator_spaces.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-$sample ++;
--- $sample;
-$sample = ! ! $a;
-$sample = ~  $c;
-function & foo(){}
+$sample++;
+--$sample;
+$sample = !!$a;
+$sample = ~$c;
+function &foo(){}
```

### Example #2[¶](https://cs.symfony.com/doc/rules/operator/unary_operator_spaces.html#example-2 "Permalink to this heading")

With configuration: `['only_dec_inc' => false]`.

```
--- Original
+++ New
 <?php
-function foo($a, ...   $b) { return (--   $a) * ($b   ++);}
+function foo($a, ...$b) { return (--$a) * ($b++);}
```

### Example #3[¶](https://cs.symfony.com/doc/rules/operator/unary_operator_spaces.html#example-3 "Permalink to this heading")

With configuration: `['only_dec_inc' => true]`.

```
--- Original
+++ New
 <?php
-function foo($a, ...   $b) { return (--   $a) * ($b   ++);}
+function foo($a, ...   $b) { return (--$a) * ($b++);}
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/operator/unary_operator_spaces.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)* with config:

  `['only_dec_inc' => true]`
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html) with config:

  `['only_dec_inc' => true]`
* [@PER-CS1.0](https://cs.symfony.com/doc/ruleSets/PER-CS1.0.html) *(deprecated)* with config:

  `['only_dec_inc' => true]`
* [@PER-CS1x0](https://cs.symfony.com/doc/ruleSets/PER-CS1x0.html) with config:

  `['only_dec_inc' => true]`
* [@PER-CS2.0](https://cs.symfony.com/doc/ruleSets/PER-CS2.0.html) *(deprecated)* with config:

  `['only_dec_inc' => true]`
* [@PER-CS2x0](https://cs.symfony.com/doc/ruleSets/PER-CS2x0.html) with config:

  `['only_dec_inc' => true]`
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)* with config:

  `['only_dec_inc' => true]`
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html) with config:

  `['only_dec_inc' => true]`
* [@PSR12](https://cs.symfony.com/doc/ruleSets/PSR12.html) with config:

  `['only_dec_inc' => true]`
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/operator/unary_operator_spaces.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Operator\UnaryOperatorSpacesFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Operator/UnaryOperatorSpacesFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Operator\UnaryOperatorSpacesFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Operator/UnaryOperatorSpacesFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
