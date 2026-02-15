---
title: "Rule constant_case - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/casing/constant_case"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `constant_case`[¶](https://cs.symfony.com/doc/rules/casing/constant_case.html#rule-constant-case "Permalink to this heading")

The PHP constants `true`, `false`, and `null` MUST be written using the
correct casing.

## Warning[¶](https://cs.symfony.com/doc/rules/casing/constant_case.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/casing/constant_case.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `case`.

## Configuration[¶](https://cs.symfony.com/doc/rules/casing/constant_case.html#configuration "Permalink to this heading")

### `case`[¶](https://cs.symfony.com/doc/rules/casing/constant_case.html#case "Permalink to this heading")

Whether to use the `upper` or `lower` case syntax.

Allowed values: `'lower'` and `'upper'`

Default value: `'lower'`

## Examples[¶](https://cs.symfony.com/doc/rules/casing/constant_case.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/casing/constant_case.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-$a = FALSE;
-$b = True;
-$c = nuLL;
+$a = false;
+$b = true;
+$c = null;
```

### Example #2[¶](https://cs.symfony.com/doc/rules/casing/constant_case.html#example-2 "Permalink to this heading")

With configuration: `['case' => 'upper']`.

```
--- Original
+++ New
 <?php
 $a = FALSE;
-$b = True;
-$c = nuLL;
+$b = TRUE;
+$c = NULL;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/casing/constant_case.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)*
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html)
* [@PER-CS1.0](https://cs.symfony.com/doc/ruleSets/PER-CS1.0.html) *(deprecated)*
* [@PER-CS1x0](https://cs.symfony.com/doc/ruleSets/PER-CS1x0.html)
* [@PER-CS2.0](https://cs.symfony.com/doc/ruleSets/PER-CS2.0.html) *(deprecated)*
* [@PER-CS2x0](https://cs.symfony.com/doc/ruleSets/PER-CS2x0.html)
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)*
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html)
* [@PSR2](https://cs.symfony.com/doc/ruleSets/PSR2.html)
* [@PSR12](https://cs.symfony.com/doc/ruleSets/PSR12.html)
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/casing/constant_case.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Casing\ConstantCaseFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Casing/ConstantCaseFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Casing\ConstantCaseFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Casing/ConstantCaseFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
