---
title: "Rule no_useless_concat_operator - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/operator/no_useless_concat_operator"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_useless_concat_operator`[¶](https://cs.symfony.com/doc/rules/operator/no_useless_concat_operator.html#rule-no-useless-concat-operator "Permalink to this heading")

There should not be useless concat operations.

## Warning[¶](https://cs.symfony.com/doc/rules/operator/no_useless_concat_operator.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/operator/no_useless_concat_operator.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option:
`juggle_simple_strings`.

## Configuration[¶](https://cs.symfony.com/doc/rules/operator/no_useless_concat_operator.html#configuration "Permalink to this heading")

### `juggle_simple_strings`[¶](https://cs.symfony.com/doc/rules/operator/no_useless_concat_operator.html#juggle-simple-strings "Permalink to this heading")

Allow for simple string quote juggling if it results in more concat-operations
merges.

Allowed types: `bool`

Default value: `false`

## Examples[¶](https://cs.symfony.com/doc/rules/operator/no_useless_concat_operator.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/operator/no_useless_concat_operator.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-$a = 'a'.'b';
+$a = 'ab';
```

### Example #2[¶](https://cs.symfony.com/doc/rules/operator/no_useless_concat_operator.html#example-2 "Permalink to this heading")

With configuration: `['juggle_simple_strings' => true]`.

```
--- Original
+++ New
 <?php
-$a = 'a'."b";
+$a = "ab";
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/operator/no_useless_concat_operator.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/operator/no_useless_concat_operator.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Operator\NoUselessConcatOperatorFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Operator/NoUselessConcatOperatorFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Operator\NoUselessConcatOperatorFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Operator/NoUselessConcatOperatorFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
