---
title: "Rule function_typehint_space - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/function_notation/function_typehint_space"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `function_typehint_space`[¶](https://cs.symfony.com/doc/rules/function_notation/function_typehint_space.html#rule-function-typehint-space "Permalink to this heading")

Ensure single space between function’s argument and its typehint.

## Warning[¶](https://cs.symfony.com/doc/rules/function_notation/function_typehint_space.html#warning "Permalink to this heading")

### This rule is DEPRECATED and will be removed in the next major version 4.0[¶](https://cs.symfony.com/doc/rules/function_notation/function_typehint_space.html#this-rule-is-deprecated-and-will-be-removed-in-the-next-major-version-4-0 "Permalink to this heading")

You should use `type_declaration_spaces` instead.

## Examples[¶](https://cs.symfony.com/doc/rules/function_notation/function_typehint_space.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/function_notation/function_typehint_space.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-function sample(array$a)
+function sample(array $a)
 {}
```

### Example #2[¶](https://cs.symfony.com/doc/rules/function_notation/function_typehint_space.html#example-2 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-function sample(array  $a)
+function sample(array $a)
 {}
```

## References[¶](https://cs.symfony.com/doc/rules/function_notation/function_typehint_space.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\FunctionNotation\FunctionTypehintSpaceFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/FunctionNotation/FunctionTypehintSpaceFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\FunctionNotation\FunctionTypehintSpaceFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/FunctionNotation/FunctionTypehintSpaceFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
