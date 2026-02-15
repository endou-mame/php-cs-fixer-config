---
title: "Rule mb_str_functions - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/alias/mb_str_functions"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `mb_str_functions`[¶](https://cs.symfony.com/doc/rules/alias/mb_str_functions.html#rule-mb-str-functions "Permalink to this heading")

Replace non multibyte-safe functions with corresponding mb function.

## Warning[¶](https://cs.symfony.com/doc/rules/alias/mb_str_functions.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/alias/mb_str_functions.html#this-rule-is-risky "Permalink to this heading")

Risky when any of the functions are overridden, or when relying on the string
byte size rather than its length in characters.

## Examples[¶](https://cs.symfony.com/doc/rules/alias/mb_str_functions.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/alias/mb_str_functions.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-$a = strlen($a);
-$a = strpos($a, $b);
-$a = strrpos($a, $b);
-$a = substr($a, $b);
-$a = strtolower($a);
-$a = strtoupper($a);
-$a = stripos($a, $b);
-$a = strripos($a, $b);
-$a = strstr($a, $b);
-$a = stristr($a, $b);
-$a = strrchr($a, $b);
-$a = substr_count($a, $b);
+$a = mb_strlen($a);
+$a = mb_strpos($a, $b);
+$a = mb_strrpos($a, $b);
+$a = mb_substr($a, $b);
+$a = mb_strtolower($a);
+$a = mb_strtoupper($a);
+$a = mb_stripos($a, $b);
+$a = mb_strripos($a, $b);
+$a = mb_strstr($a, $b);
+$a = mb_stristr($a, $b);
+$a = mb_strrchr($a, $b);
+$a = mb_substr_count($a, $b);
```

## References[¶](https://cs.symfony.com/doc/rules/alias/mb_str_functions.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Alias\MbStrFunctionsFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Alias/MbStrFunctionsFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Alias\MbStrFunctionsFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Alias/MbStrFunctionsFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
