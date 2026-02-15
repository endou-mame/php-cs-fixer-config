---
title: "Rule ternary_to_elvis_operator - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/operator/ternary_to_elvis_operator"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `ternary_to_elvis_operator`[¶](https://cs.symfony.com/doc/rules/operator/ternary_to_elvis_operator.html#rule-ternary-to-elvis-operator "Permalink to this heading")

Use the Elvis operator `?:` where possible.

## Warning[¶](https://cs.symfony.com/doc/rules/operator/ternary_to_elvis_operator.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/operator/ternary_to_elvis_operator.html#this-rule-is-risky "Permalink to this heading")

Risky when relying on functions called on both sides of the `?` operator.

## Examples[¶](https://cs.symfony.com/doc/rules/operator/ternary_to_elvis_operator.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/operator/ternary_to_elvis_operator.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-$foo = $foo ? $foo : 1;
+$foo = $foo ?  : 1;
```

### Example #2[¶](https://cs.symfony.com/doc/rules/operator/ternary_to_elvis_operator.html#example-2 "Permalink to this heading")

```
--- Original
+++ New
-<?php $foo = $bar[a()] ? $bar[a()] : 1; # "risky" sample, "a()" only gets called once after fixing
+<?php $foo = $bar[a()] ?  : 1; # "risky" sample, "a()" only gets called once after fixing
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/operator/ternary_to_elvis_operator.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)
* [@Symfony:risky](https://cs.symfony.com/doc/ruleSets/SymfonyRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/operator/ternary_to_elvis_operator.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Operator\TernaryToElvisOperatorFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Operator/TernaryToElvisOperatorFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Operator\TernaryToElvisOperatorFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Operator/TernaryToElvisOperatorFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
