---
title: "Rule spaces_inside_parentheses - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/whitespace/spaces_inside_parentheses"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `spaces_inside_parentheses`[¶](https://cs.symfony.com/doc/rules/whitespace/spaces_inside_parentheses.html#rule-spaces-inside-parentheses "Permalink to this heading")

Parentheses must be declared using the configured whitespace.

## Description[¶](https://cs.symfony.com/doc/rules/whitespace/spaces_inside_parentheses.html#description "Permalink to this heading")

By default there are not any additional spaces inside parentheses, however with
`space=single` configuration option whitespace inside parentheses will be
unified to single space.

## Warning[¶](https://cs.symfony.com/doc/rules/whitespace/spaces_inside_parentheses.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/whitespace/spaces_inside_parentheses.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `space`.

## Configuration[¶](https://cs.symfony.com/doc/rules/whitespace/spaces_inside_parentheses.html#configuration "Permalink to this heading")

### `space`[¶](https://cs.symfony.com/doc/rules/whitespace/spaces_inside_parentheses.html#space "Permalink to this heading")

Whether to have `single` or `none` space inside parentheses.

Allowed values: `'none'` and `'single'`

Default value: `'none'`

## Examples[¶](https://cs.symfony.com/doc/rules/whitespace/spaces_inside_parentheses.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/whitespace/spaces_inside_parentheses.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-if ( $a ) {
-    foo( );
+if ($a) {
+    foo();
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/whitespace/spaces_inside_parentheses.html#example-2 "Permalink to this heading")

With configuration: `['space' => 'none']`.

```
--- Original
+++ New
 <?php
-function foo( $bar, $baz )
+function foo($bar, $baz)
 {
 }
```

### Example #3[¶](https://cs.symfony.com/doc/rules/whitespace/spaces_inside_parentheses.html#example-3 "Permalink to this heading")

With configuration: `['space' => 'single']`.

```
--- Original
+++ New
 <?php
-if ($a) {
-    foo( );
+if ( $a ) {
+    foo();
 }
```

### Example #4[¶](https://cs.symfony.com/doc/rules/whitespace/spaces_inside_parentheses.html#example-4 "Permalink to this heading")

With configuration: `['space' => 'single']`.

```
--- Original
+++ New
 <?php
-function foo($bar, $baz)
+function foo( $bar, $baz )
 {
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/whitespace/spaces_inside_parentheses.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)*
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html)
* [@PER-CS1.0](https://cs.symfony.com/doc/ruleSets/PER-CS1.0.html) *(deprecated)*
* [@PER-CS1x0](https://cs.symfony.com/doc/ruleSets/PER-CS1x0.html)
* [@PER-CS2.0](https://cs.symfony.com/doc/ruleSets/PER-CS2.0.html) *(deprecated)*
* [@PER-CS2x0](https://cs.symfony.com/doc/ruleSets/PER-CS2x0.html)
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)*
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html)
* [@PSR2](https://cs.symfony.com/doc/ruleSets/PSR2.html)
* [@PSR12](https://cs.symfony.com/doc/ruleSets/PSR12.html)
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/whitespace/spaces_inside_parentheses.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Whitespace\SpacesInsideParenthesesFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Whitespace/SpacesInsideParenthesesFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Whitespace\SpacesInsideParenthesesFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Whitespace/SpacesInsideParenthesesFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
