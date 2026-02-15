---
title: "Rule no_mixed_echo_print - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/alias/no_mixed_echo_print"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_mixed_echo_print`[¶](https://cs.symfony.com/doc/rules/alias/no_mixed_echo_print.html#rule-no-mixed-echo-print "Permalink to this heading")

Either language construct `print` or `echo` should be used.

## Warning[¶](https://cs.symfony.com/doc/rules/alias/no_mixed_echo_print.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/alias/no_mixed_echo_print.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `use`.

## Configuration[¶](https://cs.symfony.com/doc/rules/alias/no_mixed_echo_print.html#configuration "Permalink to this heading")

### `use`[¶](https://cs.symfony.com/doc/rules/alias/no_mixed_echo_print.html#use "Permalink to this heading")

The desired language construct.

Allowed values: `'echo'` and `'print'`

Default value: `'echo'`

## Examples[¶](https://cs.symfony.com/doc/rules/alias/no_mixed_echo_print.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/alias/no_mixed_echo_print.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
-<?php print 'example';
+<?php echo 'example';
```

### Example #2[¶](https://cs.symfony.com/doc/rules/alias/no_mixed_echo_print.html#example-2 "Permalink to this heading")

With configuration: `['use' => 'print']`.

```
--- Original
+++ New
-<?php echo('example');
+<?php print('example');
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/alias/no_mixed_echo_print.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/alias/no_mixed_echo_print.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Alias\NoMixedEchoPrintFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Alias/NoMixedEchoPrintFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Alias\NoMixedEchoPrintFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Alias/NoMixedEchoPrintFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
