---
title: "Rule fopen_flags - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/function_notation/fopen_flags"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `fopen_flags`[¶](https://cs.symfony.com/doc/rules/function_notation/fopen_flags.html#rule-fopen-flags "Permalink to this heading")

The flags in `fopen` calls must omit `t`, and `b` must be omitted or
included consistently.

## Warnings[¶](https://cs.symfony.com/doc/rules/function_notation/fopen_flags.html#warnings "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/function_notation/fopen_flags.html#this-rule-is-risky "Permalink to this heading")

Risky when the function `fopen` is overridden.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/function_notation/fopen_flags.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `b_mode`.

## Configuration[¶](https://cs.symfony.com/doc/rules/function_notation/fopen_flags.html#configuration "Permalink to this heading")

### `b_mode`[¶](https://cs.symfony.com/doc/rules/function_notation/fopen_flags.html#b-mode "Permalink to this heading")

The `b` flag must be used (`true`) or omitted (`false`).

Allowed types: `bool`

Default value: `true`

## Examples[¶](https://cs.symfony.com/doc/rules/function_notation/fopen_flags.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/function_notation/fopen_flags.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-$a = fopen($foo, 'rwt');
+$a = fopen($foo, 'rwb');
```

### Example #2[¶](https://cs.symfony.com/doc/rules/function_notation/fopen_flags.html#example-2 "Permalink to this heading")

With configuration: `['b_mode' => false]`.

```
--- Original
+++ New
 <?php
-$a = fopen($foo, 'rwt');
+$a = fopen($foo, 'rw');
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/function_notation/fopen_flags.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html) with config:

  `['b_mode' => false]`
* [@Symfony:risky](https://cs.symfony.com/doc/ruleSets/SymfonyRisky.html) with config:

  `['b_mode' => false]`

## References[¶](https://cs.symfony.com/doc/rules/function_notation/fopen_flags.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\FunctionNotation\FopenFlagsFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/FunctionNotation/FopenFlagsFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\FunctionNotation\FopenFlagsFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/FunctionNotation/FopenFlagsFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
