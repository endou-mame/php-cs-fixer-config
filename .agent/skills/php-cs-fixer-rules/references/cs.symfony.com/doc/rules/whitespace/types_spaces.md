---
title: "Rule types_spaces - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/whitespace/types_spaces"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `types_spaces`[¶](https://cs.symfony.com/doc/rules/whitespace/types_spaces.html#rule-types-spaces "Permalink to this heading")

A single space or none should be around union type and intersection type
operators.

## Warning[¶](https://cs.symfony.com/doc/rules/whitespace/types_spaces.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/whitespace/types_spaces.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `space`,
`space_multiple_catch`.

## Configuration[¶](https://cs.symfony.com/doc/rules/whitespace/types_spaces.html#configuration "Permalink to this heading")

### `space`[¶](https://cs.symfony.com/doc/rules/whitespace/types_spaces.html#space "Permalink to this heading")

Spacing to apply around union type and intersection type operators.

Allowed values: `'none'` and `'single'`

Default value: `'none'`

### `space_multiple_catch`[¶](https://cs.symfony.com/doc/rules/whitespace/types_spaces.html#space-multiple-catch "Permalink to this heading")

Spacing to apply around type operator when catching exceptions of multiple
types, use `null` to follow the value configured for `space`.

Allowed values: `'none'`, `'single'` and `null`

Default value: `null`

## Examples[¶](https://cs.symfony.com/doc/rules/whitespace/types_spaces.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/whitespace/types_spaces.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 try
 {
     new Foo();
-} catch (ErrorA | ErrorB $e) {
+} catch (ErrorA|ErrorB $e) {
 echo'error';}
```

### Example #2[¶](https://cs.symfony.com/doc/rules/whitespace/types_spaces.html#example-2 "Permalink to this heading")

With configuration: `['space' => 'single']`.

```
--- Original
+++ New
 <?php
 try
 {
     new Foo();
-} catch (ErrorA|ErrorB $e) {
+} catch (ErrorA | ErrorB $e) {
 echo'error';}
```

### Example #3[¶](https://cs.symfony.com/doc/rules/whitespace/types_spaces.html#example-3 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-function foo(int | string $x)
+function foo(int|string $x)
 {
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/whitespace/types_spaces.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)*
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html)
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)*
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html)
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/whitespace/types_spaces.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Whitespace\TypesSpacesFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Whitespace/TypesSpacesFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Whitespace\TypesSpacesFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Whitespace/TypesSpacesFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
