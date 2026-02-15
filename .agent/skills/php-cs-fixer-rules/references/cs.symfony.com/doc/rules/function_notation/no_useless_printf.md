---
title: "Rule no_useless_printf - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/function_notation/no_useless_printf"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_useless_printf`[¶](https://cs.symfony.com/doc/rules/function_notation/no_useless_printf.html#rule-no-useless-printf "Permalink to this heading")

There must be no `printf` calls with only the first argument.

## Warning[¶](https://cs.symfony.com/doc/rules/function_notation/no_useless_printf.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/function_notation/no_useless_printf.html#this-rule-is-risky "Permalink to this heading")

Risky when the `printf` function is overridden.

## Examples[¶](https://cs.symfony.com/doc/rules/function_notation/no_useless_printf.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/function_notation/no_useless_printf.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php

-printf('bar');
+print 'bar';
```

## References[¶](https://cs.symfony.com/doc/rules/function_notation/no_useless_printf.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\FunctionNotation\NoUselessPrintfFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/FunctionNotation/NoUselessPrintfFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\FunctionNotation\NoUselessPrintfFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/FunctionNotation/NoUselessPrintfFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
