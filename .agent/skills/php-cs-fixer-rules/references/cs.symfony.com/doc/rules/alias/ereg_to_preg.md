---
title: "Rule ereg_to_preg - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/alias/ereg_to_preg"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `ereg_to_preg`[¶](https://cs.symfony.com/doc/rules/alias/ereg_to_preg.html#rule-ereg-to-preg "Permalink to this heading")

Replace deprecated `ereg` regular expression functions with `preg`.

## Warning[¶](https://cs.symfony.com/doc/rules/alias/ereg_to_preg.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/alias/ereg_to_preg.html#this-rule-is-risky "Permalink to this heading")

Risky if the `ereg` function is overridden.

## Examples[¶](https://cs.symfony.com/doc/rules/alias/ereg_to_preg.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/alias/ereg_to_preg.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
-<?php $x = ereg('[A-Z]');
+<?php $x = preg_match('/[A-Z]/D');
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/alias/ereg_to_preg.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)
* [@Symfony:risky](https://cs.symfony.com/doc/ruleSets/SymfonyRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/alias/ereg_to_preg.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Alias\EregToPregFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Alias/EregToPregFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Alias\EregToPregFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Alias/EregToPregFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
