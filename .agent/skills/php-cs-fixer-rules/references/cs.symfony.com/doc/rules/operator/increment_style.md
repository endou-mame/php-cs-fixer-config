---
title: "Rule increment_style - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/operator/increment_style"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `increment_style`[¶](https://cs.symfony.com/doc/rules/operator/increment_style.html#rule-increment-style "Permalink to this heading")

Pre- or post-increment and decrement operators should be used if possible.

## Warning[¶](https://cs.symfony.com/doc/rules/operator/increment_style.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/operator/increment_style.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `style`.

## Configuration[¶](https://cs.symfony.com/doc/rules/operator/increment_style.html#configuration "Permalink to this heading")

### `style`[¶](https://cs.symfony.com/doc/rules/operator/increment_style.html#style "Permalink to this heading")

Whether to use pre- or post-increment and decrement operators.

Allowed values: `'post'` and `'pre'`

Default value: `'pre'`

## Examples[¶](https://cs.symfony.com/doc/rules/operator/increment_style.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/operator/increment_style.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-$a++;
-$b--;
+++$a;
+--$b;
```

### Example #2[¶](https://cs.symfony.com/doc/rules/operator/increment_style.html#example-2 "Permalink to this heading")

With configuration: `['style' => 'post']`.

```
--- Original
+++ New
 <?php
-++$a;
---$b;
+$a++;
+$b--;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/operator/increment_style.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/operator/increment_style.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Operator\IncrementStyleFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Operator/IncrementStyleFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Operator\IncrementStyleFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Operator/IncrementStyleFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
