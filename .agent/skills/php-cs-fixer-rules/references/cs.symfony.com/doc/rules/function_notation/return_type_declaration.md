---
title: "Rule return_type_declaration - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/function_notation/return_type_declaration"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `return_type_declaration`[¶](https://cs.symfony.com/doc/rules/function_notation/return_type_declaration.html#rule-return-type-declaration "Permalink to this heading")

Adjust spacing around colon in return type declarations and backed enum types.

## Warning[¶](https://cs.symfony.com/doc/rules/function_notation/return_type_declaration.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/function_notation/return_type_declaration.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `space_before`.

## Configuration[¶](https://cs.symfony.com/doc/rules/function_notation/return_type_declaration.html#configuration "Permalink to this heading")

### `space_before`[¶](https://cs.symfony.com/doc/rules/function_notation/return_type_declaration.html#space-before "Permalink to this heading")

Spacing to apply before colon.

Allowed values: `'none'` and `'one'`

Default value: `'none'`

## Examples[¶](https://cs.symfony.com/doc/rules/function_notation/return_type_declaration.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/function_notation/return_type_declaration.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-function foo(int $a):string {};
+function foo(int $a): string {};
```

### Example #2[¶](https://cs.symfony.com/doc/rules/function_notation/return_type_declaration.html#example-2 "Permalink to this heading")

With configuration: `['space_before' => 'none']`.

```
--- Original
+++ New
 <?php
-function foo(int $a):string {};
+function foo(int $a): string {};
```

### Example #3[¶](https://cs.symfony.com/doc/rules/function_notation/return_type_declaration.html#example-3 "Permalink to this heading")

With configuration: `['space_before' => 'one']`.

```
--- Original
+++ New
 <?php
-function foo(int $a):string {};
+function foo(int $a) : string {};
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/function_notation/return_type_declaration.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)*
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html)
* [@PER-CS1.0](https://cs.symfony.com/doc/ruleSets/PER-CS1.0.html) *(deprecated)*
* [@PER-CS1x0](https://cs.symfony.com/doc/ruleSets/PER-CS1x0.html)
* [@PER-CS2.0](https://cs.symfony.com/doc/ruleSets/PER-CS2.0.html) *(deprecated)*
* [@PER-CS2x0](https://cs.symfony.com/doc/ruleSets/PER-CS2x0.html)
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)*
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html)
* [@PSR12](https://cs.symfony.com/doc/ruleSets/PSR12.html)
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/function_notation/return_type_declaration.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\FunctionNotation\ReturnTypeDeclarationFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/FunctionNotation/ReturnTypeDeclarationFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\FunctionNotation\ReturnTypeDeclarationFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/FunctionNotation/ReturnTypeDeclarationFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
