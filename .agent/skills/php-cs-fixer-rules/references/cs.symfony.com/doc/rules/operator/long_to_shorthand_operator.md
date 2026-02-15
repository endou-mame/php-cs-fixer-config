---
title: "Rule long_to_shorthand_operator - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/operator/long_to_shorthand_operator"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `long_to_shorthand_operator`[¶](https://cs.symfony.com/doc/rules/operator/long_to_shorthand_operator.html#rule-long-to-shorthand-operator "Permalink to this heading")

Shorthand notation for operators should be used if possible.

## Warning[¶](https://cs.symfony.com/doc/rules/operator/long_to_shorthand_operator.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/operator/long_to_shorthand_operator.html#this-rule-is-risky "Permalink to this heading")

Risky when applying for string offsets (e.g. `<?php $text = "foo"; $text[0] =
$text[0] & "\x7F";`).

## Examples[¶](https://cs.symfony.com/doc/rules/operator/long_to_shorthand_operator.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/operator/long_to_shorthand_operator.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-$i = $i + 10;
+$i += 10;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/operator/long_to_shorthand_operator.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)
* [@Symfony:risky](https://cs.symfony.com/doc/ruleSets/SymfonyRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/operator/long_to_shorthand_operator.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Operator\LongToShorthandOperatorFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Operator/LongToShorthandOperatorFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Operator\LongToShorthandOperatorFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Operator/LongToShorthandOperatorFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
