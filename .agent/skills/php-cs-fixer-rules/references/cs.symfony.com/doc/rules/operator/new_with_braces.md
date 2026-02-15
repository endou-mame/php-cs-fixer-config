---
title: "Rule new_with_braces - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/operator/new_with_braces"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `new_with_braces`[¶](https://cs.symfony.com/doc/rules/operator/new_with_braces.html#rule-new-with-braces "Permalink to this heading")

All instances created with `new` keyword must (not) be followed by braces.

## Warnings[¶](https://cs.symfony.com/doc/rules/operator/new_with_braces.html#warnings "Permalink to this heading")

### This rule is DEPRECATED and will be removed in the next major version 4.0[¶](https://cs.symfony.com/doc/rules/operator/new_with_braces.html#this-rule-is-deprecated-and-will-be-removed-in-the-next-major-version-4-0 "Permalink to this heading")

You should use `new_with_parentheses` instead.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/operator/new_with_braces.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `anonymous_class`,
`named_class`.

## Configuration[¶](https://cs.symfony.com/doc/rules/operator/new_with_braces.html#configuration "Permalink to this heading")

### `anonymous_class`[¶](https://cs.symfony.com/doc/rules/operator/new_with_braces.html#anonymous-class "Permalink to this heading")

Whether anonymous classes should be followed by parentheses.

Allowed types: `bool`

Default value: `true`

Default value (future-mode): `false`

### `named_class`[¶](https://cs.symfony.com/doc/rules/operator/new_with_braces.html#named-class "Permalink to this heading")

Whether named classes should be followed by parentheses.

Allowed types: `bool`

Default value: `true`

## Examples[¶](https://cs.symfony.com/doc/rules/operator/new_with_braces.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/operator/new_with_braces.html#example-1 "Permalink to this heading")

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

### Example #2[¶](https://cs.symfony.com/doc/rules/operator/new_with_braces.html#example-2 "Permalink to this heading")

With configuration: `['anonymous_class' => false]`.

```
--- Original
+++ New
 <?php

-$y = new class() {};
+$y = new class {};
```

### Example #3[¶](https://cs.symfony.com/doc/rules/operator/new_with_braces.html#example-3 "Permalink to this heading")

With configuration: `['named_class' => false]`.

```
--- Original
+++ New
 <?php

-$x = new X();
+$x = new X;
```

## References[¶](https://cs.symfony.com/doc/rules/operator/new_with_braces.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Operator\NewWithBracesFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Operator/NewWithBracesFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Operator\NewWithBracesFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Operator/NewWithBracesFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
