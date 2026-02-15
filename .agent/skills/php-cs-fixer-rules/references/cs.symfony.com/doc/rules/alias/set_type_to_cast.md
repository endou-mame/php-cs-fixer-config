---
title: "Rule set_type_to_cast - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/alias/set_type_to_cast"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `set_type_to_cast`[¶](https://cs.symfony.com/doc/rules/alias/set_type_to_cast.html#rule-set-type-to-cast "Permalink to this heading")

Cast shall be used, not `settype`.

## Warning[¶](https://cs.symfony.com/doc/rules/alias/set_type_to_cast.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/alias/set_type_to_cast.html#this-rule-is-risky "Permalink to this heading")

Risky when the `settype` function is overridden or when used as the 2nd or 3rd
expression in a `for` loop .

## Examples[¶](https://cs.symfony.com/doc/rules/alias/set_type_to_cast.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/alias/set_type_to_cast.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-settype($foo, "integer");
-settype($bar, "string");
-settype($bar, "null");
+$foo = (int) $foo;
+$bar = (string) $bar;
+$bar = null;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/alias/set_type_to_cast.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)
* [@Symfony:risky](https://cs.symfony.com/doc/ruleSets/SymfonyRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/alias/set_type_to_cast.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Alias\SetTypeToCastFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Alias/SetTypeToCastFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Alias\SetTypeToCastFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Alias/SetTypeToCastFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
