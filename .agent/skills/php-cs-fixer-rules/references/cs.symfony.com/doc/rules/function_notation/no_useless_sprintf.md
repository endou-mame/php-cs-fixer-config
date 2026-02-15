---
title: "Rule no_useless_sprintf - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/function_notation/no_useless_sprintf"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_useless_sprintf`[¶](https://cs.symfony.com/doc/rules/function_notation/no_useless_sprintf.html#rule-no-useless-sprintf "Permalink to this heading")

There must be no `sprintf` calls with only the first argument.

## Warning[¶](https://cs.symfony.com/doc/rules/function_notation/no_useless_sprintf.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/function_notation/no_useless_sprintf.html#this-rule-is-risky "Permalink to this heading")

Risky when if the `sprintf` function is overridden.

## Examples[¶](https://cs.symfony.com/doc/rules/function_notation/no_useless_sprintf.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/function_notation/no_useless_sprintf.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-$foo = sprintf('bar');
+$foo = 'bar';
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/function_notation/no_useless_sprintf.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)
* [@Symfony:risky](https://cs.symfony.com/doc/ruleSets/SymfonyRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/function_notation/no_useless_sprintf.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\FunctionNotation\NoUselessSprintfFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/FunctionNotation/NoUselessSprintfFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\FunctionNotation\NoUselessSprintfFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/FunctionNotation/NoUselessSprintfFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
