---
title: "Rule new_with_parentheses - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/operator/new_with_parentheses"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `new_with_parentheses`[¶](https://cs.symfony.com/doc/rules/operator/new_with_parentheses.html#rule-new-with-parentheses "Permalink to this heading")

All instances created with `new` keyword must (not) be followed by
parentheses.

## Warning[¶](https://cs.symfony.com/doc/rules/operator/new_with_parentheses.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/operator/new_with_parentheses.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `anonymous_class`,
`named_class`.

## Configuration[¶](https://cs.symfony.com/doc/rules/operator/new_with_parentheses.html#configuration "Permalink to this heading")

### `anonymous_class`[¶](https://cs.symfony.com/doc/rules/operator/new_with_parentheses.html#anonymous-class "Permalink to this heading")

Whether anonymous classes should be followed by parentheses.

Allowed types: `bool`

Default value: `true`

Default value (future-mode): `false`

### `named_class`[¶](https://cs.symfony.com/doc/rules/operator/new_with_parentheses.html#named-class "Permalink to this heading")

Whether named classes should be followed by parentheses.

Allowed types: `bool`

Default value: `true`

## Examples[¶](https://cs.symfony.com/doc/rules/operator/new_with_parentheses.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/operator/new_with_parentheses.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php

-$x = new X;
-$y = new class {};
+$x = new X();
+$y = new class() {};
```

### Example #2[¶](https://cs.symfony.com/doc/rules/operator/new_with_parentheses.html#example-2 "Permalink to this heading")

With configuration: `['anonymous_class' => false]`.

```
--- Original
+++ New
 <?php

-$y = new class() {};
+$y = new class {};
```

### Example #3[¶](https://cs.symfony.com/doc/rules/operator/new_with_parentheses.html#example-3 "Permalink to this heading")

With configuration: `['named_class' => false]`.

```
--- Original
+++ New
 <?php

-$x = new X();
+$x = new X;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/operator/new_with_parentheses.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)* with config:

  `['anonymous_class' => false]`
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html) with config:

  `['anonymous_class' => false]`
* [@PER-CS1.0](https://cs.symfony.com/doc/ruleSets/PER-CS1.0.html) *(deprecated)* with config:

  `['anonymous_class' => true]`
* [@PER-CS1x0](https://cs.symfony.com/doc/ruleSets/PER-CS1x0.html) with config:

  `['anonymous_class' => true]`
* [@PER-CS2.0](https://cs.symfony.com/doc/ruleSets/PER-CS2.0.html) *(deprecated)* with config:

  `['anonymous_class' => false]`
* [@PER-CS2x0](https://cs.symfony.com/doc/ruleSets/PER-CS2x0.html) with config:

  `['anonymous_class' => false]`
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)* with config:

  `['anonymous_class' => false]`
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html) with config:

  `['anonymous_class' => false]`
* [@PSR12](https://cs.symfony.com/doc/ruleSets/PSR12.html) with config:

  `['anonymous_class' => true]`
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html) with config:

  `['anonymous_class' => false]`
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html) with config:

  `['anonymous_class' => false]`

## References[¶](https://cs.symfony.com/doc/rules/operator/new_with_parentheses.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Operator\NewWithParenthesesFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Operator/NewWithParenthesesFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Operator\NewWithParenthesesFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Operator/NewWithParenthesesFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
