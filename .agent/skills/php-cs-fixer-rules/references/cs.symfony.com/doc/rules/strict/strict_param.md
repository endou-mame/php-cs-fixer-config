---
title: "Rule strict_param - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/strict/strict_param"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `strict_param`[¶](https://cs.symfony.com/doc/rules/strict/strict_param.html#rule-strict-param "Permalink to this heading")

Functions should be used with `$strict` param set to `true`.

## Description[¶](https://cs.symfony.com/doc/rules/strict/strict_param.html#description "Permalink to this heading")

The functions “array\_keys”, “array\_search”, “base64\_decode”, “in\_array” and
“mb\_detect\_encoding” should be used with $strict param.

## Warning[¶](https://cs.symfony.com/doc/rules/strict/strict_param.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/strict/strict_param.html#this-rule-is-risky "Permalink to this heading")

Risky when the fixed function is overridden or if the code relies on non-strict
usage.

## Examples[¶](https://cs.symfony.com/doc/rules/strict/strict_param.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/strict/strict_param.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 $a = array_keys($b);
-$a = array_search($b, $c);
-$a = base64_decode($b);
-$a = in_array($b, $c);
-$a = mb_detect_encoding($b, $c);
+$a = array_search($b, $c, true);
+$a = base64_decode($b, true);
+$a = in_array($b, $c, true);
+$a = mb_detect_encoding($b, $c, true);
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/strict/strict_param.html#rule-sets "Permalink to this heading")

The rule is part of the following rule set:

* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/strict/strict_param.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Strict\StrictParamFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Strict/StrictParamFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Strict\StrictParamFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Strict/StrictParamFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
