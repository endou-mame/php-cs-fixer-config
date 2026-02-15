---
title: "Rule static_lambda - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/function_notation/static_lambda"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `static_lambda`[¶](https://cs.symfony.com/doc/rules/function_notation/static_lambda.html#rule-static-lambda "Permalink to this heading")

Lambdas not (indirectly) referencing `$this` must be declared `static`.

## Warning[¶](https://cs.symfony.com/doc/rules/function_notation/static_lambda.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/function_notation/static_lambda.html#this-rule-is-risky "Permalink to this heading")

Risky when using `->bindTo` on lambdas without referencing to `$this`.

## Examples[¶](https://cs.symfony.com/doc/rules/function_notation/static_lambda.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/function_notation/static_lambda.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-$a = function () use ($b)
+$a = static function () use ($b)
 {   echo $b;
 };
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/function_notation/static_lambda.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)
* [@Symfony:risky](https://cs.symfony.com/doc/ruleSets/SymfonyRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/function_notation/static_lambda.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\FunctionNotation\StaticLambdaFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/FunctionNotation/StaticLambdaFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\FunctionNotation\StaticLambdaFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/FunctionNotation/StaticLambdaFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
