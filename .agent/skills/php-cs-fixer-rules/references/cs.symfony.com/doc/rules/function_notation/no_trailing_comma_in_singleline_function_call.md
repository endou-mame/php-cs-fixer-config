---
title: "Rule no_trailing_comma_in_singleline_function_call - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/function_notation/no_trailing_comma_in_singleline_function_call"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_trailing_comma_in_singleline_function_call`[¶](https://cs.symfony.com/doc/rules/function_notation/no_trailing_comma_in_singleline_function_call.html#rule-no-trailing-comma-in-singleline-function-call "Permalink to this heading")

When making a method or function call on a single line there MUST NOT be a
trailing comma after the last argument.

## Warning[¶](https://cs.symfony.com/doc/rules/function_notation/no_trailing_comma_in_singleline_function_call.html#warning "Permalink to this heading")

### This rule is DEPRECATED and will be removed in the next major version 4.0[¶](https://cs.symfony.com/doc/rules/function_notation/no_trailing_comma_in_singleline_function_call.html#this-rule-is-deprecated-and-will-be-removed-in-the-next-major-version-4-0 "Permalink to this heading")

You should use `no_trailing_comma_in_singleline` instead.

## Examples[¶](https://cs.symfony.com/doc/rules/function_notation/no_trailing_comma_in_singleline_function_call.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/function_notation/no_trailing_comma_in_singleline_function_call.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-foo($a,);
+foo($a);
```

## References[¶](https://cs.symfony.com/doc/rules/function_notation/no_trailing_comma_in_singleline_function_call.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\FunctionNotation\NoTrailingCommaInSinglelineFunctionCallFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/FunctionNotation/NoTrailingCommaInSinglelineFunctionCallFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\FunctionNotation\NoTrailingCommaInSinglelineFunctionCallFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/FunctionNotation/NoTrailingCommaInSinglelineFunctionCallFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
