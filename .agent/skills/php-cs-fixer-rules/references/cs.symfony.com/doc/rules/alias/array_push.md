---
title: "Rule array_push - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/alias/array_push"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `array_push`[¶](https://cs.symfony.com/doc/rules/alias/array_push.html#rule-array-push "Permalink to this heading")

Converts simple usages of `array_push($x, $y);` to `$x[] = $y;`.

## Warning[¶](https://cs.symfony.com/doc/rules/alias/array_push.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/alias/array_push.html#this-rule-is-risky "Permalink to this heading")

Risky when the function `array_push` is overridden.

## Examples[¶](https://cs.symfony.com/doc/rules/alias/array_push.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/alias/array_push.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-array_push($x, $y);
+$x[] = $y;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/alias/array_push.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)
* [@Symfony:risky](https://cs.symfony.com/doc/ruleSets/SymfonyRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/alias/array_push.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Alias\ArrayPushFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Alias/ArrayPushFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Alias\ArrayPushFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Alias/ArrayPushFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
