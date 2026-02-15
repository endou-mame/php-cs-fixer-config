---
title: "Rule fopen_flag_order - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/function_notation/fopen_flag_order"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `fopen_flag_order`[¶](https://cs.symfony.com/doc/rules/function_notation/fopen_flag_order.html#rule-fopen-flag-order "Permalink to this heading")

Order the flags in `fopen` calls, `b` and `t` must be last.

## Warning[¶](https://cs.symfony.com/doc/rules/function_notation/fopen_flag_order.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/function_notation/fopen_flag_order.html#this-rule-is-risky "Permalink to this heading")

Risky when the function `fopen` is overridden.

## Examples[¶](https://cs.symfony.com/doc/rules/function_notation/fopen_flag_order.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/function_notation/fopen_flag_order.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-$a = fopen($foo, 'br+');
+$a = fopen($foo, 'r+b');
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/function_notation/fopen_flag_order.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)
* [@Symfony:risky](https://cs.symfony.com/doc/ruleSets/SymfonyRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/function_notation/fopen_flag_order.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\FunctionNotation\FopenFlagOrderFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/FunctionNotation/FopenFlagOrderFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\FunctionNotation\FopenFlagOrderFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/FunctionNotation/FopenFlagOrderFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
